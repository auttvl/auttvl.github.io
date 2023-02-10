<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'auttvl' ), max( $paged, $page ) );

	?>
</title>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="<?php the_field('site_favicon','options'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php wp_head(); ?>
	

</head>

<body data-container="body" <?php body_class(); ?>>
    
    
    
    
	<!-- Pre-Loader -->
 	<div id="loader">
 		<div class="loading">
 			<div class="sk-folding-cube">
 				<div class="sk-cube1 sk-cube"></div>
 				<div class="sk-cube2 sk-cube"></div>
 				<div class="sk-cube4 sk-cube"></div>
 				<div class="sk-cube3 sk-cube"></div>
 			</div>
 		</div>
 	</div>

 	<!-- Header Area -->
	 
	 <div class="header-top">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-6 col-md-12 col-sm-12">
 					<div class="contact-info">
 						
                        <?php
                            wp_nav_menu( array(
                                'menu'           => 'Secondary Menu', // Do not fall back to first non-empty menu.
                                'theme_location' => 'second',
                                'container' => false,
                                'menu_class'      => 'top_menu', 
                                'menu_id'         => '',
                                'fallback_cb'    => false // Do not fall back to wp_page_menu()
                            ));
                        ?>
                        
                        
 						
 					</div>
 				</div>
 				<div class="col-lg-6 col-md-12 col-sm-12 text-right">
 					<div class="site-info">
 						
                        <?php if( have_rows('social_connect','options') ): ?>
                        <div class="social-area">
                          <?php
                          while ( have_rows( 'social_connect', 'options' ) ): the_row();
                          $social_title = get_sub_field( 'social_title' );
                          $social_icon = get_sub_field( 'social_icon' );
                          $social_link = get_sub_field( 'social_link' );
                          ?>
                          <a href="<?php echo $social_link; ?>" title="<?php echo $social_title; ?>"><?php echo $social_icon; ?></a>
                          <?php endwhile; ?>
                        </div>
                        <?php endif; ?>                                                  
                        
 						
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<header id="header-2" class="header-area">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-5">
 					<div class="logo">
 						<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php the_field('site_logo','options')?>" alt=""></a>
 					</div>
 				</div>
 				
 				<div class="col-lg-7 text-right">
 					<div id="header-aside">
 						<div class="aside-content">
 							<div class="inner">
 								<div class="info-one">
 									<div class="info-wrap">
 										<a href="<?php echo home_url(); ?>" class="header-btn main-btn"><i class="fa fa-user"></i> Student Login</a>
 									</div>
 								</div>
 								
 								<div class="info-three">
 									<div class="info-wrap">
 										<a href="<?php echo home_url(); ?>" class="header-btn  btn-danger"><i class="fa fa-users"></i>  Staff Login</a>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="container-fluid">
 			<div class="sticky-area">
 				<div class="navigation">
 					<div class="row">
 						<div class="col-lg-12">
 							<div class="main-menu">
 								<nav class="navbar navbar-expand-lg">
 									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 										<span class="navbar-toggler-icon"></span>
 										<span class="navbar-toggler-icon"></span>
 										<span class="navbar-toggler-icon"></span>
 									</button>

 									<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                        
<?php

    $primarymenu = array(
        'theme_location'  => 'primary',
        'menu'       => 'Primary Menu',
        'depth'      => 3,
        'container'  => 'false',
        'menu_id' => false,
        'menu_class' => 'navbar-nav m-auto',
        'fallback_cb'       => 'wp_page_menu',
        'walker'     => new WP_Bootstrap_Navwalker(),
    );
    wp_nav_menu( $primarymenu );
?>       
                                        
                                        
                                        
                                        
                                        
 										<?php /*?><ul class="navbar-nav m-auto">
 											<li class="nav-item">
 												<a class="nav-link active" href="#">Home
 													<span class="sub-nav-toggler">
 													</span>
 												</a></li>

 											<li class="nav-item">
 												<a class="nav-link" href="#">Administration
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="">University Administration</a></li>
													<li><a href="">Vice Chancellor</a></li>
													<li><a href="">Registor </a></li>
													<li><a href="">Director (CCC) </a></li>
													<li><a href="">Dean's Desk </a></li>
													<li><a href="">Dean Office </a></li>
 												</ul>
 											</li>
 											<li class="nav-item">
 												<a class="nav-link" href="#">Academic
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="">Faculty </a></li>
													<li><a href="">Course Offered </a></li>
													<li><a href="">Curriculum </a></li>	
 												</ul>

 											</li>

 											<li class="nav-item">
 												<a class="nav-link" href="#">Departments
 													
 												</a>
 												
 											</li>


 											<li class="nav-item">
 												<a class="nav-link" href="#">Affliation
 													
 												</a>
 												
 											</li>
											<li class="nav-item">
 												<a class="nav-link" href="#">Research
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="">Faculty</a></li>
 													<li><a href="">List of Supervisors</a></li>
 													<li><a href="">Projects</a></li>
 												</ul>
 											</li>
											<li class="nav-item">
 												<a class="nav-link" href="#">Committees & Cell
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="">Women Empowerment Cell</a></li>
 													<li><a href="">Grievance Committee</a></li>
 													<li><a href="">Discipline Committee</a></li>
 												</ul>
 											</li>
											<li class="nav-item">
 												<a class="nav-link" href="#">Campus Life
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="">NCC</a></li>
 													<li><a href="">Arts & Culture</a></li>
 													<li><a href="">Tamil Mandram</a></li>
 												</ul>
 											</li>
											
											<li class="nav-item">
 												<a class="nav-link" href="#">AICTE
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="">Letter of Approval(LoA)</a></li>
 													
 												</ul>
 											</li>
											<li class="nav-item">
 												<a class="nav-link" href="">Estate Office</a>
 											</li>
											<li class="nav-item">
 												<a class="nav-link" href="">Gallery</a>
 											</li>
											<li class="nav-item">
 												<a class="nav-link" href="">Anti Ragging</a>
 											</li>
											
											
 											
 										</ul><?php */?>

 									</div>
 								</nav>
 							</div>
 						</div>
 						
 						<!-- Responsive Logo-->
 						<div class="col-md-4 col-sm-4">
 							<div class="responsive-logo">
 								<a href="<?php echo home_url(); ?>"><img src="<?php the_field('site_logo','options')?>" alt="dustrian-logo"></a>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</header>

 	<!-- Hero Area -->    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
 