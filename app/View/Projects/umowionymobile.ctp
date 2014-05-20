<?php 
 $this->set('title', 'Umowiony Mobile');
$this->set('moduleName', 'UmowionyMobile');
$this->Html->script('/js/app/umowiony-mobile', array('inline' => false));
$this->Html->css('umowiony-mobile', null, array('inline' => false));

?>
<section id="umowiony" class="auto-height photo">
                    <div class="page-title">
                        <div class="hr-up"></div>
                        <p><img src="<?php echo $this->webroot; ?>images/projects/umowiony_logo.png" alt="umowiony mobile logo"> Umowiony <span class="hidden-xs hidden-sm">Mobile</span></p>
                        <div class="hr-down"></div>
                    </div>

                </section>
                <section id="phones">
                    <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/phone_right.png" alt="phone left" class="phone-left">
                    <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/phone_top.png" alt="phone top" class="phone-top">
                    <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/phone_left.png" alt="phone right" class="phone-right">
                </section>
                <section id="zdrowie-bez-kolejki" class="text-content text-center container-fluid">
                    <h1 class="">Zdrowie Bez kolejki</h1>

                    <p>Umożliwia, szybkie dodanie nowej wizyty do skojarzonego z kontem</p>
                    <p>kalendarza wystarczy podać datę i numer telefonu pacjenta. Przed</p>
                    <p>planowanym spotkaniem pacjent otrzyma wiadomość SMS z </p>
                    <p>przypomnieniem o dacie i miejscu wizyty</p>                        
                </section>
                <section id="doctor-photos" class="container-fluid no-padding extra-margin-lg">
                    <div id="female-doctor" class="column"><img src="<?php echo $this->webroot; ?>images/umowiony-mobile/photo_1.jpg" alt="doctor photo" /></div>
                    <div id="clock-male-doctor" class="column"><img src="<?php echo $this->webroot; ?>images/umowiony-mobile/photo_5.jpg" alt="doctor photo" /><img src="<?php echo $this->webroot; ?>images/umowiony-mobile/photo_4.jpg" alt="doctor photo" /></div>
                    <div id="stetoscope" class="column"><img src="<?php echo $this->webroot; ?>images/umowiony-mobile/photo_2.jpg" alt="doctor photo" /></div>
                    <div id="form-tablet" class="column"><img src="<?php echo $this->webroot; ?>images/umowiony-mobile/photo_6.jpg" alt="doctor photo" /><img src="<?php echo $this->webroot; ?>images/umowiony-mobile/photo_7.jpg" alt="doctor photo" /></div>
                    <div id="assistant" class="column hidden-xs"><img src="<?php echo $this->webroot; ?>images/umowiony-mobile/photo_3.jpg" alt="doctor photo" /></div>
                </section>
                <section id="our-tasks" class="text-content text-center container-fluid extra-margin-lg">
                    <h1 class="">What we did</h1>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/ico_dev.png" alt="developer-icon">
                                        <h3>development</h3>
                                        <p>android native app</p>
                                        <p>web services</p>
                                        <p>communication architecture</p>
                                        <p>ux documentation</p>
                                        <p>wire frame</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/ico_design.png" alt="design-icon">
                                        <h3>design</h3>
                                        <p>art direction</p>
                                        <p>creative concepts</p>
                                        <p>mobile design</p>
                                        <p>user interface design</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>

                </section>

                <section id="nerdy-facts" class="container-fluid text-center text-content extra-margin extra-padding-bottom-lg">
                    <h1>Nerdy Facts</h1>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/ico_task.png"/>
                                        <h3>tasks</h3>
                                        <p>more then 150 tasks in the</p>
                                        <p>original developmnet plan</p></div>
                                    <div class="box">
                                        <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/ico_time.png"/>
                                        <h3>hours</h3>
                                        <p>nearly 350 hours spent on</p>
                                        <p>design development testing</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/ico_bugs.png"/>
                                        <h3>bugs</h3>
                                        <p>more then 100 bugs</p>
                                        <p>during automated testing</p>
                                    </div>
                                    <div class="box">
                                        <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/ico_page.png"/>
                                        <h3>pages</h3>                
                                        <p>nearly 430 pages of </p>
                                        <p>source code an ui elements</p></div>
                                </div> 

                            </div>
                        </div>
                    </div>
                </section>
                <section id="testimonial" class="container-fluid text-content center-block extra-margin-lg">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo $this->webroot; ?>images/umowiony-mobile/testimonials.png" alt="waclaw zalewski project manager">
                                </div>
                                <div class="col-md-8">
                                    <p>
                                        “We choose katalpa, because they teach us and show what we really need, they helped us in mobile app concetption and made really good job with us, design and code. In next project, we will definetly cooperate together again."<br>
                                        <strong class="small">WACŁAW ZALEWSKI, UMOWIONY.PL PROJECT MANAGER</strong></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section id="project-next-prev" class="container-fluid text-center no-padding extra-margin-lg">
                    <div class="row">
                        <div class="col-md-6 auto-height-one-third"><div id="prev-project"><a href="projects.html">PREVIOUS PROJECT</a></div></div>
                        <div class="col-md-6 auto-height-one-third"><div id="next-project"><a href="projects.html">NEXT PROJECT</a></div>  </div>
                    
                    </div>
                </section>