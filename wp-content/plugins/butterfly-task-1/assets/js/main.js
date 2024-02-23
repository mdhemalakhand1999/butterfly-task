(function($) {
    $(window).on('load', function() {
        $('.butterfly-login-form').submit(function(e) {
            e.preventDefault();
            const username = $(this).find('input[name="username"]').val();
            const email = $(this).find('input[name="email"]').val();
            const age = $(this).find('input[name="age"]').val();
            const data = {
                method: "POST",
                url: butterfly_ajax.ajax_url,
                data: {
                    action: 'butterfly_handle_form',
                    username,
                    email,
                    age,
                    nonce: butterfly_ajax.nonce
                }
            }
            $.ajax(data).done(function(response) {
                console.log(response);
            })
        });
    })
})(jQuery)