<!-- Structure: search.php controls the output of our search results -->

<?php
get_header();
?>

<!-- Structure: Site-Content -->
<div class="site-content">
    <div class="content-search">
        <!-- Stucture: Main-Column -->
            <?php
                if (have_posts()) :
                    ?>
                        <!-- Header-Search Inputs Heading (id:hs) -->
                        <div class="section-name">
                            <h3>Search results for:</h3>
                            <?php the_search_query(); ?>
                        </div>
                        <!-- /Header-Search Inputs Heading (id:hs) -->
                    <?php


                ?>
                    <div class="search-results">
                        <?php
                        while (have_posts()) : 
                            
                            the_post(); 
                            
                            //This pulls up the content.php and the second argument pull up other post format that has "content-#.php"  
                            get_template_part('content', get_post_format());
                            
                            endwhile;
                            
                            else:
                                echo '<p>Opps!</p>';
                                endif;
                        ?>
                    </div>
                <?php
            ?>
        <!-- /Stucture: Main-Column -->
    </div>
</div>
<!-- /Structure: Site-Content -->

<?php
get_footer();
?>