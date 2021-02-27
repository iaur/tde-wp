<!-- Structure: index.php controls the output of Exploits -->

<?php


get_header(); ?>

<!-- Structure: Site-Content -->
    <div class="site-content-exploits">
        <!-- Stucture: Main-Column -->
            <div class="content-column">
                
                <!--
                    <div class="sub-tree">
                        <p>In this article...</p>
                    </div>
                -->
                <div class="section-name">
                    <h3>Recent</h3>
                </div>
                
                <div class="content-exploits">
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); 

                            //This pulls up the content.php and the second argument pull up other post format that has "content-#.php"  
                            get_template_part('content');

                            
                            endwhile;

                            else:
                                echo '<p>Opps!</p>';
                            endif; 
                    ?>                    
                </div>

            </div>
        <!-- /Stucture: Main-Column -->

        <div class="tree">     
            <div class="section-name">
                <h3>Library</h3>
            </div>

            <div class="tree-container">
                <ul class="aqtree3clickable">   
                    <?php 
                        $get_parent_cats = array(
                            'parent' => '0' //get top level categories only
                        ); 
                        
                        $all_categories = get_categories( $get_parent_cats );//get parent categories 
                        
                        foreach( $all_categories as $single_category ){
                            //for each category, get the ID
                            $catID = $single_category->cat_ID;
                            
                            echo '<li><a href=" ' . get_category_link( $catID ) . ' ">' . $single_category->name . '</a>'; //category name & link
                            echo '<ul class="post-title">';
                            
                            
                            wp_reset_postdata();
                            
                            echo '</ul>';
                            $get_children_cats = array(
                                'child_of' => $catID //get children of this parent using the catID variable from earlier
                            );
                            
                            $child_cats = get_categories( $get_children_cats );//get children of parent category
                            echo '<ul class="children">';
                            foreach( $child_cats as $child_cat ){
                                //for each child category, get the ID
                                $childID = $child_cat->cat_ID;
                                
                                //for each child category, give us the link and name
                                echo '<a href=" ' . get_category_link( $childID ) . ' ">' . $child_cat->name . '</a>';
                                
                                echo '<ul class="post-title">';
                                
                                $query = new WP_Query( array( 'cat'=> $childID, 'posts_per_page'=> -1 ) );
                                while( $query->have_posts() ):$query->the_post();
                                echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
                            endwhile;
                            wp_reset_postdata();
                            
                            echo '</ul>';
                            
                        }
                        echo '</ul></li>';
                        } //end of categories logic 
                    ?>
                </ul>
            </div>
            
            <div class="square-ads">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Square-Ad-Tree-Column -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:255px;height:300px"
                    data-ad-client="ca-pub-8248541475840368"
                    data-ad-slot="8209234685"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

        </div>
        
        <div class="side-column">
            <div class="section-name">
                <h3>Side Stuff</h3>
            </div>
             <!-- Structure: Side-Bar Widgets-->

                <?php get_sidebar(); ?>
                
                <div class="yearly-archive">
                    <h4>Archives</h4>

                    <?php
                    $args = array(
                        'type'              => 'yearly',
                        'show_post_count'   => true
                        );
                        ?> 
                    <?php wp_get_archives($args); ?>

                </div>
             <!-- /Structure: Side-Bar Widgets -->

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Exploit-Page-Vertical Ad Unit -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-8248541475840368"
                    data-ad-slot="2699305013"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

        </div>
    </div>
<!-- /Structure: Site-Content -->

<?php
get_footer();
?>