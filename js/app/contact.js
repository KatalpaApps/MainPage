jQuery(document).ready(function(){
	
		initModule('Contact',resizeWindow,initContact,false);
	});	
	
function initContact()
{		
		$('.go-up').click(function() {
			
			jQuery('html,body').animate({scrollTop: 0},1600,function() {
				
			});
			
		});
		
		$('#show-menu-btn').click(function(event){
			event.stopPropagation();
		});
}