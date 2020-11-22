<!-- Structure: this php lets you use a templates from WP admin for spectific page -->
<!-- "/* Template Name: Special */ tells WP to register this as template"-->

<?php

/* Template Name: Special */


get_header();
 ?>
 <!-- Structure: Site-Content -->
        <div class="site-content-special">
                
                <div class="content-special">
                    <!-- Stucture: Main-Column -->
                    
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();                 
                            ?> 
                            <p><?php the_content(); ?></p>                        
                            <?php
                        endwhile;
                        
                    else:
                        echo '<p>Opps!</p>';
                    endif;
                    ?>
                <!-- /Stucture: Main-Column -->
                </div>

        </div>
    <!-- /Structure: Site-Content -->

<?php
get_footer();

?>