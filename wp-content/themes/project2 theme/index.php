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

<div class="row posts_row">
  <div class="col-lg-3 col-md-3">
  <div class="sidebar">

  <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <h2 class="filter-heading">Filters</h2>
    <input type="text" value="" name="s" id="s" placeholder="Search">
    <input type="submit" id="searchsubmit" value="Search">
</form>
<div id="filtered-posts"></div>


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
            echo '<a href="http://localhost/project2/blog/"><h2 class="widget-title">Categories</h2></a>';
            echo '<ul>';
            foreach($categories as $category) {
                $category_link = get_category_link($category->term_id);
                echo '<li class="sidebar-li"><a data-catid="'.$category->term_id.'">'.$category->name.'</a></li>';
            }
            echo '</ul>';
            echo '</div>';
            
        }
    ?>
</div>



      </div>



  

  <div class="col-lg-9 col-md-9 col-sm-9">

        <div id="blog-posts" class="row">
  <?php 
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      $imagepath= wp_get_attachment_image_src(
        get_post_thumbnail_id(),'large'
      );
      ?>

          <div class="blog-item col-lg-3 col-md-3 col-sm-3 posts-column">
        <img class="post_image" src="<?php echo $imagepath[0]; ?>"/>
        <a href="#"><h2 class="blog-heading"><?php the_title(); ?></h2></a>
        <p class="blog-content"><?php echo strip_tags(get_the_excerpt()); ?></p>

        <a href="<?php the_permalink(); ?>">
        <input type="button" value="Read More>>" class="Input-button btn-common"></a>
      </div>

    <?php
    }
  } else {
    echo '<div class="alert alert-warning">' . esc_html__('No posts found', 'theme-domain') . '</div>';
  }
  ?>

      </div>
  </div>
</div>
<div class="centered">
  <div class="pagination" id="post-pagination">
    <?php echo paginate_links(); ?>
  </div>
</div>


</section>


<script>
// jQuery(document).ready(function($) {
//   $('a[data-catid]').click(function(e) {

//     debugger;

//     var catId = $(this).data('catid');
//     var ajaxUrl = '<?php //echo admin_url('admin-ajax.php'); ?>';

//     $.ajax({
//     url: ajaxUrl,
//     type: 'POST',
//     data: {
//         action: 'filter_posts',
//         catId: catId
//     },
//     beforeSend: function() {
//         $('#blog-posts').html('<div class="loader"></div>');
//     },
//     success: function(response) {
//         $('#blog-posts').html(response);
//     },
//     error: function(xhr, textStatus, error) {
//         console.log(xhr.statusText);
//     }
// });

//   });
// });


jQuery(document).ready(function($) {
  $('a[data-catid]').click(function(e) {
    e.preventDefault();

    var catId = $(this).data('catid');
    var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';

    $.ajax({
      url: ajaxUrl,
      type: 'POST',
      data: {
        action: 'filter_posts',
        catId: catId
      },
      beforeSend: function() {
        $('#blog-posts').html('<div class="loader"></div>');
      },
      success: function(response) {
        $('#blog-posts').html(response);

        // Check if there are any visible posts
        if ($('#blog-posts .post').length === 0) {
          // Hide the pagination element
          $('.pagination').hide();
        } else {
          // Show the pagination element
          $('.pagination').show();
        }
      },
      error: function(xhr, textStatus, error) {
        console.log(xhr.statusText);
      }
    });
  });
});



</script>

<?php 
get_footer();
?>