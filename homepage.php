<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package elevator
 */

/*
    Template Name: Home
*/


global $gt_elevator;

get_header(); ?>
												
	 <body <?php echo body_class(); ?> style="background-image: url(<?php echo $gt_elevator['gt-elevator-bg-image']['url'];?>)">
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <?php if ( $gt_elevator['gt-elevator-logo-image']['url'] ) : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo $gt_elevator['gt-elevator-logo-image']['url']?>" alt="<?php bloginfo('name'); ?>" /></a>
                            <?php else : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>                            
                            <?php endif; ?>                  
                            
                            <span><?php echo $gt_elevator['gt-elevator-hd-desc'];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="home-nav-item blue">
                            <a href="#feature-modal" data-toggle="modal">
                                <i class="fa fa-<?php echo $gt_elevator['gt-elevator-feature-icon'];?>"></i>
                                <p>Feature</p>
                            </a>
                        </div>
                        
                        <div class="home-nav-item green">
                            <a href="#portfolio-modal" data-toggle="modal">
                                <i class="fa fa-<?php echo $gt_elevator['gt-elevator-portfolio-icon'];?>"></i>
                                <p>Portfolio</p>
                            </a>
                        </div>
                        
                        <div class="home-nav-item light-red">
                            <a href="#about-modal" data-toggle="modal">
                                <i class="fa fa-<?php echo $gt_elevator['gt-elevator-about-icon'];?>"></i>
                                <p>About Us</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                	<div class="item active">
                                    	<img src="<?php echo $gt_elevator['gt-elevator-slider1']['url']; ?>" class="img-responsive" alt="" />                                       
                                    </div>
                                    <div class="item">
                                    	<img src="<?php echo $gt_elevator['gt-elevator-slider2']['url']; ?>" class="img-responsive" alt="" />                                       
                                    </div>
                                    <div class="item">
                                    	<img src="<?php echo $gt_elevator['gt-elevator-slider3']['url']; ?>" class="img-responsive" alt="" />                                       
                                    </div>                                                                

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-nav-item color responsive">
                                    <a href="#service-modal" data-toggle="modal">
                                        <i class="fa fa-<?php echo $gt_elevator['gt-elevator-service-icon'];?>"></i>
                                        <p>Services</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="home-nav-item light-orange responsive-2">
                                    <a href="#team-modal" data-toggle="modal">
                                        <i class="fa fa-<?php echo $gt_elevator['gt-elevator-team-icon'];?>"></i>
                                        <p>Team</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="home-nav-item light-red">
                            <a href="#contact-modal" data-toggle="modal">
                                <i class="fa fa-<?php echo $gt_elevator['gt-elevator-contact-icon'];?>"></i>
                                <p>Contact</p>
                            </a>
                        </div>
                        
                        <div class="home-nav-item color">
                            <a href="#testimonial-modal" data-toggle="modal">
                                <i class="fa fa-<?php echo $gt_elevator['gt-elevator-testimonial-icon'];?>"></i>
                                <p>Testimonial</p>
                            </a>
                        </div>
                        
                        <div class="home-nav-item blue">
                            <a href="<?php if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option('page_for_posts' ) );
                                else echo bloginfo('url');?> ">
                                <i class="fa fa-<?php echo $gt_elevator['gt-elevator-latestnews-icon'];?>"></i>
                                <p>Latest News</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        
        
        <!-- Start Feature Section -->
        <div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3><?php echo $gt_elevator['gt-feature-title']; ?></h3>
                            <p><?php echo $gt_elevator['gt-feature-desc']; ?></p>
                        </div>
                    </div>
                    <div class="row">

                   <?php $features = $gt_elevator['gt-features']; ?>
                   <?php foreach($features as $feature): ?>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-<?php echo $feature['url']; ?>"></i>
                                <div class="feature-content">
                                    <h4><?php echo $feature['title']; ?></h4>
                                    <p><?php echo $feature['description']; ?></p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                    <?php endforeach; ?>

                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Feature Section -->
        
        
        
        <!-- Start Portfolio Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3><?php echo $gt_elevator['gt-portfolio-title'];?></h3>
                            <p><?php echo $gt_elevator['gt-portfolio-desc'];?></p>
                        </div>
                    </div>
                    <div class="row">
                        
                   <?php $portfolios = $gt_elevator['gt-portfolio']; ?>
                   <?php foreach($portfolios as $portfolio): ?>
 
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="<?php echo $portfolio['image'];?>" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4><?php echo $portfolio['title'];?></h4>
                                    <a href="<?php echo $portfolio['url'];?>"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                  <?php endforeach;?>
                        
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Portfolio Section -->
        
        
        <!-- Start About Us Section -->
        <div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3><?php echo $gt_elevator['gt-about-title']?></h3>
                            <p><?php echo $gt_elevator['gt-about-desc']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                <p><?php echo $gt_elevator['gt-about'];?></p>
                                <div class="row">
                                    
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                        <?php $gt_service_freatures = $gt_elevator['gt-important-1'];?>
                                        <?php foreach ($gt_service_freatures as $gt_service_freature): ?>                                       

                                            <li><i class="fa fa-check-square"></i><?php echo $gt_service_freature;?></li>
                                            
                                        <?php endforeach;?>
                                        
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                        <?php $gt_service_freatures = $gt_elevator['gt-important-2'];?>
                                        <?php foreach ($gt_service_freatures as $gt_service_freature): ?>                                       

                                            <li><i class="fa fa-check-square"></i><?php echo $gt_service_freature;?></li>
                                            
                                        <?php endforeach;?>

                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                        <?php $gt_service_freatures = $gt_elevator['gt-important-3'];?>
                                        <?php foreach ($gt_service_freatures as $gt_service_freature): ?>                                       

                                            <li><i class="fa fa-check-square"></i><?php echo $gt_service_freature;?></li>
                                            
                                        <?php endforeach;?>

                                        </ul>
                                    </div>
                                    
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="skill-shortcode">
                        
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Web Design</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $gt_elevator['gt-web-design'];?>">
                                            <span class="progress-bar-span" ><?php echo $gt_elevator['gt-web-design'];?>%</span>
                                            <span class="sr-only"><?php echo $gt_elevator['gt-web-design'];?>% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>HTML & CSS</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $gt_elevator['gt-html-css'];?>">
                                            <span class="progress-bar-span" ><?php echo $gt_elevator['gt-html-css'];?>%</span>
                                            <span class="sr-only"><?php echo $gt_elevator['gt-html-css'];?>% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Wordpress</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $gt_elevator['gt-wordpress'];?>">
                                            <span class="progress-bar-span" ><?php echo $gt_elevator['gt-wordpress'];?>%</span>
                                            <span class="sr-only"><?php echo $gt_elevator['gt-wordpress'];?>% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Joomla</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $gt_elevator['gt-joomla'];?>">
                                            <span class="progress-bar-span" ><?php echo $gt_elevator['gt-joomla'];?>%</span>
                                            <span class="sr-only"><?php echo $gt_elevator['gt-joomla'];?>% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Extension</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $gt_elevator['gt-extensions'];?>">
                                            <span class="progress-bar-span" ><?php echo $gt_elevator['gt-extensions'];?>%</span>
                                            <span class="sr-only"><?php echo $gt_elevator['gt-extensions'];?>% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-tab">
                        
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Our Mission</a></li>
                                    <li><a href="#tab-2" role="tab" data-toggle="tab">Our Vission</a></li>
                                    <li><a href="#tab-3" role="tab" data-toggle="tab">Company History</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-1">
                                        <p><?php echo $gt_elevator['gt-mission']; ?></p>                                       
                                     </div>


                                    <div class="tab-pane" id="tab-2">
                                        <?php echo $gt_elevator['gt-vission']; ?>
                                     </div>


                                    <div class="tab-pane" id="tab-3">
                                        <?php echo $gt_elevator['gt-history']; ?>
                                    </div>

                                </div><!-- /.tab-content -->

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End About Us Section -->
        
        
        <!-- Start Service Section -->
        <div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3><?php echo $gt_elevator['gt-service-title'];?></h3>
                            <p><?php echo $gt_elevator['gt-service-desc'];?></p>
                        </div>
                    </div>
                    <div class="row">
                    <?php $services = $gt_elevator['gt-service']; ?>
                    <?php foreach($services as $service): ?>                        
                    
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-<?php echo $service['icon']; ?> pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $service['title_elevator']; ?></h4>
                                        <p><?php echo $service['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->

                    <?php endforeach;?>                   
                        
                        
                    </div><!-- /.row -->
                </div>
                
                <div class="pricing-section">
                    <div class="container">
                        <div class="row">

                         <?php $gt_pricing_tables = $gt_elevator['gt-pricing-table'];?>
                         <?php foreach ($gt_pricing_tables as $gt_pricing_table): ?>                                       

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3><?php echo $gt_pricing_table['title'];?></h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value"><?php echo $gt_pricing_table['icon'];?><span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li><?php echo $gt_pricing_table['facebook_link'];?></li>
                                            <li><?php echo $gt_pricing_table['twitter_link'];?></li>
                                            <li><?php echo $gt_pricing_table['linkedin_link'];?></li>
                                            <li><?php echo $gt_pricing_table['dribbble_link'];?></li>
                                            <li><?php echo $gt_pricing_table['googleplus_link'];?></li>                                            
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="<?php echo $gt_pricing_table['url'];?>" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach;?>
                       
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Service Section -->
        
        
        <!-- Start Team Member Section -->
        <div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3><?php echo $gt_elevator['gt-team-title']?></h3>
                            <p><?php echo $gt_elevator['gt-team-desc']?></p>
                        </div>
                    </div>
                    <div class="row">

                    <?php $teams = $gt_elevator['gt-team']; ?>
                    <?php foreach($teams as $team): ?>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="<?php echo $team['image']; ?>" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4><?php echo $team['title']; ?></h4>
                                    <div class="designation"><?php echo $team['designation']; ?></div>
                                    <ul style="text-align: center;">
                                        <li><a href="<?php echo $team['facebook_link']; ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo $team['twitter_link']; ?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $team['linkedin_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="<?php echo $team['dribbble_link']; ?>"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="<?php echo $team['googleplus_link']; ?>"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                       
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Team Member Section -->
        
        
        <!-- Start Latest News Section -->
       <!--  <div class="section-modal modal fade" id="news-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Exclusive News</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-01.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-02.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-03.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-04.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div> -->
        <!-- End Latest News Section -->
        
        
        
        <!-- Start Contact Section -->
        <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3><?php echo $gt_elevator['gt-contact-title']; ?></h3>
                            <p><?php echo $gt_elevator['gt-contact-desc']; ?>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Contact info</h4>
                                <ul>
                                    <?php echo $gt_elevator['gt-contact-info']; ?>                                    
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="<?php echo $gt_elevator['gt-twitter'];?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $gt_elevator['gt-facebook'];?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo $gt_elevator['gt-linkedin'];?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $gt_elevator['gt-googleplus'];?>"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="<?php echo $gt_elevator['gt-dribble'];?>"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Working Hours</h4>
                                <ul>
                                    <li><?php echo $gt_elevator['gt-working-hour']; ?></li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <?php if(!dynamic_sidebar('gt-contactus')); ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Contact Section -->
        
        
         <!-- Start Testimonial Section -->
        <div class="section-modal modal fade contact" id="testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3><?php echo $gt_elevator['gt-testimonial-title']; ?></h3>
                            <p><?php echo $gt_elevator['gt-testimonial-desc']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                   
                   <?php $testimonials = $gt_elevator['gt-testimonial']; ?>
                   <?php foreach($testimonials as $testimonial): ?>

                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="<?php echo $testimonial['image']; ?>" class="img-responsive" alt="...">
                                <h4><?php echo $testimonial['title']; ?></h4>
                                <div class="speech">
                                    <p><?php echo $testimonial['description']; ?></p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach;?>
                       
                    </div><!--/.row -->                    
                </div>                
            </div>
        </div>
        <!-- End Testimonial Section -->
       
<?php get_footer(); ?>
