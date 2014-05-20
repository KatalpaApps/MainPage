jQuery(document).ready(function(){
	
		initModule('Projects',resizeProjectsWindow,initProjects,false);
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
                   $(".page-title").hover(function(event) {
                    $(this).children('p.title').addClass('animated fadeOutLeft');
                    $(this).children('p.text').show().removeClass('fadeOutRight').addClass('animated fadeInRight')

                },
                        function(event) {
                            $(this).children('p.text').removeClass('fadeInRight').addClass('fadeOutRight');
                            $(this).children('p.title').removeClass('fadeOutLeft').addClass('fadeInLeft');

                        }
                );
}
function resizeProjectsWindow(__iWindowHeight, __iWindowWidth)
{
  
        $(".auto-height").css("height", window.screen.height + "px");
        if(window.screen.width < 768)
        {
         $(".auto-height-one-third").css("height", window.screen.height + "px");
    }
    else
    {
         $('.auto-height-one-third').css("height", Math.round(window.screen.height * 0.33, 0) + "px");
    }
}