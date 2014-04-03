    jQuery(document).ready(function(){
    
        initModule('General',resizeLandingWindow,initGeneral,false);
    }); 

   function bindMenuEvents() {
       $('#show-menu-btn, #close-menu-btn').on('click', function(event) {
           $('.pusher').toggleClass('pushed');
       });
       $('#st-content').on('click', function(event) {
           //check up in DOM structure to figure out if container has been pushed or not
           if ($(this).parents().hasClass('pushed')) {
               $('.pusher').toggleClass('pushed');
           }
       });
   }

   function bindArrowEvents(){   
       $('.arrow').on('click', function(event) {
           $('html, body').animate({
               scrollTop: $(window).height()
           }, 1000);
       });
   }

   function scrollDown() {
       $(window).scroll(function() {
           if ($(window).scrollTop() > $(window).height() * 0.9) {
               $(".go-up").fadeIn();
           } else {
               $(".go-up").fadeOut();
           }
       });
   }

   function bouncingArrow() {
       // ie hack
       if ($(window).scrollTop() < $(window).height()) {
           $(".arrow").effect('bounce', {
               directon: 'down',
               distance: 30,
               times: 2
           }, 1000);
       }
       window.setTimeout(function() {
           bouncingArrow()
       }, 3500)
   }

   function initGeneral()
   {
    bindMenuEvents();
    bindArrowEvents();
    scrollDown();
    bouncingArrow();
   }