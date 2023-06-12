<?php 
//Template Name: Contact Us

get_header ();

?>
<section id="contact" style="display: block; background-color: whitesmoke; overflow-x: hidden;">
  <div class="container" style="background-color: whitesmoke;">
    <h2 style="text-align: center; font-size: 30px; font-weight: 900; font-family: arvo; text-decoration: underline #F63854; padding-top: 20px;">Contact Us</h2>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8" style="margin-left: -55px;" id="abc">
          <div class="form">
            <form action="/action_page.php">
              <div class="mb-3 mt-3">
               
                <input type="text" id="name" placeholder="Name" name="name">
                <input type="text" id="email" placeholder="Email" name="email">
                <input type="subject" class="form-control" id="subject" placeholder="Subject" name="subject" style="width: 100%;">
                <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Your Message" style="width: 100%;"></textarea>
                  <button class="button" style="margin-bottom: 30px;">SEND MESSAGE</button>
              </div>
        </div>
            
          
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.165724671709!2d74.38700747542616!3d31.464627049894304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190766e40d8c87%3A0xacaef2d4833d656d!2sJinnByte!5e0!3m2!1sen!2s!4v1672051645823!5m2!1sen!2s" width="500" height="300" style="border:0; float: right; margin-right: -90px; margin-bottom: 0px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
      </div>
      
  
               
</div>
     </div>

</section> 

<?php 
get_footer ();
?>