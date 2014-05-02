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
function resizeContactWindow(__iWindowHeight, __iWindowWidth)
{
    if (isMobile) {
        $(".auto-height").css("height", window.screen.height + "px");
        
    }
    else {
        $(".auto-height").css("height", __iWindowHeight + "px");
    }
    $(".auto-padding").css("padding-top", __iWindowHeight * 0.3 + "px");
}