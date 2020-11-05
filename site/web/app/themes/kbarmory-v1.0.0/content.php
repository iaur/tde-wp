<!-- Structure: content.php is a reusable line or code part for the rest of the structure -->


<article class="post">        
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

    </article>