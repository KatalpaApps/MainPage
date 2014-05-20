<?php
$this->set('title', 'Plan your project with us');
$this->set('moduleName', 'ProjectPlanner');
$this->Html->script(array('/js/app/project-planner','/js/lib/jquery.form','/js/lib/jquery.validate.js','https://maps.googleapis.com/maps/api/js?sensor=false','/js/lib/jquery-ui-1.9.2.custom.min.js'), array('inline' => false));
$this->Html->css('project-planner', null, array('inline' => false));

?>
     <section id="project-planner-send" class="auto-height photo">
                    <div class="page-title">
                        <div class="hr-up"></div>
                        <p>send us your project plan</p>
                        <div class="hr-down"></div>
                    </div>
                </section> 
                <section id="project-planner-form" class="text-content text-center container-fluid">
                    <h1 class="extra-padding">Please fill out forms, they will help us in project planing</h1>
                    <p class="paragraph-tight">Forms witch star “*” are necesery to first cantacy with you. Some
                    <p class="paragraph-tight">questions may be strange but they are importnant for us.</p>

                    <div class="form-holder col-md-6 col-md-offset-3">
                        <form id="project-planner" novalidate="novalidate">
                            <h3 class="extra-padding">All about you and your company</h3>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 has-feedback"><input class="form-control" type="text" placeholder="Your name *" name="name" required="" /> <span class="glyphicon glyphicon-remove form-control-feedback"></span></div>
                                <div class="col-sm-6 col-xs-12 has-feedback"><input class="form-control" type="text" placeholder="Email address * " name="email" required="" /><span class="glyphicon glyphicon-remove form-control-feedback"></span></div>
                            </div> 
                            <div class="row">
                                <div class="col-sm-6 col-xs-12"><input class="form-control" type="text" placeholder="Company or project name " name="company" /></div>
                                <div class="col-sm-6 col-xs-12"><input class="form-control" type="text" placeholder="Phone number" name="phonenumber" /></div>  
                                <div class="col-xs-12"><textarea class="form-control" placeholder="Describe your organization" name="organization" rows="5"></textarea></div>
                            </div>
                            <h3 class="extra-padding">Project details and important information</h3>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="projecttype" class="form-control" >
                                        <option>Project type</option>
                                        <option>Mobile app</option>
                                        <option>Web app</option>
                                        <option>Visual identification</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="col-xs-12 has-feedback">
                                    <textarea class="form-control" placeholder="Describe your project with details *" name="projectdetails" rows="4" required=""></textarea>
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                </div>                    
                                <div class="col-xs-12"><textarea class="form-control" placeholder="Project architecture (wireframe, user flow, site map, content )" name="projectarchitecture" rows="4"></textarea></div>
                                <div class="col-xs-12"><textarea class="form-control" placeholder="Thoughts insipations, links to mobile or web apps" name="projectinspirations" rows="4"></textarea></div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-6 col-xs-12"> <input id="datepicker" class="form-control" type="text" placeholder="Start date dd-mm-yyyy " name="startdate" /> </div>
                                <div class="col-sm-6 col-xs-12"> <input type="text" class="form-control" placeholder="Budget" name="budget" /> </div>
                            </div>
                            <h3 class="extra-padding">Other things we should know</h3>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12"><textarea class="form-control" placeholder="Anything else we should know" name="anythingelse" rows="4"></textarea></div>
                                <div class="col-xs-12"><textarea class="form-control" placeholder="Meeting date and time" name="meetingdatetime" rows="4"></textarea></div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-white extra-margin">send messeage</button>
                        </form>
                    </div>
                </section>
            </div>
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
       