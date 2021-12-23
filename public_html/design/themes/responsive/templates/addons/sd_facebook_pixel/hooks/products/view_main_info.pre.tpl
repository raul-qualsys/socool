{$category = $product.main_category|fn_get_category_name}

{if $facebook_pixel_ids && $addons.sd_facebook_pixel.view_content_facebook_pixel == "Y"}
    <script>
        (function(_, $) {
            var milliseconds = new Date().getTime();
            fbq('track', 'ViewContent', {
                {if $addons.sd_facebook_pixel.account_facebook_pixel == 'business'}
                content_type: 'product',
                content_ids: ['{$product.product_id}'],
                {/if}
                {if $product.price}
                value: {math equation="{$product.price}{if $currencies.$secondary_currency} / {$currencies[$secondary_currency].coefficient} {/if}" format="%.{$currencies[$secondary_currency].decimals}f"},
                {/if}
                content_category: '{$categories_pixel|escape:javascript nofilter}',
                currency: '{$secondary_currency}',
                product_name: '{$product.product|escape:javascript nofilter}',
                date_published: '{$product.updated_timestamp|date_format:"%Y-%m-%d"}',
                url: '{"products.view&product_id=`$product.product_id`"|fn_url|escape:javascript nofilter}',
                timestamp: milliseconds
            });
        }(Tygh, Tygh.$));
    </script>
{/if}

{if $facebook_pixel_ids && $addons.sd_facebook_pixel.lead_facebook_pixel == "Y"}
    <script>
        (function(_, $) {
            var milliseconds = new Date().getTime();
            fbq('track', 'Lead', {
                content_name: '{$product.product|escape:javascript nofilter}',
                content_category: '{$category|escape:javascript nofilter}',
                {if $product.price}
                value: {math equation="{$product.price}{if $currencies.$secondary_currency} / {$currencies[$secondary_currency].coefficient} {/if}" format="%.{$currencies[$secondary_currency].decimals}f"},
                {/if}
                currency: '{$secondary_currency}',
                timestamp: milliseconds
            });
        }(Tygh, Tygh.$));
    </script>
{/if}
