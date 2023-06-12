<?php 
get_header();
the_post();
?>
<section id="home" class="hero-area" style="display: block; overflow-x: hidden;">  

</section>
<section>

</section>
<div class="container dynamic">
  <div class="singles">

<?php 
  $imagepath= wp_get_attachment_image_src(
    get_post_thumbnail_id(),'large'
  );
?>
<img class="single_image" src="<?php echo $imagepath [0]; ?>" width= "100%"/>
<h1 class="single_heading"><?php the_title(); ?></h1>
<div class="auth_name"><?php the_author(); ?></div>
<div><?php the_content(); ?></div>
<?php comments_template(); ?>
</div>
</div>





<?php 
get_footer();
?>