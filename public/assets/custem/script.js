$(function () {

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    }); // TO SEND THE CSRF TOKEN WITH AJAX REQUEST

        // $('body').on('click', '.show-student-form', function (e) {
        //     e.preventDefault();
        //     let btn       = $(this),
        //         form     = $('body').find('#load-form');
        //     if (! btn.attr('href')) {
        //         return false;
        //     }

        //     form.addClass('load');
        //     $.ajax({
        //         url: btn.attr('href'),
        //         type: "GET",
        //         success: function (data, textStatus, jqXHR) {
        //             form.removeClass('load').form('show');
        //         },
        //         error: function(jqXhr) {
        //            alert('something wrong');
        //         },
        //     });
        // }); //show student register form

        // $('body').on('click', '.show-teacher-form', function (e) {
        //     e.preventDefault();
        //     let btn       = $(this),
        //         form     = $('body').find('#load-teaher-form');

        //     if (! btn.attr('href')) {
        //         return false;
        //     }

        //     form.addClass('load');
        //     $.ajax({
        //         url: btn.attr('href'),
        //         type: "GET",
        //         success: function (data, textStatus, jqXHR) {

        //             activeElement.addClass("active");
        //             form.removeClass('load').form('show');
        //         },
        //         error: function(jqXhr) {
        //            alert('something wrong');
        //         },
        //     });
        // }); //show teacher register form

        // $('body').on('click', '.show-login-form', function (e) {
        //     e.preventDefault();
        //     let btn       = $(this),
        //         form     = $('body').find('#load-form');

        //     if (! btn.attr('href')) {
        //         return false;
        //     }

        //     form.addClass('load');
        //     $.ajax({
        //         url: btn.attr('href'),
        //         type: "GET",
        //         success: function (data, textStatus, jqXHR) {

        //             form.removeClass('load').form('show');
        //         },
        //         error: function(jqXhr) {
        //            alert('something wrong');
        //         },
        //     });
        // }); //show login form

        $('body').on('submit', 'form.submit-form', function(e) {
            e.preventDefault();
            let form = $(this);

            $.ajax({
                url: form.attr('action'),
                type: "POST",
                data: new FormData($(this)[0]),
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function (data, textStatus, jqXHR) {
                    // if (data.redirect) {
                    //     return window.location = data.redirect;
                    // }
                    toast(data.message, null, data.alert_type);
                },
                error: function (jqXHR) {
                    var message = '';
                    if(jqXHR.status == 422){
                        $.each(jqXHR.responseJSON.errors, function(key,value) {
                            message += `\n ${value} \n`;
                        });
                        toast(message);
                    }
                },
            });
        }); // WHEN SUBMIT THE FORM SEND DATA TO CONTROLLER


    function toast(message, title = null, icon = 'error', timer = 5000)
    {
        const Toast = Swal.mixin({
        toast: true,
        position: $('html').attr('lang') == 'ar' ? 'top-start' : 'top-end',
        showConfirmButton: false,
        showCloseButton: true,
        timer: timer,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        })

        Toast.fire({
            icon: icon,
            title: title,
            text: message,
        })
    }

});
