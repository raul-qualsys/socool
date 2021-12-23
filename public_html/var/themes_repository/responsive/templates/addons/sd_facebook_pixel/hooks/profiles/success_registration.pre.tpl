{if $facebook_pixel_ids && $addons.sd_facebook_pixel.complete_registration_facebook_pixel == "Y"}
    <script type="text/javascript">
        (function(_, $) {
            fbq('track', 'CompleteRegistration');
        }(Tygh, Tygh.$));
    </script>
{/if}
