(function (_, $) {

    var canMakePayment = false;

    function showUnsupportedPaymentMethodMessage($paymentButton) {
        var $message = $($paymentButton.data('caStripeUnsupportedPayment'));
        $message.removeClass('hidden');
    }

    _.stripe = _.stripe || {};
    _.stripe.view = {
        id: 'payment_button',
        name: 'Payment Button',

        render: function (stripeInstance, stripeElementsApi, stripeElements, elements) {
            var $paymentButton = elements.paymentButton,
                $form = elements.form,
                $submitButton = $('[type="submit"]', $form);

            $submitButton.addClass('hidden');

            _.stripe.paymentRequest = new stripeInstance.paymentRequest({
                country: $paymentButton.data('caStripeCountry').toUpperCase(),
                currency: $paymentButton.data('caStripeCurrency').toLowerCase(),
                total: {
                    amount: $paymentButton.data('caStripeTotal'),
                    label: $paymentButton.data('caStripePaymentLabel')
                },
                requestPayerName: false,
                requestPayerEmail: false,
                requestPayerPhone: false,
                requestShipping: false
            });

            _.stripe.paymentRequest.canMakePayment().then(function (result) {
                if (_.stripe.payment.canMakePayment(result)) {
                    canMakePayment = true;
                    $submitButton.removeClass('hidden');
                    return;
                }

                showUnsupportedPaymentMethodMessage($paymentButton);
            });
        },

        checkConfirmation: function(stripeInstance, paymentIntentResult, $paymentIntentId, $form)
        {
            $.ceAjax('request', $paymentIntentId.data('caStripeConfirmationUrl'), {
                method: 'post',
                hidden: false,
                caching: false,
                data: {
                    payment_intent_id: paymentIntentResult.paymentMethod.id,
                },
                callback: function(response) {
                    if (response.error) {
                        $.ceNotification('show', {
                            type: 'E',
                            title: _.tr('error'),
                            message: response.error.message
                        });
                        return;
                    }

                    if (response.requires_confirmation) {
                        _.stripe.view.requireConfirmation(stripeInstance, response.client_secret, $paymentIntentId, $form);
                    } else {
                        _.stripe.view.confirmPaymentIntent(response.payment_intent_id, $paymentIntentId, $form);
                    }
                }
            });
        },

        confirmPaymentIntent: function(paymentIntentId, $paymentIntentId, $form) {
            $paymentIntentId.val(paymentIntentId)
            $form.submit();
        },

        requireConfirmation: function(stripeInstance, paymentIntentClientSecret, $paymentIntentId, $form) {
            stripeInstance.handleCardAction(paymentIntentClientSecret).then(function(result) {
                if (result.error) {
                    $.ceNotification('show', {
                        type: 'E',
                        title: _.tr('error'),
                        message: result.error.message
                    });
                    return;
                }

                _.stripe.view.confirmPaymentIntent(result.paymentIntent.id, $paymentIntentId, $form);
            });
        },

        addSubmitHandler: function (stripeInstance, stripeElementsApi, stripeElements, elements) {
            var $form = elements.form,
                $paymentIntentId = elements.paymentIntentId,
                $submitButton = $('[type="submit"]', $form);

            $form.data('caStripePaymentId', $paymentIntentId.data('caStripePaymentId'));

            // payment request must be shown within the click handler
            $submitButton.on('click', function(e) {
                if ($form.ceFormValidator('check')) {
                    e.preventDefault();
                    if (canMakePayment) {
                        _.stripe.paymentRequest.show();
                    }
                }
            });

            _.stripe.paymentRequest.on('paymentmethod', function (result) {
                if (result.error) {
                    result.complete('fail');
                    $.ceNotification('show', {
                        type: 'E',
                        title: _.tr('error'),
                        message: result.error.message
                    });
                    return;
                }

                result.complete('success');
                _.stripe.view.checkConfirmation(stripeInstance, result, $paymentIntentId, $form);
            });

            $.ceEvent('on', 'ce.formpost_' + $form.prop('name'), function ($form, $submitBtn) {
                var elements = _.stripe.view.getElements($form),
                    $paymentIntentId = elements.paymentIntentId;

                var isSubmit = !$submitBtn.hasClass('cm-skip-validation') && $paymentIntentId.length !== 0;
                var isValidPayment = $paymentIntentId.data('caStripePaymentId') === $form.data('caStripePaymentId');
                var isSubmitted = $paymentIntentId.data('caStripeIsSubmitted');

                if (!isSubmit || !isValidPayment || isSubmitted) {
                    return true;
                }

                if (!$paymentIntentId.val()) {
                    return false;
                }

                $paymentIntentId.data('caStripeIsSubmitted', true);
            });

            $paymentIntentId.data('caStripeIsFormReady', true);
        },

        isInitialized: function (elements) {
            return elements.paymentIntentId && elements.paymentIntentId.data('caStripeIsFormReady');
        },

        teardown: function (stripeElements) {
            stripeElements.paymentButton && stripeElements.paymentButton.destroy();
        },

        getElements: function ($form) {
            return {
                paymentButton: $('[data-ca-stripe-element="paymentButton"]', $form),
                paymentIntentId: $('[data-ca-stripe-element="paymentIntentId"]', $form)
            };
        }
    };
})(Tygh, Tygh.$);
