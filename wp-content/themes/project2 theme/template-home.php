<?php 
//Template Name: Home
get_header ();
?>
<?php
get_header ();


?>
<section id="hero-area" class="hero-area-bg">
  <div class="container two">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        <div class="contents">
          <h2 class="head-title"><?php echo get_field('banner_heading');?></h2>
          <p><?php echo get_field('banner_text')?></p>
          <div class="header-button">
            <a href="<?php echo get_field('banner_download_link'); ?>" rel="nofollow" class="btn btn-common">Download Now</a>
            <a href="https://uideck.com/products/fusion-app-business-saas-product-landing-page-template/" rel="nofollow" class="btn btn-border video-popup">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
        <div class="intro-img">
          <script data-pagespeed-no-defer="">
          window['pagespeed'] = window['pagespeed'] || {};
          var pagespeed = window['pagespeed'];pagespeed.switchToHighResAndMaybeBeacon = function(elem) {
            setTimeout(function(){
              elem.onload = null;
              var srcset = elem.getAttribute('data-pagespeed-high-res-srcset');
              if (srcset) {
                elem.srcset = srcset;
              }
              elem.src = elem.getAttribute('data-pagespeed-high-res-src');
              if (pagespeed.CriticalImages) {
                elem.onload = pagespeed.CriticalImages.checkImageForCriticality(elem);
              }}, 0);
            };
            </script>
            <img class="img-fluid" alt="" data-pagespeed-url-hash="2435745808" src="<?php echo get_field('image'); ?>"  id="pagespeed_img_anXtch8rF82">
          </div>
        </div>
      </div>
  </div>
</section>

<section id="services" class="section-padding">
    <div class="container three">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">Our Services</h2>
        <div class="shape wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
        </div>
    </div>
    <div class="row">
    <?php   
