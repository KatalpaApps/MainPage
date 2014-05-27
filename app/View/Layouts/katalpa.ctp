<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" lang="EN"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php echo $title; ?></title>
    <?php
    echo $this->fetch('meta');
    echo $this->element('css');
    echo $this->fetch('css');
    echo $this->element('script');
    echo $this->fetch('script');
    ?>
    </head>
    <body>
    <main id="content" class="group module<?php if (isset($moduleName)) echo $moduleName; ?>" role="main">
            <?php echo $this->element('menu'); ?>
        <div id="wrapper">
            <div class="st-content" id="st-content">
                <nav id="menu-top" class="navbar navbar-fixed-top" role="navigation">
                    <div class="navbar-inner">
                        <div class="container-fluid"> 
                            <?php // $str = $this->params['controller'].'/'.$this->action;?>
                            <a class="navbar-brand" href="<?php echo $this->webroot; ?>"><img src="<?php echo $this->webroot; ?>images/logo.png" alt="Katalpa It" /></a>
                            <button id="show-menu-btn" class="btn btn-link pull-right nav-toggler toggle-push-right"><img src="<?php echo $this->webroot; ?>images/menu_open.png" alt="menu"/></button>          
                            <!--<a class="pull-right flag" href="<?php // echo $this->webroot."language?lang=pl&site=".$str?>"><img src="<?php echo $this->webroot; ?>images/pl.png" alt="pl-flag"/></a>-->
                            <!--<a class="pull-right flag" href="<?php // echo $this->webroot."language?lang=en&site=".$str?>"><img src="<?php echo $this->webroot; ?>images/gb.png" alt="us-flag"/></a>-->
                            <!--<a class="pull-right flag" href="<?php // echo $this->webroot."language?lang=de&site=".$str?>"><img src="<?php echo $this->webroot; ?>images/de.png" alt="de-flag"/></a>-->
                        </div>
                    </div>
                </nav>
                <div id="dynamic-content">
                    <?php echo $this->fetch('content'); ?>
                </div>
                    <button class="go-up btn-link">
                    <img src="<?php echo $this->webroot; ?>images/scroll_up.png" alt="scroll top" />
                </button>
            </div>
        </div>
    </main>
    <?php echo $this->Html->script(array(  '/js/lib/classie.js',
    '/js/lib/nav.js')); ?>
</body>
</html>