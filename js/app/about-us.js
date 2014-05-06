jQuery(document).ready(function(){
	
		initModule('AboutUs',resizeWindow,initAboutUs,false);
	});	
	
function initAboutUs()
{
		
		
		$('.go-up').click(function() {
			jQuery('html,body').animate({scrollTop: 0},1600,function() {
				
			});
			
		});		
		$('#show-menu-btn').click(function(event){
			event.stopPropagation();
		});
}