// WP_Query arguments
$args = array(
  'post_type'              => array( 'our_services' ),
  'order'                  => 'ASC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
?>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">

          <div class="services-content">

          <div class="services-img">
          <?php if (has_post_thumbnail()): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
  <img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>" />
<?php endif; ?>
          </div>
            <h3><a href="#"><?php echo get_the_title();?></a></h3>
            <p><?php the_content(); ?> </p>
          </div>
        </div>
    </div>
    <?php

}
} else {
// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>

</div>
</section>


<div class="about-area section-padding bg-gray"> 
      <div class="container two">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="about-wrapper wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div>
                <div class="site-heading">
                  <p class="mb-3">Manage Statistics</p>
                  <h2 class="section-title"><?php echo get_field('stats_heading')?></h2>
                </div>
                <div class="content">
                  <p>
                  <?php echo get_field('stats_content')?>
                  </p>
                  <a href="<?php echo get_field('Read_More_Link'); ?>" class="btn btn-common mt-3">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <img class="img-fluid" src="<?php the_field('stats_image',142); ?>" alt="" data-pagespeed-url-hash="1376828802" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </div>
        </div>
      </div>
</div>




<section id="features" class="section-padding">
        <div class="container two">
          <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">Awesome Features</h2>
            <div class="shape wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            </div>
          </div>
          <div class="row align-items-center">
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="content-left">
          <?php   
// WP_Query arguments
$args = array(
  'post_type'              => array( 'awesome' ),
  'order'                  => 'ASC',
  'posts_per_page'         => 3, // Display 3 posts
  'offset'                 => 0 // Start from the first post
);


// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
?>





   

            
              
                <div class="box-item wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                  <!-- <span class="icon">
                    <i class="fa-solid fa-rocket"></i>
                  </span> -->
                  <div class="image-left">
                  <?php if (has_post_thumbnail()): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
  <img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>" />
<?php endif; ?>
                  </div>
                  <div class="text">




                    <h4><?php echo get_the_title();?></h4>
                    <p><?php the_content(); ?></p>
                  </div>
                </div>
                <?php

}
} else {
// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>

</div>
            </div>




            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="show-box wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                <img src="<?php bloginfo('template_directory')?>/phone.png" alt="" data-pagespeed-url-hash="3620921357" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </div>
            </div>




            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="content-right">
                
              <?php   
// WP_Query arguments
$args = array(
  'post_type'              => array( 'awesome' ),
  'order'                  => 'ASC',
  'posts_per_page'         => 3, // Display 3 posts
  'offset'                 => 3 // Start from the fourth post
);


// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
?>
              
              <div class="box-item wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                  <!-- <span class="icon">
                    <i class="fa-solid fa-leaf"></i>
                  </span> -->
                  <div class="right-img">
                  <?php if (has_post_thumbnail()): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
  <img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>" />
<?php endif; ?>
                  </div>
                  <div class="text">

                    <h4><?php echo get_the_title();?></h4>
                    <p><?php the_content(); ?></p>
                  </div>
              </div>
              <?php

}
} else {
// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>

              </div>
            </div>
          <!-- </div>
        </div> -->
</section>


<section id="team" class="section-padding bg-gray">
          <div class="container two">
            <div class="section-header text-center">
              <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">Meet our team</h2>
              <div class="shape wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              </div>
            </div>
            <div class="row">

            <?php   
// WP_Query arguments
$args = array(
  'post_type'              => array( 'our_team' ),
  'order'                  => 'ASC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
?>


              <div class="col-lg-6 col-md-12 col-xs-12">
          
                <div class="team-item wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                  <div class="team-img">
                  <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <img src="<?php echo $image[0]; ?>" class="center">
      <?php endif; ?>
                  </div>
                  <div class="contetn">
                    <div class="info-text">
                      <h3><a href="#"><?php echo get_the_title();?></a></h3>
                      <p><?php the_content(); ?></p>
                    </div>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
          
              </div>
              <?php

}
} else {
// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>

</section>

<section id="pricing" class="section-padding">
            <div class="container two">
              <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">Pricing</h2>
                <div class="shape wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"></div>
              </div>
              <div class="row">

              <?php   
// WP_Query arguments
$args = array(
  'post_type'              => array( 'pricing_post' ),
  'order'                  => 'ASC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
?>



                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="table wow fadeInLeft animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">

                    <div class="pricing-header">

                    <div class="pricing-img">
                    <?php if (has_post_thumbnail()): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
  <img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>" />
<?php endif; ?>
                    </div>

                    
                      <p class="price-value"><?php echo get_the_title();?></p>
                    </div>

                    <ul class="description">
                    <?php the_content(); ?>

                    </ul>
                    <button class="btn btn-common">Buy Now</button>
                  </div>
                </div>
                <?php

}
} else {
// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>

              </div>
            </div>
</section>

<section id="testimonial" class="testimonial section-padding">
              <div class="container two">
                <div class="row justify-content-center">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel wow fadeInUp owl-loaded owl-drag animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
              
              
                    <div class="owl-stage-outer" >
                <div class="owl-stage"  style="transition: all 0.25s ease 0s; width: 3750px; transform: translate3d(-1125px, 0px, 0px);">

                    <?php   
// WP_Query arguments
$args = array(
  'post_type'              => array( 'testimonial_post' ),
  'order'                  => 'ASC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
?>

              

<div class="owl-item cloned"  style="width: 360px; margin-right: 15px;">
                  <div class="item">


              <div class="testimonial-item">
                <div class="img-thumb">
                <?php if (has_post_thumbnail()): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
  <img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>" />
<?php endif; ?>                </div>
              <div class="info">
                <h2><a href="#"><?php echo get_the_title();?></a></h2>
                <!-- <h3><a href="#">Awesome Technology co.</a></h3> -->
              </div>
              <div class="content">
                <p class="description"><?php the_content(); ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php

}
} else {
// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>
        </div>
      </div>
    </div>
   
    
        <div class="owl-nav disabled">
          <button type="button" role="presentation" class="owl-prev">
            <span aria-label="Previous">‹</span>
          </button>
        <button type="button" role="presentation" class="owl-next">
          <span aria-label="Next">›</span>
        </button>
      </div>


      <!-- <div class="owl-dots">
      <button role="button" class="owl-dot active">
        <span></span>
      </button>
      <button role="button" class="owl-dot">
        <span></span>
      </button>
      <button role="button" class="owl-dot">
        <span></span>
      </button>
      <button role="button" class="owl-dot">
        <span></span>
      </button>
    </div> -->

  </div>
</div>
</div>
</div>
</section>



<section id="cta" class="section-padding">
  <div class="container two">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
        <div class="cta-text">
          <h4><?php echo get_field('cta_heading');?></h4>
          <p><?php echo get_field('cta_content');?> </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 text-right wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
        <br><a href="<?php echo get_field('cta_link');?>" class="btn btn-common">Register Now</a>
      </div>
    </div>
  </div>
</section>



<section id="contact" class="section-padding bg-gray">
  <div class="container two">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">Contact Us</h2>
      <div class="shape wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"></div>
    </div>
    <div class="row contact-form-area wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
      <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="contact-block">


          <?php $contact= get_field('contact_form');
          
          echo do_shortcode($contact);
          
          
          ?>


        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-xs-12">
        <div class="map">

        <div class="contact_map"><?php echo get_field('contact_map')?></div>
      </div>
      </div>
    </div>
  </div>
</section>












<?php get_footer()?>





