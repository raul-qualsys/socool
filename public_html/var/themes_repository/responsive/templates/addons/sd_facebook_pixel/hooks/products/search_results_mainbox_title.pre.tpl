{if $facebook_pixel_ids && $addons.sd_facebook_pixel.search_facebook_pixel == "Y"}
    <script>
        (function(_, $) {
            fbq('track', 'Search');
        }(Tygh, Tygh.$));
    </script>
{/if}
