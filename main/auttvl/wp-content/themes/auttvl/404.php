<?php get_header(); ?>

<section class="errorpage__bg">
  <div class="container">
    <div class="row">
    <div class="col-sm-12">
           <div class="post_404_not_found text-center">
                <h1 class="page_title_404">404</h1>
                <div class="page_sub_title_404">OOP! THIS PAGE CAN NOT BE FOUND</div>

                <div class="page_message_404">
                    <!--Maybe searching or one of the links, can help you-->
                    <div class="go-to-home">
                        <a href="<?php echo home_url(); ?>">Back To Home</a>
                    </div>
                </div>
            </div>    
    </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>