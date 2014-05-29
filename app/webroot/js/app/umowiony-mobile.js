jQuery(document).ready(function() {
   initModule('UmowionyMobile', resizeUmowionyMobileWindow, initUmowionyMobile, false);
});

function initUmowionyMobile()
{
}
function resizeUmowionyMobileWindow(__iWindowHeight, __iWindowWidth)
{

    $(".auto-height").css("height", window.screen.height + "px");
    if (window.screen.width < 768)
    {
        $(".auto-height-one-third").css("height", Math.round(window.screen.height * 0.5, 0) + "px");
    }
    else
    {
        $('.auto-height-one-third').css("height", Math.round(window.screen.height * 0.33, 0) + "px");
    }
}