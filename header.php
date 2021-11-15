<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <?php
    wp_head();
    ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand">
                    <?php
                    if(function_exists('the_custom_logo')){
                        
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <img src="<?php echo $logo[0] ?>" alt="" loading="lazy" />
                </a>
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php
                      wp_nav_menu(
                          array(
                              'menu' => 'primary',
                              'container' => '',
                              'theme_location' => 'primary',
                              'items_wrap' => '<ul id="" class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>'
                          )
                       );
                    ?>   

                </div>
            </div>
        </nav>
    </header>