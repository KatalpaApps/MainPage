jQuery(document).ready(function() {
    initModule('ProjectPlanner', resizeWindow, initProjects, false);
});

function initProjects()
{
    $('.go-up').click(function() {

        jQuery('html,body').animate({scrollTop: 0}, 1600, function() {

        });
    });
    $('#show-menu-btn').click(function(event) {
        event.stopPropagation();
    });
    $("#datepicker").datepicker();
    $("#datepicker").datepicker("option", "dateFormat", "dd-mm-yy");

    $("#project-planner").validate({
        submitHandler: function() {
//            $("#form-contact").ajaxForm(function(){
//                 alert("Thank you for your comment!"); 
//            });
            $(".btn-white").addClass("btn-success");
            $(".btn-white").html("success");
            $("#project-planner").find("input[type=text], textarea").val("");
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
            projectdetails: "required",
            email: {
                required: true,
                email: true
            }
        }
    });

}
