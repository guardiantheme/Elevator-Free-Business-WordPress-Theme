<?php
/**
 * The template for displaying all single posts.
 *
 * @package elevator
 */


/*
    Template Name: Single Blog Post
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

	 <!-- Start Blog post -->
	  <div class="container">
	  <div class="row">
                          
                <div class="col-md-8">
                <div class="single-post">
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
                        
                    <p class="post-content"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                the_content();
                endwhile; endif; ?></p>   
                    
                    <?php comments_template(); ?>
                    
                </div>
                </div>
          
          
          
                <?php get_sidebar(); ?>
                
            
        </div>
    </div>

<?php get_footer(); ?>
