	jQuery(document).ready(function(){
	
		initModule('Landing',resizeWindow,initLanding,false);
                
	});	
	
	function initLanding()
	{
	    bindLinks();	
            jQuery('.carousel').carousel();	
		$('.go-up').click(function() {
			
			jQuery('html,body').animate({scrollTop: 0},1600,function() {
				
			});
			
		});
		
		$('#show-menu-btn').click(function(event){
			event.stopPropagation();
		});
	}
  