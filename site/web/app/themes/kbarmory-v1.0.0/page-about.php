<!-- Structure: page-{slug/page id}.php is to illustrate that you can create page based tempate -->

<?php


get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<div class="site-content"> <!-- Structure: added post page as a new class -->

        <div class="container-about">

            <div class="nav-about">
                
                <h4>Welcome!</h4>
               
                <ul>
                    <li><a href="#uniqueness">Uniqueness</a></li>
                    <li><a href="#mission">Mission</a></li>
                    <li><a href="#vision">Vision</a></li>
                    <li><a href="#future">Future</a></li>
                </ul>
                
            </div>
    
    
           <div class="nav-content">
               <div class="content">
                   <?php the_content(); ?>
               </div>
           </div>

           
           
        </div>
       

    </div>
    
    <?php endwhile;

    else:
        echo '<p>Opps!</p>';
    endif;


get_footer();

?>