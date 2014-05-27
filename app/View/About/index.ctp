<?php
$this->set('title', 'About katalpa');
$this->set('moduleName', 'AboutUs');
?>
<section id="few-words-about-us" class="auto-height photo">
    <div class="page-title">
        <div class="hr-up"></div>
        <p><span class="hidden-xs hidden-sm"><?php echo __("about_few_words");?></span><span class="hidden-md hidden-lg"><?php echo __("about_few_words_mobile");?></span></p>
        <div class="hr-down"></div>
    </div>                 
</section>
<section id="hello-we-are-katalpa" class="text-content text-center container-fluid extra-margin">
    <h1 class=""><?php echo __("about_hello_title");?></h1>
    <div data-ride="carousel" class="carousel slide dotstyle dotstyle-fillup" id="about-katalpa">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#about-katalpa"><a href="#"></a></li>
            <li data-slide-to="1" data-target="#about-katalpa" class=""><a href="#"></a></li>
            <li data-slide-to="2" data-target="#about-katalpa" class=""><a href="#"></a></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <p><?php echo __("about_first_slide_line_1"); ?></p>
                <p><?php echo __("about_first_slide_line_2"); ?></p>
                <p><?php echo __("about_first_slide_line_3"); ?></p>
                <p><?php echo __("about_first_slide_line_4"); ?></p>
            </div>
            <div class="item">
                <p><?php echo __("about_second_slide_line_1"); ?></p>
                <p><?php echo __("about_second_slide_line_2"); ?></p>
                <p><?php echo __("about_second_slide_line_3"); ?></p>
                <p><?php echo __("about_second_slide_line_4"); ?></p>
            </div>
            <div class="item">
                <p><?php echo __("about_third_slide_line_1"); ?></p>
                <p><?php echo __("about_third_slide_line_2"); ?></p>
                <p><?php echo __("about_third_slide_line_3"); ?></p>
                <p><?php echo __("about_third_slide_line_4"); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="our-services" class="text-content container-fluid extra-margin-lg">
    <h2 class="text-center"><?php echo __("about_our_services"); ?></h2>
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <div class="box box-icon icon-mobile-apps col-md-5">
                <h3><?php echo __("about_box_title_mobile_apps"); ?></h3>
                <p><?php echo __("about_box_text_mobile_apps"); ?></p>
            </div>
            <div class="box box-icon icon-web-apps col-md-5 col-md-offset-2">
                <h3><?php echo __("about_box_title_web_apps"); ?></h3>
                <p><?php echo __("about_box_text_web_apps"); ?></p>
            </div>
            <div class="box box-icon icon-user-experience col-md-5">
                <h3><?php echo __("about_box_title_user_experience"); ?></h3>
                <p><?php echo __("about_box_text_user_experience"); ?></p>
            </div>
            <div class="box box-icon icon-outsourcing col-md-5 col-md-offset-2">
                <h3><?php echo __("about_box_title_software_outsourcing"); ?></h3>
                <p><?php echo __("about_box_text_software_outsourcing"); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="team-slider" class="container-fluid no-padding extra-margin-lg hidden-xs hidden-sm">
    <div data-ride="carousel" class="carousel slide dotstyle dotstyle-fillup" id="carousel-what-we-are">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel-what-we-are"><a href="#"></a></li>
            <li data-slide-to="1" data-target="#carousel-what-we-are" class=""><a href="#"></a></li>
            <li data-slide-to="2" data-target="#carousel-what-we-are" class=""><a href="#"></a></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo $this->webroot; ?>images/about-us/team_slider_1_dark.jpg" alt="team member 1">
            </div>
            <div class="item">
                <img src="<?php echo $this->webroot; ?>images/about-us/team_slider_1_dark.jpg" alt="team member 2">
            </div>
            <div class="item">
                <img src="<?php echo $this->webroot; ?>images/about-us/team_slider_1_dark.jpg" alt="team member 3">
            </div>
        </div>
    </div>
</section>
<section id="clients" class="text-content container-fluid text-center extra-margin">
    <h2 class=" "><?php echo __("about_some_clients"); ?></h2>
    <h5><?php echo __("about_heart_before"); ?><img src="<?php echo $this->webroot; ?>images/about-us/ico_heart.png" alt="heart icon"> <?php echo __("about_heart_after"); ?></h5>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-sm-4  col-xs-6" ><a href="#"><span class="icon-netia"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-eltel"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-vectra"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-tp"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-plus"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-inea"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-orange"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-upc"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-tk-telekom"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-korbank"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-sellbox"></span></a></div>
                <div class="col-sm-4  col-xs-6"><a href="#"><span class="icon-umowiony"></span></a></div>
            </div>
        </div>
    </div>
</section>                
<?php echo $this->element('social-media'); ?>
                   