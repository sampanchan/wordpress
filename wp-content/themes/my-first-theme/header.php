<html>
    <head>
    <?php
    wp_head();
    ?>

    </head>
    <body>
        
   
        <div class="page-container">

            <header class="site-header">
                <div>
                    <a  class ="wordpress-a" href="<?php echo home_url('/')?>"><?php echo get_bloginfo('name');?></a>
                    <nav class="header-nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'mft-menu-class',
                            'container_class' => 'mft-container-class',
                            'items_wrap' => '<ul id="mft-menu" class="%2$s">%3$s</ul>'
                        ));
                        ?>
                    </nav>
                </div>

            </header>