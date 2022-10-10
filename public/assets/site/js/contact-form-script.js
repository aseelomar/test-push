(function($) {
    'use strict';
    $('#contactForm').validator().on('submit', function(event) {
        if (event.isDefaultPrevented()) {
            formError();
            submitMSG(false, 'Did you fill in the form properly?');
        } else {
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm() {
        var name = $('#name').val();
        var email = $('#email').val();
        var msg_subject = $('#subject').val();
        var phone_number = $('#phone_number').val();
        var message = $('#messageSubject').val();
        $.ajax({
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            url: '/peopleContact',

            data: 'name=' + name + '&email=' + email + '&subject=' + msg_subject + '&phone=' + phone_number + '&message=' + message,
            success: function(text) {
                $('#msgSubmit').text(text.data)
                // if (text == 'success') {
                //     formSuccess();
                // } else {
                //     formError();
                //     submitMSG(false, text);
                // }
            },
            error: function(error) {

            }
        });
    }

    function formSuccess() {
        $('#contactForm')[0].reset();
        submitMSG(true, 'Message Submitted!');
    }

    function formError() {
        $('#contactForm').removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = 'h4 tada animated text-success';
        } else {
            var msgClasses = 'h4 text-danger';
        }
        $('#msgSubmit').removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery));
;
