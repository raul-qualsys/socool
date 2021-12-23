(function(_, $) {
    $.ceEvent('on', 'ce.formajaxpost_step_one_register_form', function(response_data) {
        if (response_data !== undefined) {
            var register_at_checkout = response_data["notifications"];
            for(key in register_at_checkout) {
                if (register_at_checkout[key]["type"] == "N") {
                    fbq('track', 'CompleteRegistration');
                }
            }
        }
    });

    $(document).ready(function(){
        if ($('#sd_onepage_checkout_flag').length > 0 && $('#sd_onepage_checkout_register_at_checkout').length > 0) {
            fbq('track', 'CompleteRegistration');
        }
    });
}(Tygh, Tygh.$));