var  isMobile = detectMobile();

jQuery(document).ready(function() {
    bindArrowEvents();
    scrollDown();
    resizeWindow();
});

function bindArrowEvents() {
    $('.arrow').on('click', function(event) {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1000);
    });
}
function scrollDown() {
    
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
function resizeWindow(__iWindowHeight, __iWindowWidth)
{
     $(".auto-height").css("height", window.screen.height + "px"); 

   
}
function detectMobile()
{
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    return isMobile.any();
   
}

  