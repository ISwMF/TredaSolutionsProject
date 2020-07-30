(function ($) {
    alert('something');
    'use strict';

    var form = $('.contact__form'),
        message = $('.contact__msg'),
        form_data;

    // Success function
    function done_func(response) {
        message.fadeIn()
        message.html(response);
        setTimeout(function () {
            message.fadeOut();
        }, 5000);

        form.find('input:not([type="submit"]), textarea').val('');
    }

    // fail function
    function fail_func(data) {
        message.fadeIn()
        message.html(data.responseText);
        setTimeout(function () {
            message.fadeOut(5000);
        }, 5000);
    }

    form.submit(function (e) {
        e.preventDefault();
        form_data = $(this).serialize();
        var indice = form_data.indexOf('&');
        var id = "";
        for (let index = indice - 1; index >= 0; index--) {
            if (form_data[index] == '=') {
                break;
            } else {
                id = form_data[index] + id;
            }
        }
        $.ajax({
            type: 'GET',
            url: 'aleluya/' + id,
            data: form_data
        })
            .done(done_func)
            .fail(fail_func);
    });
})(jQuery);