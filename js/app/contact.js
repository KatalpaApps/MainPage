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
    $("#form-contact").validate({
        submitHandler: function() {
//            $("#form-contact").ajaxForm(function(){
//                 alert("Thank you for your comment!"); 
//            });
           $(".btn-white").addClass("btn-success");
           $(".btn-white").html("success");
            $("#form-contact").find("input[type=text], textarea").val("");
           setTimeout(function() {
        $(".btn-white").removeClass("btn-success");
           $(".btn-white").html("send messeage");
}, 5000);
//           
        },
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
