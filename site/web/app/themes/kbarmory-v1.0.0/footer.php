                    
                        

                
                  
                    <div class="container-footer">
                        <footer class="site-footer"> 
                            <p><?php bloginfo('name')?> - &copy;&copy;  - <?php echo date('Y'); ?> | Powered by kbarmory</p>
                            <nav class="footer-widget"><!-- footer navigation menu-->
                        
                                    <?php
                                        $args = array(
                                            'theme_location' => 'footer'
                                        );
                                        ?>
                                
                                    <?php wp_nav_menu( $args); ?>       
                            </nav><!-- /footer navigation menu-->
                        </footer>
                    </div> 
                    
        </div><!-- /container -->
        

    </body>

    <script>
        var balls = document.getElementsByClassName("ball");
        document.onmousemove = function(){
            var x = event.clientX * 100 / window.innerWidth + "%";
            var y = event.clientY * 100 / window.innerHeight + "%";
            //event.clientX => get the horizontal coordinate of the mouse
            //event.clientY => get the Vertical coordinate of the mouse
            //window.innerWidth => get the browser width
            //window.innerHeight => get the browser height

            for(var i=0;i<2;i++){
            balls[i].style.left = x;
            balls[i].style.top = y;
            balls[i].style.transform = "translate(-"+x+",-"+y+")";
            }
        }
    </script>


<?php wp_footer(); ?>

</html>