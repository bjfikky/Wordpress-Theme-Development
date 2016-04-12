<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php wp_footer(); ?>

    <!-- SIGN UP
        ========================================================================= -->
        <section id="signup" data-type="background" data-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                        <p><a href="" class="btn btn-success btn-block">Yes, Sign Me Up</a></p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FOOTER
        ========================================================================= -->
        <footer>
            <div class="container">
                <div class="col-sm-3">
                    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
                </div>
                
                <div class="col-sm-6">
                    <!-- ========= Adding Footer Navigation Menu (Lecture 75 of B2W) ======== -->
                        
                        <?php
                            wp_nav_menu( array (
                            
                                'theme_location'  => 'footer',
                                'container'       => 'nav',
								'menu_class'      => 'list-unstyled list-inline'   /*Menu list class from index.html*/
                            
							) );
                    
                        ?>
                        
                        <!-- End of footer menu-->
                </div>
                
                <div class="col-sm-3">
                    <p class="pull-right">&copy; <?php echo date('Y'); ?> Benjamin Orimoloye</p>
                </div>
            </div>
        </footer>
        
        <!-- MODAL
        ========================================================================= -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">close</span></button>
                        
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
                        
                    </div>
                     
                    <div class="modal-body">
                        <p>Simply enter your name and email! As a thank you for joining us, we are going to give you one of the best selling courses, <em>for free!</em></p>
                        
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="subscribe-name">Your First Name</label>
                                <input type="text" class="form-control" id="subcribe-name" placeholder="Your first name">
                            </div>
                            
                            <div class="form-group">
                                <label class="sr-only" for="subscribe-email">and your email</label>
                                <input type="text" class="form-control" id="subcribe-email" placeholder="and your email">
                            </div>
                            
                            <input type="submit" class="btn btn-danger" value="Subscribe!" />
                            
                        </form>
                        <hr>
                            <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br> No spam. Just good stuff. We respect your privacry &amp; you may unsubscribe at any time.</small></p>
                            
                    </div>
                </div>
            </div>
        </div>



<!-- BOOTSTRAP CORE JAVASCRIPT
                Placed at the end of the document so that the pages load faster
        ========================================================================= -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
       
        <script src="<?php bloginfo('template_directory'); ?>assets/js/jquery-2.2.1.min.js"></script>
        
        <script src="<?php bloginfo('template_directory'); ?>assets/js/main.js"></script> 
        
        <!--======== TEMPLATE OR STYLESHEET CAN BE USED ABOVE========--> 

</body>
</html>
