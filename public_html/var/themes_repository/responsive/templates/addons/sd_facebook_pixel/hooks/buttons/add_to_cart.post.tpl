{if $facebook_pixel_ids && $addons.sd_facebook_pixel.add_to_cart_facebook_pixel == "Y"}
    <script type="text/javascript">
        (function(_, $) {
            $('#button_cart_ajax{$product.product_id}, #button_cart_{$product.product_id}{if $product.variation_product_id}_{$product.variation_product_id}{/if}, #button_cart_{$obj_prefix}{$product.product_id}').unbind("click").click(function() {
                var milliseconds = new Date().getTime();
                window._fbq.push(['track', 'AddToCart', {
                    {if $addons.sd_facebook_pixel.account_facebook_pixel == 'business'}
                    content_type: 'product',
                    content_ids: ['{$product.product_id}'],
                    value: '{$product.price}',
                    currency: '{$primary_currency}',
                    {/if}
                    timestamp: milliseconds
                }]);
            });
        }(Tygh, Tygh.$));
    </script>
{/if}
