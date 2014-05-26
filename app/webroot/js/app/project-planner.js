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

  	var options = {
		beforeSubmit: function(formData, jqForm, options){
		   return jqForm.validate();                       
		},
		error: function(){
		   console.log('Server error connection');              
		},
		success:  function(data, statusText, xhr, $form){   
                         console.log(data);
			$(".btn-white").addClass("btn-success");
            $(".btn-white").html("success");
            $("#form-contact").find("input[type=text], textarea").val("");
			setTimeout(function() {
				$(".btn-white").removeClass("btn-success");
				$(".btn-white").html("send messeage");
			}, 5000);		
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

	$("#project-planner").ajaxForm(options);		
    $("#project-planner").validate({       
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