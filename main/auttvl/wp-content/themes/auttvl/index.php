<?php
/* 
Template Name: Home Page
*/
get_header();
?>

<?php if( have_rows('home_slider','options') ): ?>
<div id="home-2" class="homepage-slides owl-carousel">
    
  <?php while( have_rows('home_slider','options') ): the_row(); 
    $slider_bg_image = get_sub_field('slider_bgimage');
    $slider_heading = get_sub_field('slider_heading');
  ?>   
  <div class="single-slide-item" style="background-image: url(<?php echo  $slider_bg_image;?>)">
    <div class="overlay-1"></div>
    <div class="hero-area-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 wow fadeInUp animated" data-woww4-delay=".2s">
            <div class="section-title">
              <h1><?php echo $slider_heading; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php endif; ?>



<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
    <?php the_content(); ?>
</div>
<?php endwhile; wp_reset_postdata();// end of the loop. ?>


<?php get_footer(); ?>
