jQuery(document).ready(function(){
	
		initModule('AboutUs',resizeWindow,initAboutUs,false);
	});	
	
function initAboutUs()
{
 	jQuery('.carousel').carousel();
		
		
		$('.go-up').click(function() {
			
			jQuery('html,body').animate({scrollTop: 0},1600,function() {
				
			});
			
		});
		
		$('#show-menu-btn').click(function(event){
			event.stopPropagation();
		});
}