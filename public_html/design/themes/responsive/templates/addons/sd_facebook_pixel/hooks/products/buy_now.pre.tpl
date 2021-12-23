{if $facebook_pixel_ids && $addons.sd_facebook_pixel.add_to_wish_list_facebook_pixel == "Y"}
    <script>
        (function(_, $) {
            $('#button_wishlist_ajax{$product.product_id}, #button_wishlist_{$product.product_id}').click(function() {
                var milliseconds = new Date().getTime();
                window._fbq.push(['track', 'AddToWishlist', {
                    timestamp: milliseconds
                }]);
            });
        }(Tygh, Tygh.$));
    </script>
{/if}
