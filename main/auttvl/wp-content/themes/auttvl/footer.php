<!-- Footer Area -->
<footer class="footer-area">
  <div class="container">
    <div class="footer-up">
      <div class="row">
          
<div class="col-lg-3 col-md-6 col-sm-12">
    <h5>Contact Us</h5>
    <p><?php the_field('site_address','options')?></p>
    <p>Phone: <?php the_field('site_phone','options')?></p>
    <p>Fax: <?php the_field('site_fax','options')?></p>

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
          
          <?php dynamic_sidebar( 'footer' ); ?>   
          <?php dynamic_sidebar( 'footer-two' ); ?>   
          <?php dynamic_sidebar( 'footer-three' ); ?>   
          
        <?php /*?>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <h5>Contact Us</h5>
          <p>Anna University Regional Campus - Tirunelveli<br>
            Tirunelveli 627007<br/>
            Tamilnadu</p>
          <p>Phone:0462-2551298</p>
          <p>Fax:0462-2552877</p>
          <div class="social-area"> <a href="#"><i class="lab la-facebook-f"></i></a> <a href="#"><i class="lab la-instagram"></i></a> <a href="#"><i class="lab la-twitter"></i></a> <a href="#"><i class="la la-skype"></i></a> </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5>Map Cordinates</h5>
          <div class="subscribe-form">
            <iframe style="margin:5px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.048476076911!2d77.72352431532853!3d8.68694029664295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04126b9cf8ff7d%3A0xe818c690ce42ee03!2sAnna+University+Regional+Campus!5e0!3m2!1sen!2sin!4v1555306115553!5m2!1sen!2sin" frameborder="0" height="250px;" style="border:0" allowfullscreen>
            </iframe>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-md-6 com-sm-12">
          <h5>Important Links</h5>
          <ul>
            <li> <a href="#"><span>-</span> About us</a> <a href="#"><span>-</span> Anna University,Chennai</a> <a href="#"><span>-</span> Regional Campus - Tirunelveli</a> <a href="#"><span>-</span> Funding Agencies</a> <a href="#"><span>-</span> COE</a> <a href="#"><span>-</span> Staff Pay Slip</a> </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12">
          <h5>Quick Links</h5>
          <ul>
            <li> <a href="#"><span>-</span> Hostel</a> <a href="#"><span>-</span> IEDP Hub</a> <a href="#"><span>-</span> Library</a> <a href="#"><span>-</span> Web Upload</a> <a href="#"><span>-</span> Scholarships</a> <a href="#"><span>-</span> Fees Structure</a> </li>
          </ul>
        </div><?php */?>
      </div>
    </div>
  </div>
</footer>
<div class="footer-bottom">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <p class="copyright-line">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
      </div>
    </div>
  </div>
</div>

<!-- Scroll Top Area --> 
<a href="#top" class="go-top"><i class="las la-angle-up"></i></a>
<?php wp_footer(); ?>
</body></html>