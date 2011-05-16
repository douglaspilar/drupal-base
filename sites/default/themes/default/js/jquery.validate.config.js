/*$('#webform-client-form-2').validate({
    rules: {
        'submitted[name]': {required: true},
        'submitted[email]': {required: true, email: true},
        'submitted[messages]': {required: true}
    },
    errorPlacement: function(error, element) {
        element.css({'border':'1px solid #CCC', 'color':'#333'});
    },
    invalidHandler: function(form, validator) {
      	if (validator.numberOfInvalids()) {
            $(".messages.status, .messages.error").attr('class', '').children('div').children('div').html('');
            $("#message-warning").addClass('warning').children('div').children('div').html("Percebemos que alguns campos necessários (*) não<br/>foram preenchidos. Confira e tente enviar novamente.");
            $("#message-warning").attr("tabindex",-1).focus();
            //$('.required.error').css({'border':'1px solid red!important'});
      	}
    },
    submitHandler: function(form) {
        $(form).ajaxSubmit();
    }
});*/
