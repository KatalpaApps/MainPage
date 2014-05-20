<?php
$this->set('title', 'Contact with katalpa');
$this->set('moduleName', 'Contact');
$this->Html->script(array('/js/app/contact','/js/lib/jquery.form','/js/lib/jquery.validate.js','https://maps.googleapis.com/maps/api/js?sensor=false'), array('inline' => false));
$this->Html->css('contact', null, array('inline' => false));

?>
 <section id="meet-us" class="photo auto-height auto-padding">
                    <div class="page-title">
                        <div class="hr-up"></div>
                        <p>meet us in our office</p>
                        <div class="hr-down"></div>
                    </div>
                 
                </section>
                <section id="map-holder" class="auto-height-two-third auto-padding">
                    <div id="map-overlay" class="auto-height-two-third auto-padding"></div>
                    <div id="map" class="auto-height-two-third auto-padding"></div>
                </section>
                <section id="contact" class="text-content extra-padding">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                        <div class="col-md-3 ">
                            <div class="box">
                            <h3>katalpa</h3>
                            <hr>
                            <p>Kłodzka st. 12/8</p>
                            <p>55-040 Bielany Wrocławskie</p>
                            <p>Poland(European Union)</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            <h3>contact</h3>
                            <hr>
                            <p><a href="mailto:hello@katalpa.it">e: hello@katalpa.it </a></p>
                            <p>p: +48 531 53 90 60</p>
                        <p><a href="#">t: @katalpadev</a></p> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            <h3>positions</h3>
                            <hr>
                            <button type="button" class="btn btn-link no-padding" data-toggle="modal" data-target="#Jr-Android-Developer">Junior Android Developer</button><br>

                           <button type="button" class="btn btn-link no-padding" data-toggle="modal" data-target="#Jr-Php-Developer">Junior PHP Developer</button>
                            </div>
                            </div>
                        <div class="col-md-3">
                            <div class="box">
                            <h3>company</h3>
                            <hr>
                            <p>Katalpa Roman Gądek</p>
                            <p>NIP: 925-127-61-29</p>
                        <p>REGON: 020329693</p> </div>
                        </div>
                            </div></div></div>
                    </div>
                  
                    <div class="modal fade" id="Jr-Android-Developer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h2 class="modal-title" id="myModalLabel">Wanted Junior Android Developer</h2>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="contact-form" class="container-fluid text-content text-center">
               
                       
                    <h1 class=" no-padding extra-padding">Say Hello to our team <span class="light"><span class="hidden-lg hidden-md"><br>
                            </span>or </span><span class="hidden-lg hidden-md"><br>
                            </span><span class="light-gray"><a href="#">start planning your project</a></span></h1>
                            <p>dont be shy, we dont bite, feel free to contact us go to</p>
                            <p class="">out project planner and start cooperation</p>
                    
                        <div class="form-holder col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                            <form id="form-contact" role="form" method="post" action="form/process" novalidate="novalidate">
                                <div class="row">
                                <div class="col-md-6 col-xs-12 has-feedback"><input class="form-control" type="text" placeholder="Your name *" name="name" required="" /> <span class="glyphicon glyphicon-remove form-control-feedback"></span></div>
                                <div class="col-md-6 col-xs-12  has-feedback"><input class="form-control" type="text" placeholder="Email address * " name="email" required="" /><span class="glyphicon glyphicon-remove form-control-feedback"></span></div>                        
                                 <div class="col-xs-12 has-feedback">
                                    <textarea class="form-control" placeholder="Describe your project with details *" name="projectdetails" rows="4" required=""></textarea>
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                </div>  
                                </div>
                            <button type="submit" class="btn btn-lg btn-white extra-margin">send messeage</button>
                            </form>
                        </div>
                
                </section>
          
             <div class="container-fluid extra-padding text-content extra-margin">
                <div class="row">
                <div class="social-media col-sm-6 col-sm-offset-3 text-center">
                    <a href="#"><span class="icon-grey-twitter"></span></a>
                    <a href="#"><span class="icon-grey-github"></span></a>
                    <a href="#"><span class="icon-grey-facebook"></span></a>
                    <a href="#"><span class="icon-grey-google-plus"></span></a>
                </div>
            </div>
            </div>
<script type="text/javascript">
 var myOptions = {
                                                    zoom: 15,
                                                    center: new google.maps.LatLng(51.0295711, 16.9680158),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
                                                    disableDefaultUI: true,
                                                    scrollwheel: false
                                                };
                                                var map = new google.maps.Map(document.getElementById('map'), myOptions);
                                                var marker = new google.maps.Marker({
                                                position: new google.maps.LatLng(51.0295711, 16.9680158),
                                                map: map,
                                                icon: 'images/contact/marker.png'                             
                                                });
</script>