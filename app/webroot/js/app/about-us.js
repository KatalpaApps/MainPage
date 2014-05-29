jQuery(document).ready(function() {
    initModule('AboutUs', resizeWindow, initAboutUs, false);
});
function initAboutUs()
{
    jQuery('.carousel').carousel();
}