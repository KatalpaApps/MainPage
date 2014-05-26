var isMobile = detectMobile();

jQuery(document).ready(function() {
    bindArrowEvents();
    scrollDown();
    resizeWindow();

    $("a").click(function(event) {
        event.preventDefault();
       
        var url = $(this).attr('href');
          loadContent(url);
//        $('#dynamic-content').slideUp('slow', function() {
//            loadContent(url);
//        });
    });
});


function loadContent(url) {	
//	$.ajax({
//		type: "GET",
//		url: url,
////		data: 'page='+url,
//		dataType: "html",
//		success: function(msg){
//			
//			if(parseInt(msg)!=0)
//			{
//				$('#dynamic-content').html(msg);
//			}
//		}
//		
//	});
    $("#dynamic-content").load(url, function() {
        activeModule('Contact');
//        var module = url.split('/');
        var modul = module[module.length - 1];
       
        if(modul === "")
        {
            modul = "Landing";
            alert(modul);
              activeModule(modul);
        }
        else
        {
            
            var mod = modul[0].toUpperCase();
             mod += modul.substring(1,modul.length);
            alert(mod);
              activeModule(mod);
        }
       
       
        
//        $("#dynamic-content").slideDown('slow');
   });
}
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

  