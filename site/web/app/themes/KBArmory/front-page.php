<!-- Structure: index.php controls the output of our homescreen -->

<?php get_header(); ?>

<!-- Structure: Site-Content -->
        <div class="site-content-front">

                <div class="eye-container">
                    <div class="eyes">
                        <div class="eye">
                        <div class="ball"></div>
                        </div>
                    </div>
                </div>
                

                
                <div class="content">
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

<?php get_footer(); ?>