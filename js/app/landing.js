	jQuery(document).ready(function(){
	
		initModule('Landing',resizeLandingWindow,initLanding,false);
	});	
	
	function resizeLandingWindow(__iWindowHeight,__iWindowWidth)
	{
		$(".auto-height").css("height",__iWindowHeight+"px");
        $(".auto-padding").css("padding-top",__iWindowHeight * 0.3 +"px");
	}
	
	function initLanding()
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
     