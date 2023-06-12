
<footer id="footer" class="footer-area section-padding">
  <div class="container two">
    <div class="container two">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">

          <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
    <div id="footer-widget-area">
        <?php dynamic_sidebar( 'footer-widget-area' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <h3 class="footer-titel">Products</h3>
          <div class="footer-menu-1">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
</div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <h3 class="footer-titel">Resources</h3>
          <div class="footer-menu-2">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
</div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
    <div id="footer-second-widget-area">
        <?php dynamic_sidebar( 'footer-second-widget-area' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>
</div>
      </div>


    </div>
  </div>
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-content">
            <p>Designed and Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<a href="#" class="back-to-top" style="display: inline;">
  <i class="fa-solid fa-arrow-up"></i>
</a>
<div id="preloader" style="display: none;">
  <div class="loader" id="loader-1">

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- <script src="assets/js/owl.carousel.2.3.4.min.js+wow.js+main.js+form-validator.min.js+contact-form-script.min.js.pagespeed.jc.DpaQXEAV9n.js"></script> -->
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
  <script>
    
    $(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  $('.owl-carousel .owl-item:first').removeClass('cloned');
$('.owl-carousel .owl-item:last').removeClass('cloned');

  owl.owlCarousel({
    margin: 10,
    loop: true,
    
    
    responsiveClass: true,
    responsive: {
    0:{
      items: 1
    },
    480:{
      items: 2
    },
    769:{
      items: 4 // Display 4 items on screens larger than 769px
    }
}

    
  });
});




  </script>





</body>
</html>

<?php wp_footer(); ?>