{if $facebook_pixel_orders && $facebook_pixel_ids}
    {if $addons.sd_facebook_pixel.purchase_facebook_pixel == "Y"}
        <script>
            (function(_, $) {
                {foreach $facebook_pixel_orders as $company_id => $pixel_order}
                    {$pixel_id = $facebook_pixel_ids[$company_id]}

                    fbq('trackSingle', '{$pixel_id}', 'Purchase', {
                        value: '{$pixel_order.value}',
                        currency: '{$pixel_order.currency}',
                        num_items: '{$pixel_order.num_items}',
                        contents: {$pixel_order.contents|json_encode nofilter},
                        content_type: 'product'
                    });
                {/foreach}
            }(Tygh, Tygh.$));
        </script>
    {/if}

    {if $addons.sd_facebook_pixel.add_payment_info_facebook_pixel == "Y"}
        <script>
            (function(_, $) {
                fbq('track', 'AddPaymentInfo');
            }(Tygh, Tygh.$));
        </script>
    {/if}
{/if}
