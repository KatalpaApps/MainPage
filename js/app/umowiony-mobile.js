jQuery(document).ready(function(){
	
		initModule('UmowionyMobile',resizeWindow,initUmowionyMobile,false);
	});	
	
function initUmowionyMobile()
{
		
		
		$('.go-up').click(function() {
			jQuery('html,body').animate({scrollTop: 0},1600,function() {
				
			});
			
		});		
		$('#show-menu-btn').click(function(event){
			event.stopPropagation();
		});
}