<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package elevator
 */

/*
    Template Name: Blog
*/


get_header(); ?>
 <!-- Start  Logo & Naviagtion  -->
<div class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            
                <?php if ( $gt_elevator['gt-elevator-logo-image']['url'] ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo $gt_elevator['gt-elevator-logo-image']['url']?>" alt="<?php bloginfo('name'); ?>" /></a>
                <?php else : ?>
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>                            
                <?php endif; ?>
            
        </div>
        <div class="navbar-collapse collapse">
            
            <!-- Start Navigation List -->
             <?php 
                 if (function_exists('wp_nav_menu')) {
                    wp_nav_menu(array(                            
                        'theme_location' => 'blog_menu', 
                        'menu_class'     => 'elevator-blog-menu nav navbar-nav navbar-right'                         
                        
                            ));
                    }; ?>
           
            <!-- End Navigation List -->
        </div>
    </div>
</div>
<!-- End Header Logo & Naviagtion -->

<!-- Start Blog Page Section --> 
<section class="blog-page-section">              
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>Exclusive News</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate</p>
            </div>
        </div>
        <div class="row">

        <?php while(have_posts()): the_post(); ?>   
            <div class="col-md-6">
                <div class="latest-post">
                    <div class="post-img">
                <?php the_post_thumbnail(' ', array(
                    'class' => 'img-responsive' )
                );?>
            </div>
                    <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        
                    <ul class="post-meta">
                        <li><i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                        <li><i class="fa fa-tags"></i><a href="<?php the_permalink(); ?>"><?php the_tags(); ?></a></li>
                        <li><i class="fa fa-comments"></i><a href="#"><?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?></a></li>
                    </ul>
                        
                    <p class="post-content"><?php read_more(50); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>                        
                </div>
            </div>
        <?php endwhile; ?>             
        
        
    </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- Start Pagination -->
                <?php
                    if ( function_exists('elevator_pagination') ) {
                      elevator_pagination();
                    }
                ?>
                <!-- End Pagination -->
            </div>
        </div>
        <!-- End Blog Section -->        
       
    </div>
</section> 

<?php wp_reset_query();?>
<?php get_footer();?>
    



