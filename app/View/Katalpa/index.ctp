<?php
$this->set('title', 'Welcome to Katalpa Home Page');
$this->set('moduleName', 'Landing');
$this->Html->script('/js/app/landing', array('inline' => false));
$this->Html->css(array('landing-page','carousel-dots'), null, array('inline' => false));
?>
<section id="landing-home" class="auto-height photo container-fluid text-center">
    <div data-ride="carousel" class="carousel slide dotstyle dotstyle-fillup" id="carousel-what-we-are">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel-what-we-are"><a href="#"></a></li>
            <li data-slide-to="1" data-target="#carousel-what-we-are" class=""><a href="#"></a></li>
            <li data-slide-to="2" data-target="#carousel-what-we-are" class=""><a href="#"></a></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="page-title">
                    <div class="hr-up"></div>
                    <p><?php echo __("landing_first_slide");?></p>
                    <div class="hr-down"></div>
                </div>
            </div>
            <div class="item">
                <div class="page-title">
                    <div class="hr-up"></div>
                    <p><?php echo __("landing_second_slide");?></p>
                    <div class="hr-down"></div>
                </div>
            </div>
            <div class="item">
                <div class="page-title">
                    <div class="hr-up"></div>
                    <p><?php echo __("landing_third_slide");?></p>
                    <div class="hr-down"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="landing-projects" class="auto-height photo container-fluid text-center">
    <div class="page-title">
        <div class="hr-up"></div>
        <p><a href="<?php echo $this->webroot; ?>projects"><span class="hidden-xs hidden-sm"><?php echo __("landing_projects");?></span><span class="hidden-md hidden-lg"><?php echo __("landing_projects_mobile");?></span></a></p>
        <div class="hr-down"></div>
    </div>
    <div class="subpage-footer center-content">
        <a href="<?php echo $this->webroot; ?>projects" class="stdbtn"><?php echo __("landing_projects_button");?></a>
    </div>
</section>
<section id="landing-about-us" class="auto-height photo container-fluid text-center">
    <div class="page-title">
        <div class="hr-up"></div>
        <p><a href="<?php echo $this->webroot; ?>about"><span class="hidden-xs hidden-sm"><?php echo __("landing_about");?></span><span class="hidden-md hidden-lg"><?php echo __("landing_about_mobile");?></span></p>
        <div class="hr-down"></div>
    </div>
    <div class="subpage-footer center-content">
        <a href="<?php echo $this->webroot; ?>about" class="stdbtn"><?php echo __("landing_about_button");?></a>
    </div>
</section>
<section id="landing-meet-us" class="auto-height photo container-fluid text-center">
    <div class="page-title">
        <div class="hr-up"></div>
        <p><a href="<?php echo $this->webroot; ?>contact"><span class="hidden-xs hidden-sm"><?php echo __("landing_contact");?></span><span class="hidden-md hidden-lg"><?php echo __("landing_contact_mobile");?></span></a></p>
        <div class="hr-down"></div>
    </div>
    <div class="subpage-footer center-content">
        <a href="<?php echo $this->webroot; ?>" class="stdbtn"><?php echo __("landing_contact_button");?></a>
    </div>
</section>
<section id="landing-journal" class="auto-height photo container-fluid text-center">
    <div class="page-title">
        <div class="hr-up"></div>
        <p><a href="<?php echo $this->webroot; ?>journal"><span class="hidden-xs hidden-sm"><?php echo __("landing_journal");?></span><span class="hidden-md hidden-lg"><?php echo __("landing_journal_mobile");?></span></a></p>
        <div class="hr-down"></div>
    </div>
    <div class="subpage-footer center-content">
        <a href="<?php echo $this->webroot; ?>journal" class="stdbtn"><?php echo __("landing_journal_button");?></a>
    </div>
</section>
<section id="landing-planner" class="auto-height photo container-fluid text-center">
    <div class="page-title">
        <div class="hr-up"></div>
        <p><a href="<?php echo $this->webroot; ?>projectplanner"><span class="hidden-xs hidden-sm"><?php echo __("landing_project_planner");?></span><span class="hidden-md hidden-lg"><?php echo __("landing_project_planner_mobile");?></span></a></p>
        <div class="hr-down"></div>
    </div>
    <div class="subpage-footer center-content">
        <a href="<?php echo $this->webroot; ?>projectplanner" class="stdbtn"><?php echo __("landing_project_planner_button");?></a>
    </div>
</section>