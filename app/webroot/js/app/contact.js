jQuery(document).ready(function() {

    initModule('Contact', resizeContactWindow, initContact, false);
});
function initContact()
{
    var options = {
        beforeSubmit: function(formData, jqForm, options) {
            return jqForm.valid();
        },
        error: function() {
            alert('Server error connection');
        },
        success: function(data, statusText, xhr, $form) {

            $(".btn-white").addClass("btn-success");
            $(".btn-white").html("success");
            $("#form-contact").find("input[type=text], textarea").val("");
            setTimeout(function() {
                $(".btn-white").removeClass("btn-success");
                $(".btn-white").html("send messeage");
            }
            , 5000);
            /*
             try
             {
             var obj = jQuery.parseJSON(data);
             
             ShowFlashMessage(obj.status?'success':'error',obj.text);
             
             }catch(err)
             {
             
             }*/
        },
        resetForm: false
    };
    $("#form-contact").ajaxForm(options);
    $("#form-contact").validate({
        errorPlacement: function(error, element) {

        },
        highlight: function(element, errorClass, validClass) {
            $(element).parent('div').addClass('has-error').removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parent('div').removeClass('has-error').addClass(validClass);
        },
        rules: {
            name: "required",
            message: "required",
            email: {
                required: true,
                email: true
            }
        }
    });
    var myOptions = {
        zoom: 15,
        center: new google.maps.LatLng(51.0295711, 16.9680158),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}],
        disableDefaultUI: true,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById('map'), myOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(51.0295711, 16.9680158),
        map: map,
        icon: 'images/contact/marker.png'
    });
}
function resizeContactWindow(__iWindowHeight, __iWindowWidth)
{
    $(".auto-height").css("height", window.screen.height + "px");
    $('.auto-height-two-third').css("height", Math.round(window.screen.height * 0.66, 0) + "px");
}