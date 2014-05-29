jQuery(document).ready(function() {
    scrollDownActions();
    scrollUp();
    bindAjaxLinks();
    });
function scrollUp(){
       $('.go-up').click(function() {

        jQuery('html,body').animate({scrollTop: 0}, 1600, function() {
        });
    });
}

function bindAjaxLinks(){
     $("body").on('click','.ajax', function(event) {
        event.preventDefault();
        $('body').removeClass('pmr-open');
        $('.mask').remove();
        loadContent($(this).attr('href'));
});
}
function loadContent(url) {
    Pace.track(function() {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "html",
            success: function(msg) {
                if (parseInt(msg) != 0)
                {                          
                    $('#dynamic-content').html(msg);
                    switchModule(url);
                    if ($(window).scrollTop() > $(window).height() * 0.9){
                    jQuery('html,body').animate({scrollTop: 0},10,function(){});
//                    bindAjaxLinks();
                }
            }   
    }
    });
});
}
function switchModule(url)
{
    var module = url.split('/');
    var modul = module[module.length - 1];
    switch (modul) {
        case '':
            activeModule('Landing');
            break;
        case 'about':
            activeModule('AboutUs');
            break;
        case 'contact':
            activeModule('Contact');
            break;
        case 'projectplanner':
            activeModule('ProjectPlanner');
            break;
        case 'projects':
            activeModule('Projects');
            break;
        case 'umowionymobile':
            activeModule('UmowionyMobile');
            break;
    }
}

function scrollDownActions() {
    $(window).scroll(function(event) {
        if ($(window).scrollTop() > $(window).height() * 0.9) {
            $(".go-up").fadeIn();
            $("#menu-top").addClass("almost-black");

        } else {
            $(".go-up").fadeOut();
            $("#menu-top").removeClass("almost-black");
        }
    });
}
function resizeWindow(__iWindowHeight, __iWindowWidth)
{
    $(".auto-height").css("height", window.screen.height + "px");
}

//   function bouncingArrow() {
//       // ie hack
//       if ($(window).scrollTop() < $(window).height()) {
//           $(".arrow").effect('bounce', {
//               directon: 'down',
//               distance: 30,
//               times: 2
//           }, 1000);
//       }
//       window.setTimeout(function() {
//           bouncingArrow()
//       }, 3500)
//   }
//function bindArrowEvents() {
//    $('.arrow').on('click', function(event) {
//        $('html, body').animate({
//            scrollTop: $(window).height()
//        }, 1000);
//    });
//}