<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" lang="EN"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php echo $title; ?></title>

    <?php
    echo $this->element('css');
    echo $this->element('script');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
?>

        <!--css section-->

        <!--end of css-->
        <!--javascript section-->


        <!--end of javascript-->
    </head>
    <body>
    <main id="content" class="group module<?php if (isset($moduleName)) echo $moduleName; ?>" role="main">
            <?php echo $this->element('menu'); ?>
        <div id="wrapper">
            <div class="st-content" id="st-content">
                <nav id="menu-top" class="navbar navbar-fixed-top" role="navigation">
                    <div class="navbar-inner">
                        <div class="container-fluid">       
                            <a class="navbar-brand" href="index.htm"><img src="<?php echo $this->webroot; ?>images/logo.png" alt="Katalpa It" /></a>
                            <button id="show-menu-btn" class="btn btn-link pull-right nav-toggler toggle-push-right"><img src="<?php echo $this->webroot; ?>images/menu_open.png" alt="menu"/></button>          
                        </div>
                    </div>
                </nav>
                    <?php echo $this->fetch('content'); ?>

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