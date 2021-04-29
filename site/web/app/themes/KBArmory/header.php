<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>
         <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-EDJYS8ZH4F"></script>
                <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-EDJYS8ZH4F');
            </script>
        <!-- Google Adsense -->
            <script data-ad-client="ca-pub-8248541475840368" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Google Adsense -->
        <meta charset="<? bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <script src="https://www.kryogenix.org/code/browser/aqlists/aqtree3clickable.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://www.kryogenix.org/code/browser/aqlists/aqtree3clickable.css">
    </head>

    <body <?php body_class(); ?> >


        <div class="container-all"><!-- container-all -->
        
                <header class="site-header">
                    
                    <a href="<?php echo home_url(); ?>" class="logo-eye">
                        <img src="https://thedailyexploits.co/app/uploads/2020/11/LogoMakr-3Q4c31.png" alt="eye" height="60" width="200">
                    </a>

                    <div class="mobile-flex">

                        <div class="hamburger">
                            <input class="menu-btn" type="checkbox" id="menu-btn" />
                            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
                                
                            <div class="site-nav"><!-- header navigation menu-->     
                                <?php
                                    $args = array(
                                        'theme_location' => 'primary'
                                    );
                                    ?>
                                <?php wp_nav_menu( $args); ?>
                            </div><!-- /header navigation menu-->
                        </div>
                        
                        <!-- header-search (id:hs) -->
                        <div class="search-container">
                            <?php get_search_form(); ?>      
                        </div>
                        <!-- /header-search -->
                    </div>
                    
                </header>

        
        

        