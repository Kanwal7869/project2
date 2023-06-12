<?php 
//Template Name: Pricing

get_header ();
?>
          <section id="pricing" class="section-padding">
            <div class="container two">
              <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">Pricing</h2>
                <div class="shape wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"></div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="table wow fadeInLeft animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                    <div class="icon-box">
                      <i class="fa-solid fa-cube"></i>
                    </div>
                    <div class="pricing-header">
                      <p class="price-value">$10<span> /mo</span></p>
                    </div>
                    <div class="title">
                      <h3>Pro</h3>
                    </div>
                    <ul class="description">
                      <li>1 user</li>
                      <li>10 GB storage</li>
                      <li>Email support</li>
                      <li>Lifetime updates</li>
                    </ul>
                    <button class="btn btn-common">Buy Now</button>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 active">
                  <div class="table wow fadeInUp animated" id="active-tb" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                    <div class="icon-box">
                      <i class="fa-solid fa-droplet"></i>
                    </div>
                    <div class="pricing-header">
                      <p class="price-value">$35<span> /mo</span></p>
                    </div>
                    <div class="title">
                      <h3>Plus</h3>
                    </div>
                    <ul class="description">
                      <li>10 user</li>
                      <li>30 GB storage</li>
                      <li>Priority email support</li>
                      <li>Lifetime updates</li>
                    </ul>
                    <button class="btn btn-common">Buy Now</button>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="table wow fadeInRight animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                    <div class="icon-box">
                      <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="pricing-header">
                      <p class="price-value">$150<span> /mo</span></p>
                    </div>
                    <div class="title">
                      <h3>Premium</h3>
                    </div>
                    <ul class="description">
                      <li>Unlimited users</li>
                      <li>Unlimited storage</li>
                      <li>24/7 support</li>
                      <li>Lifetime updates</li>
                    </ul>
                    <button class="btn btn-common">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
          </section>




<!-- <section id="pricing" style="overflow-x: hidden;">
  <div class="container">
    <h2 style="text-align: center; text-decoration: underline #f63854;">Pricing</h2>
    <div class="row">
      <div class="col-sm-4">
          <div class="card">
            <img src="<?php bloginfo('template_directory')?>/package-box.png" alt="John" style="width: 20%; margin-left: 120px; padding-top: 20px;" class="pkg">
            <p class="ten">$10<sub>/mo</sub></p>
            <p class="title">PRO</p>
            <p style="color: grey; font-family: open, sans-serif;">1 User</p>
            <p style="color: grey; font-family: open, sans-serif;">10 GB storage</p>
            <p style="color: grey; font-family: open, sans-serif;">Email support</p>
            <p style="color: grey; font-family: open, sans-serif;">Lifetime updates</p>
            
            <p><button class="button" style="margin-bottom: 15px;" id="buy">BUY NOW</button></p>
          </div>
      </div>
      <div class="col-sm-4">
      <div class="card">
        <img src="<?php bloginfo('template_directory')?>/blood-drop.png" alt="John" style="width: 20%; margin-left: 120px; padding-top: 20px;" class="blood">
        <p class="ten">$35<sub>/mo</sub></p>
        <p class="title">PLUS</p>
        <p style="color: grey; font-family: open, sans-serif;">10 Users</p>
        <p style="color: grey; font-family: open, sans-serif;">30 GB storage</p>
        <p style="color: grey; font-family: open, sans-serif;">Priority email support</p>
        <p style="color: grey; font-family: open, sans-serif;">Lifetime updates</p>
        
        <p><button class="button" style="margin-bottom: 15px;" id="buy">BUY NOW</button></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <img src="<?php bloginfo('template_directory')?>/star.png" alt="John" style="width: 20%; margin-left: 120px; padding-top: 20px;"  class="star">
        <p class="ten">$150<sub>/mo</sub></p>
        <p class="title">PREMIUM</p>
        <p style="color: grey; font-family: open, sans-serif;">Unlimited Users</p>
        <p style="color: grey; font-family: open, sans-serif;">Unlimited storage</p>
        <p style="color: grey; font-family: open, sans-serif;">24/7 support</p>
        <p style="color: grey; font-family: open, sans-serif;">Lifetime updates</p>
        
        <p><button class="button" style="margin-bottom: 15px;" id="buy">BUY NOW</button></p>
      </div>
    </div>
    </div>
  </div>
  </div>
</section> -->
<?php 
get_footer ();
?>