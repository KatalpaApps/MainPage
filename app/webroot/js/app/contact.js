jQuery(document).ready(function() {

    initModule('Contact', resizeContactWindow, initContact, false);
});

function initContact()
{
    $('.go-up').click(function() {

        jQuery('html,body').animate({scrollTop: 0}, 1600, function() {

        });

    });

    $('#show-menu-btn').click(function(event) {
        event.stopPropagation();
    });


var options = {
beforeSubmit: function(formData, jqForm, options){
return jqForm.valid();
},
error: function(){
alert('Server error connection');
},
success: function(data, statusText, xhr, $form){

$(".btn-white").addClass("btn-success");
            $(".btn-white").html("success");
            $("#form-contact").find("input[type=text], textarea").val("");
setTimeout(function() {
$(".btn-white").removeClass("btn-success");
$(".btn-white").html("send messeage");
}
, 5000);
/*
try
{
var obj = jQuery.parseJSON(data);

ShowFlashMessage(obj.status?'success':'error',obj.text);

}catch(err)
{

}*/
},
resetForm: false
};

$("#form-contact").ajaxForm(options);	

    $("#form-contact").validate({
        errorPlacement: function(error, element) {

        },
        highlight: function(element, errorClass, validClass) {
            $(element).parent('div').addClass('has-error').removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parent('div').removeClass('has-error').addClass(validClass);
        },
        rules: {
            name: "required",
            message: "required",
            email: {
                required: true,
                email: true
            }
        }
    });
}
function resizeContactWindow(__iWindowHeight, __iWindowWidth)
{

    $(".auto-height").css("height", window.screen.height + "px");
    $('.auto-height-two-third').css("height", Math.round(window.screen.height * 0.66, 0) + "px");
}