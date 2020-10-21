const button_submit = document.querySelector('#yq-submit-form');
button_submit.addEventListener('click', formValidation);


function formValidation(){
    const input_name = document.querySelector('#yq-input-name');
    const input_tel = document.querySelector('#yq-input-tel');
    const input_checkbox = document.querySelector('#yq-checkbox-confirmed');
    sendEmail();
}

function sendEmail(){
    jQuery.ajax({
        url: "/wp-content/themes/twentyseventeen/inc/quiz/form/form-action.php",
        type: 'POST',
        method: 'post',
        async: true,
        dataType: "html", //формат данных
        data: jQuery("#"+ajax_form).serialize(),
        success: function (response) {
            jQuery('#successful-content').html(response);
        }
    })
}