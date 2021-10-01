$(function () {

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    }); // TO SEND THE CSRF TOKEN WITH AJAX REQUEST

        $('body').on('click', '.show-student-form', function (e) {
            e.preventDefault();
            let btn       = $(this),
                form     = $('body').find('#load-form');
            if (! btn.attr('href')) {
                return false;
            }

            form.addClass('load');
            $.ajax({
                url: btn.attr('href'),
                type: "GET",
                success: function (data, textStatus, jqXHR) {
                    form.removeClass('load').form('show');
                },
                error: function(jqXhr) {
                   alert('something wrong');
                },
            });
        }); //show student register form

        $('body').on('click', '.show-teacher-form', function (e) {
            e.preventDefault();
            let btn       = $(this),
                form     = $('body').find('#load-teaher-form');

            if (! btn.attr('href')) {
                return false;
            }

            form.addClass('load');
            $.ajax({
                url: btn.attr('href'),
                type: "GET",
                success: function (data, textStatus, jqXHR) {

                    activeElement.addClass("active");
                    form.removeClass('load').form('show');
                },
                error: function(jqXhr) {
                   alert('something wrong');
                },
            });
        }); //show teacher register form

        $('body').on('click', '.show-login-form', function (e) {
            e.preventDefault();
            let btn       = $(this),
                form     = $('body').find('#load-form');

            if (! btn.attr('href')) {
                return false;
            }

            form.addClass('load');
            $.ajax({
                url: btn.attr('href'),
                type: "GET",
                success: function (data, textStatus, jqXHR) {

                    form.removeClass('load').form('show');
                },
                error: function(jqXhr) {
                   alert('something wrong');
                },
            });
        }); //show login form

        $('body').on('submit', 'form.submit-form', function(e) {
            e.preventDefault();
            let form = $(this);
            form.find('span.error').fadeOut(200);
            $.ajax({
                url: form.attr('action'),
                type: "POST",
                data: new FormData($(this)[0]),
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function (data, textStatus, jqXHR) {
                    if (data.redirect) {
                        return window.location = data.redirect;
                    }
                    $('#edit-profile').modal("hide");
                    toast(data.message, null, data.alert_type);
                },
                // error: function (jqXHR) {
                //     var message = '';
                //     if(jqXHR.status == 422){
                //         $.each(jqXHR.responseJSON.errors, function(key,value) {
                //             message += `\n ${value} \n`;
                //         });
                     
                //         toast(message);
                //     }
                // },
                error: function (jqXhr, textStatus, errorMessage) {
                    if (jqXhr.readyState == 0) {
                        return false;
                    } else if (jqXhr.status == 422) {
                        $.each(jqXhr.responseJSON.errors, function (key, val) {
                            key = key.split('.');
                            if (key.length > 1) {
                                form.find(`input[name*='${key[0]}[${key[1]}][${key[2]}]']`).parent().next('span.error').text(val).fadeIn(300);
                            } else {
                                form.find(`#${key}-error`).text(val).fadeIn(300);
                            }
                        });
                    } else {
                        if (jqXhr.responseJSON.line) {
                            toast('File: ' + jqXhr.responseJSON.file + ' (Line: ' + jqXhr.responseJSON.line + ')', jqXhr.responseJSON.message)
                        } else {
                            toast(jqXhr.responseJSON, title = null);
                        }
                    }
                },
            });
        }); // WHEN SUBMIT THE FORM SEND DATA TO CONTROLLER

        // show modal
        $('body').on('click', '#create_quiz', function (e) {
            // e.preventDefault();
            let btn       = $(this),
                form     = $('body').find('#load-form');

            if (! btn.attr('href')) {
                return false;
            }

            form.addClass('load');
            $.ajax({
                url: btn.attr('href'),
                type: "GET",
                success: function (response) {
                    $('#var_content').html(response);
                    form.removeClass('load').form('show');
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
        }); 

 // get subjects when change level

 $('body').on('change', '#level_id', function () {
    let id = this.value;
    let subject = $('#subject_id');
    console.log(subject);
      $.ajax({
          url: 'get_subjects/'+id,
          type: "GET",
          success: function (response) {
            
            
            subject.empty();
            response.each(function(index,value){
                console.log(value);
              subject.append(`<option value="${value.id}">${value.name}</option>`);
            })
         
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
  });
        

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
