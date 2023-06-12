<?php 
$page='blog';
get_header();
?>
<section id="home" class="hero-area" style="display: block; overflow-x: hidden;">  

</section>
<section>

</section>
<section>

<div class="container blog-posts">


  <div class="sidebar">
    <?php 
        if(is_category()) {
            dynamic_sidebar('sidebar');
        } else {
            $args = array(
                'orderby' => 'name',
                'parent' => 0
            );
            $categories = get_categories($args);
            echo '<div class="widget">';
            echo '<h2 class="widget-title">Categories</h2>';
            echo '<ul>';
            foreach($categories as $category) {
                $category_link = get_category_link($category->term_id);
                echo '<li><a href="'.esc_url($category_link).'" data-catid="'.$category->term_id.'">'.$category->name.'</a></li>';
            }
            echo '</ul>';
            echo '</div>';
        }
    ?>
</div>



  
<div class="row">
  <?php 
  while (have_posts()) {
    the_post();
  $imagepath= wp_get_attachment_image_src(
    get_post_thumbnail_id(),'large'
  );
  ?>
<div class="blog-item col-lg-4 col-md-4 col-sm-4" >
  <img class="post_image" src= "<?php echo $imagepath [0]; ?>"/>
  <a href="#"><h2 class="blog-heading"><?php the_title(); ?></h2></a>
  <p class="blog-content"><?php echo strip_tags(get_the_excerpt()); ?></p>
 <a href="<?php the_permalink(); ?>"><input type="button" value="Read More>>" class="Input-button btn-common"></a>
</div>  
<?php } ?>
</div>
</div>

</section>






<?php 
get_footer();
?>