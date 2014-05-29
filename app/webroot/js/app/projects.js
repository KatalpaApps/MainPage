jQuery(document).ready(function() {
    
    initModule('Projects', resizeProjectsWindow, initProjects, false);
});

function initProjects() {
    hoverTitle();
}
function resizeProjectsWindow(__iWindowHeight, __iWindowWidth)
{
    $(".auto-height").css("height", window.screen.height + "px");
    if (window.screen.width < 768)
    {
        $(".auto-height-one-third").css("height", window.screen.height + "px");
    }
    else
    {
        $('.auto-height-one-third').css("height", Math.round(window.screen.height * 0.33, 0) + "px");
    }
	
}

function hoverTitle(){
     $(".page-title-hover").hover(function(event) {
        console.log('ok');
        $(this).children('p.title').addClass('animated fadeOutLeft');
        $(this).children('p.text').show().removeClass('fadeOutRight').addClass('animated fadeInRight');

    },
            function(event) {
                $(this).children('p.text').removeClass('fadeInRight').addClass('fadeOutRight');
                $(this).children('p.title').removeClass('fadeOutLeft').addClass('fadeInLeft');

            }
    );
}