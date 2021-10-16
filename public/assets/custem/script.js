$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    }); // TO SEND THE CSRF TOKEN WITH AJAX REQUEST
    function rows() {
        $('#load-data').addClass('load');
        $.ajax({
            url: window.location.href,
            type: "get",
            success: function(data, textStatus, jqXHR) {
                $('#load-data').empty().append(data);
            },
            error: function(jqXHR) {
                if (jqXHR.readyState == 0)
                    return false;
                toast('File: ' + jqXhr.responseJSON.file + ' (Line: ' + jqXhr.responseJSON.line + ')', jqXhr.responseJSON.message, icon = 'error')
            },
            complete: function () { $('#load-data').removeClass('load'); }
        });
    } // AJAX CODE TO LOAD THE DATA TABLE

    // THIS FOR CHECK IF THE PAGE HAVE TABLE OR NOT, IF HAVE THEN RUN THE AJAX CODE TO GET THE TABLE DATA
    if ($('#load-data').length) { rows(); }
    $("body").on("click", ".show-student-form", function (e) {
        e.preventDefault();
        let btn = $(this),
            form = $("body").find("#load-form");
        if (!btn.attr("href")) {
            return false;
        }

        form.addClass("load");
        $.ajax({
            url: btn.attr("href"),
            type: "GET",
            success: function (data, textStatus, jqXHR) {
                form.removeClass("load").form("show");
            },
            error: function (jqXhr) {
                alert("something wrong");
            },
        });
    }); //show student register form

    $("body").on("click", ".show-teacher-form", function (e) {
        e.preventDefault();
        let btn = $(this),
            form = $("body").find("#load-teaher-form");

        if (!btn.attr("href")) {
            return false;
        }

        form.addClass("load");
        $.ajax({
            url: btn.attr("href"),
            type: "GET",
            success: function (data, textStatus, jqXHR) {
                activeElement.addClass("active");
                form.removeClass("load").form("show");
            },
            error: function (jqXhr) {
                alert("something wrong");
            },
        });
    }); //show teacher register form

    $("body").on("click", ".show-login-form", function (e) {
        e.preventDefault();
        let btn = $(this),
            form = $("body").find("#load-form");

        if (!btn.attr("href")) {
            return false;
        }

        form.addClass("load");
        $.ajax({
            url: btn.attr("href"),
            type: "GET",
            success: function (data, textStatus, jqXHR) {
                form.removeClass("load").form("show");
            },
            error: function (jqXhr) {
                alert("something wrong");
            },
        });
    }); //show login form

    $("body").on("submit", "form.submit-form", function (e) {
        e.preventDefault();
        let form = $(this);
        form.find("span.error").fadeOut(200);
        $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: new FormData($(this)[0]),
            dataType: "JSON",
            processData: false,
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                if (data.redirect) {
                    return (window.location = data.redirect);
                }
                $("#edit-profile").modal("hide");
                toast(data.message, null, data.alert_type);
                form.trigger("reset");
                rows();
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
                        key = key.split(".");
                        if (key.length > 1) {
                            form.find(
                                `input[name*='${key[0]}[${key[1]}][${key[2]}]']`
                            )
                                .parent()
                                .next("span.error")
                                .text(val)
                                .fadeIn(300);
                        } else {
                            form.find(`#${key}-error`).text(val).fadeIn(300);
                        }
                    });
                } else {
                    if (jqXhr.responseJSON.line) {
                        toast(
                            "File: " +
                                jqXhr.responseJSON.file +
                                " (Line: " +
                                jqXhr.responseJSON.line +
                                ")",
                            jqXhr.responseJSON.message
                        );
                    } else {
                        toast(jqXhr.responseJSON, (title = null));
                    }
                }
            },
        });
    }); // WHEN SUBMIT THE FORM SEND DATA TO CONTROLLER

    // show modal
    $("body").on("click", "#create_quiz", function (e) {
        // e.preventDefault();
        let btn = $(this),
            form = $("body").find("#load-form");

        if (!btn.attr("href")) {
            return false;
        }

        form.addClass("load");
        $.ajax({
            url: btn.attr("href"),
            type: "GET",
            success: function (response) {
                $("#var_content").html(response);
                $('.table').load();
                form.removeClass("load").form("show");
            },
            error: function (jqXHR) {
                var message = "";
                if (jqXHR.status == 422) {
                    $.each(jqXHR.responseJSON.errors, function (key, value) {
                        message += `\n ${value} \n`;
                    });

                    toast(message);
                }
            },
        });
    });

    $('body').on('submit', 'form.form-destroy', function (e) {
        e.preventDefault();
        let href = $(this).attr('action'), data = $(this).serialize();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: href,
                    type: "post",
                    data: data,
                    success: function (data, textStatus, jqXHR) {
                        toast(data.message, null, data.icon)
                        rows();
                        $('#recourds-count').text(data.count);
                    },
                    error: function (jqXHR) {
                        if (jqXHR.readyState == 0)
                            return false;
                        toast('File: ' + jqXHR.responseJSON.file + ' (Line: ' + jqXHR.responseJSON.line + ')', jqXHR.responseJSON.message, icon = 'error')
                    },
                });
            }
        })
    }); // WHEN SUBMIT THE FORM TO DELETE THE ROW
    // get subjects when change level

    $("body").on("change", "#level_id", function () {

        let id = this.value;

        $.ajax({
            url: "get_subjects/" + id,
            type: "GET",
            success: function (response) {
                let subject = $("#subject_id");
                subject.empty();
                $(response).each(function (index, value) {
                    subject.append(
                        `<option value="${value.id}">${value.name}</option>`
                    );
                });
            },
            error: function (jqXHR) {
                var message = "";
                if (jqXHR.status == 422) {
                    $.each(jqXHR.responseJSON.errors, function (key, value) {
                        message += `\n ${value} \n`;
                    });

                    toast(message);
                }
            },
        });
    });

    function toast(message, title = null, icon = "error", timer = 5000) {
        const Toast = Swal.mixin({
            toast: true,
            position: $("html").attr("lang") == "ar" ? "top-start" : "top-end",
            showConfirmButton: false,
            showCloseButton: true,
            timer: timer,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        Toast.fire({
            icon: icon,
            title: title,
            text: message,
        });
    }


});
