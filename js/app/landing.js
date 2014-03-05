	jQuery(document).ready(function(){
	
		initModule('Landing',resizeLandingWindow,initLanding,false);
		
	});	
	
	function resizeLandingWindow(__iWindowHeight,__iWindowWidth)
	{
		$(".auto-height").css("height",__iWindowHeight+"px");		
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
		
			if($('#st-container').hasClass("st-menu-open"))
			{
				$('#st-container').removeClass("st-effect-4 st-menu-open");
			}else{
				$('#st-container').addClass("st-effect-4 st-menu-open");
			}
			
		});
		
		$('.st-pusher').click(function(){
		
			if($('#st-container').hasClass("st-menu-open"))
			{
				$('#st-container').removeClass("st-effect-4 st-menu-open");
			}
			
		});
	}
     