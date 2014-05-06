jQuery(document).ready(function(){
		initModule('ProjectPlanner',resizeWindow,initProjects,false);
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
//function landscapeMenuHide(isMobile)
//{
//    if(isMobile){
//    $("input, textarea").focus(function(event){
//        $("#menu-top").addClass("hidden");
//    });
//    $("input, textarea").blur(function(event){
//        $("#menu-top").removeClass("hidden");
//    });
//}
//    
//}