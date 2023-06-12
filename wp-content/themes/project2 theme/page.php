<?php 
get_header();
the_post();

?>


<section id="services" style="overflow-x: hidden;">
<div class="container">
    <h2 class="h2" style="text-align: center;margin-bottom: 30px; text-decoration: underline #f63854;" ><?php the_title ()?></h2> 
    <?php the_post_thumbnail(''); ?>
   <div class="the-content">
    <?php the_content(); ?>


   </div>
</div>
</section>
<?php 
get_footer();
?>