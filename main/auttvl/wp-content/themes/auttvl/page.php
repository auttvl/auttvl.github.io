<?php get_header(); 
$page_fimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>	

<div class="breadcroumb-area" style="background-image: url('<?php if($page_fimage[0]){ echo $page_fimage[0]; } else { the_field('page_banner','options'); } ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1><?php the_title();?></h1>
                    <h6><?php the_breadcrumb();?></h6>
                </div>
            </div>
        </div>
    </div>
</div> 


<section class="about-area">
  <div class="container">
    <div class="row">
	  <div class="col-lg-12">
<?php while ( have_posts() ) : the_post();?>
<?php /*?>		  
<?php
	// Must be inside a loop.
	if ( has_post_thumbnail() ) {
		echo '<div class="single_post_image">';
		  the_post_thumbnail('full', array( 'class'  => 'img-fluid' ));
		echo '</div>';
	} else{}
?><?php */?>
		  
 <?php the_content(); ?>
		  
		  
<?php endwhile; // end of the loop. ?>
		</div>
		
	</div>
  </div>
</section>
<?php get_footer(); ?>