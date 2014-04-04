jQuery(document).ready(function(){
	
		initModule('Projects',resizeWindow,initProjects,false);
	});	
	
function initProjects()
{
				
		$('.go-up').click(function() {
			
			jQuery('html,body').animate({scrollTop: 0},1600,function() {
				
			});
			
		});
		
		$('#show-menu-btn').click(function(event){
			event.stopPropagation();
		});
}