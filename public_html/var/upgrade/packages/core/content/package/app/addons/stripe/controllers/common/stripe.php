<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Addons\Stripe\Payments\Stripe;

defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] === 'POST'
    && $mode === 'check_confirmation'
) {
    /** @var \Tygh\Ajax $ajax */
    $ajax = Tygh::$app['ajax'];

    $params = array_merge([
        'total'             => null,
        'payment_id'        => null,
        'payment_intent_id' => null,
        'email'             => null,
    ], $_REQUEST);

    if ($params['email']) {
        $user_id = empty(Tygh::$app['session']['auth']['user_id'])
            ? 0
            : Tygh::$app['session']['auth']['user_id'];
        if (fn_is_user_exists($user_id, $params)) {
            $ajax->assign('error', [
                'message' => __('error_user_exists')
            ]);
            exit;
        }
    }

    $total = 0;
    if ($action === 'instant_payment') {
        $total = $params['total'];
    } else {
        $total = Tygh::$app['session']['cart']['total'];
        if (!empty(Tygh::$app['session']['cart']['payment_surcharge'])) {
            $total += Tygh::$app['session']['cart']['payment_surcharge'];
        }
    }

    $payment_id = $action === 'instant_payment'
        ? $params['payment_id']
        : Tygh::$app['session']['cart']['payment_id'];

    $processor = new Stripe(
        $payment_id,
        Tygh::$app['db'],
        Tygh::$app['addons.stripe.price_formatter']
    );

    $confirmation_result = $processor->getPaymentConfirmationDetails($params['payment_intent_id'], $total);

    if ($confirmation_result->isSuccess()) {
        foreach ($confirmation_result->getData() as $field => $value) {
            $ajax->assign($field, $value);
        }
    } else {
        $ajax->assign('error', [
            'message' => __('text_order_placed_error'),
        ]);
    }
    exit;
}

return [CONTROLLER_STATUS_NO_PAGE];
