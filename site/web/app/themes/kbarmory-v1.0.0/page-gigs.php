<!-- Structure: page-{slug/page id}.php is to illustrate that you can create page based tempate -->

<?php


get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<div class="site-content"> <!-- Structure: added post page as a new class -->
    
    <div class="container-gigs">

        <div class="slide-right">
            <input class="slide-btn" type="checkbox" id="slide-btn" />
            <div class="button">
                <label class="menu-icon" for="slide-btn"><span class="nav-icon"></span></label>
            </div>
            
            <div class="slide-content">
                <ul class="nav-gigs">
                    <li><a href="#credibility">Credibility</a></li>
                    <li><a href="#freeconsultation">Free Consultation</a></li>
                    <li><a href="#affordablegigs">Affordable Gigs</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>           
        </div>
        
        <div class="content-gigs">
            <h3>Hire me!</h3>
            <?php the_content(); ?>
        </div>
    </div>
       

 </div>
    
    <?php endwhile;

    else:
        echo '<p>Opps!</p>';
    endif;


get_footer();

?>