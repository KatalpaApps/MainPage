<?php
$this->set('title', 'Plan your project with us');
$this->set('moduleName', 'ProjectPlanner');
?>
     <section id="project-planner-send" class="auto-height photo">
                    <div class="page-title">
                        <div class="hr-up"></div>
                        <p><span class="hidden-xs hidden-sm"><?php echo __("project_planner_send_plan");?></span><span class="hidden-md hidden-lg"><?php echo __("project_planner_send_plan_mobile");?></span></p>
                        <div class="hr-down"></div>
                    </div>
                </section> 
                <section id="project-planner-form" class="text-content text-center container-fluid">
                    <h1 class="extra-padding"><?php echo __("project_planner_field_required_title");?></h1>
                    <p class="paragraph-tight"><?php echo __("project_planner_field_required_first_line");?></p>
                    <p class="paragraph-tight"><?php echo __("project_planner_field_required_second_line");?></p>

                    <div class="form-holder col-md-6 col-md-offset-3">
                        <form id="project-planner" method="post" action="<?php echo $this->webroot; ?>forms/process" novalidate="novalidate">
                            <h3 class="extra-padding"><?php echo __("project_planner_form_about_you");?></h3>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 has-feedback"><input class="form-control" type="text" placeholder="<?php echo __("contact_input_your_name");?>" name="name" required="" /> <span class="glyphicon glyphicon-remove form-control-feedback"></span></div>
                                <div class="col-sm-6 col-xs-12 has-feedback"><input class="form-control" type="text" placeholder="<?php echo __("contact_input_email_address");?>" name="email" required="" /><span class="glyphicon glyphicon-remove form-control-feedback"></span></div>
                            </div> 
                            <div class="row">
                                <div class="col-sm-6 col-xs-12"><input class="form-control" type="text" placeholder="<?php echo __("project_planner_input_company");?>" name="company" /></div>
                                <div class="col-sm-6 col-xs-12"><input class="form-control" type="text" placeholder="<?php echo __("project_planner_input_phone_number");?>" name="phonenumber" /></div>  
                                <div class="col-xs-12"><textarea class="form-control" placeholder="<?php echo __("project_planner_input_organization_description");?>" name="organization" rows="5"></textarea></div>
                            </div>
                            <h3 class="extra-padding"><?php echo __("project_planner_form_project_details");?></h3>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="projecttype" class="form-control" >
                                        <option><?php echo __("project_planner_select_project_type");?></option>
                                        <option><?php echo __("project_planner_select_mobile_app");?></option>
                                        <option><?php echo __("project_planner_select_web_app");?></option>
                                        <option><?php echo __("project_planner_select_visual_identification");?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="col-xs-12 has-feedback">
                                    <textarea class="form-control" placeholder="<?php echo __("project_planner_project_description");?>" name="projectdetails" rows="4" required=""></textarea>
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                </div>                    
                                <div class="col-xs-12"><textarea class="form-control" placeholder="<?php echo __("project_planner_project_architecture");?>" name="projectarchitecture" rows="4"></textarea></div>
                                <div class="col-xs-12"><textarea class="form-control" placeholder="<?php echo __("project_planner_project_inspirations");?>" name="projectinspirations" rows="4"></textarea></div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-6 col-xs-12"> <input id="datepicker" class="form-control" type="text" placeholder="<?php echo __("project_planner_start_date");?>" name="startdate" /> </div>
                                <div class="col-sm-6 col-xs-12"> <input type="text" class="form-control" placeholder="<?php echo __("project_planner_project_budget");?>" name="budget" /> </div>
                            </div>
                            <h3 class="extra-padding"><?php echo __("project_planner_form_other_things");?></h3>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12"><textarea class="form-control" placeholder="<?php echo __("project_planner_project_anything_else");?>" name="anythingelse" rows="4"></textarea></div>
                                <div class="col-xs-12"><textarea class="form-control" placeholder="<?php echo __("project_planner_meeting_date_time");?>" name="meetingdatetime" rows="4"></textarea></div>
                            </div>                            
                            <button type="submit" class="btn btn-lg btn-white extra-margin"><?php echo __("project_planner_project_send_button");?></button>
                        </form>
                    </div>
                </section>
             <?php echo $this->element('social-media'); ?>
       