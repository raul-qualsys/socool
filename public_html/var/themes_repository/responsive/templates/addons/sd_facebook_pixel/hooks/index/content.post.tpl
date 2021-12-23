{if $addons.sd_facebook_pixel.complete_registration_facebook_pixel == "Y"}
    {script src="js/addons/sd_facebook_pixel/func.js"}
{/if}

{* Checkout template doesn't have necessary hooks*}
{if $facebook_pixel_ids && $runtime.controller == "checkout"}
    {if $runtime.mode == 'checkout' && $addons.sd_facebook_pixel.initiate_checkout_facebook_pixel == "Y"}
        <script>
            (function(_, $) {
                var is_init_checkout = false,
                    user_id = '{$auth.user_id}',
                    user_data = '{$user_data.firstname}';

                var Initiate = function() {
                    {foreach $facebook_checkout as $company_id => $order}
                        {$pixel_id = $facebook_pixel_ids[$company_id]}

                        fbq('trackSingle', '{$pixel_id}', 'InitiateCheckout', {
                            value: '{$order.value}',
                            currency: '{$secondary_currency}',
                            num_items: '{$order.num_items}',
                            contents: {$order.contents|json_encode nofilter},
                            content_type: 'product'
                        });
                    {/foreach}
                }

                if (!is_init_checkout) {
                    {if $addons.sd_facebook_pixel.track_initiate_checkout == "only_after_auth"}
                        if (user_id != 0 || user_data) {
                            Initiate();
                            is_init_checkout == true;
                        }
                    {elseif $addons.sd_facebook_pixel.track_initiate_checkout == "all_stages"}
                        Initiate();
                        is_init_checkout == true;
                    {/if}
                }
            }(Tygh, Tygh.$));
        </script>
    {/if}
{/if}