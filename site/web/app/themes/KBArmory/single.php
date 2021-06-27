<!-- Structure: index.php controls the output of Exploits -->

<?php


get_header(); ?>

<!-- Structure: Site-Content -->
    <div class="site-content">
        <!-- Stucture: Main-Column -->
                
                <div class="site-single-exploits">

                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); 

                    ?>
                            <!-- Structure: content.php is a reusable line or code part for the rest of the structure -->


                            <div class="post-single">        
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
                                    
                                    <!-- Site Function: Post Meta Data (id:pmt) -->
                                        <p class="pmt">
                                        
                                            <?php the_time('F j, Y');?> 
                                            | by
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
                                            | posted as
                                                <?php
                                                    $categories = get_the_category();
                                                    $separator = ", ";
                                                    $output = '';
                                                    
                                                    if ($categories) {
                                                        
                                                        foreach ($categories as $category) {
                                                            $output .= 
                                                            '<a href=' .get_category_link($category->term_id).'>' . $category->cat_name . '</a>' 
                                                            . $separator;
                                                        }
                                                        
                                                        echo trim($output, $separator);
                                                    }
                                                    ?>                        
                                        </p>
                                    <!-- /Site Function: Post Meta Data (id:pmt) -->

                                    <!-- Site Function: If Logic For Page Content + Readmore for Contect Excerpt (id:rce) -->
                                        <?php if ( is_search() OR is_archive() ) { 
                                                ?>
                                                    <?php the_excerpt(); ?> 
                                                <?php 
                                            } else {
                                                ?>
                                                    <?php the_content(); ?>
                                                <?php
                                            }
                                        ?> 
                                    <!-- /Site Function: If Logic For Page Content + Readmore for Contect Excerpt (id:rce) -->

                             </div>

                             <div class="site-single-adspace">
                                <div class="section-name">
                                    <h4>Feedback or Help?</h4>
                                </div>
                                <!-- recycling class ; don't get get confused-->
                                <div class="yearly-archive">
                                    <p>Should you have one, click <a href="https://www.thedailyexploits.co/gigs/#freeconsultation">here</a></p>

                                </div>

                                <div class="section-name">
                                    <h4>Boring Ads. Pardon me :)</h4>
                                </div>
                                    
                                    
                                    <div class="adspace-ads-container">

                                        
                                            
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

                                        <div class="adspace-adds-containter-child1"></div>
                                        <div class="adspace-adds-containter-child2"></div>
                                        <div class="adspace-adds-containter-child3"></div>
                                        <div class="adspace-adds-containter-child4"></div>
                                        <div class="adspace-adds-containter-child5"></div>
                                        <div class="adspace-adds-containter-child6"></div>
                                        <div class="adspace-adds-containter-child7"></div>
                                        <div class="adspace-adds-containter-child8"></div>
                                    </div>

                             </div>

                    <?php        
                            endwhile;

                            else:
                                echo '<p>Opps!</p>';
                            endif; 
                    ?>                    
                </div>
        <!-- /Stucture: Main-Column -->
                
    </div>
<!-- /Structure: Site-Content -->

<?php
get_footer();
?>