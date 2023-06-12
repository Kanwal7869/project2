<?php 

//To register nav_menus
register_nav_menus(
    array(
        'primary-menu' => 'Header Menu',
        'footer-menu-1' => 'Footer Menu 1',
        'footer-menu-2' => 'Footer Menu 2'
    )
);

//wp_nav_menu( array( 'theme_location' => 'primary-menu' ) );
add_theme_support('post-thumbnails');

add_theme_support ('custom-header');
// to register sidebar
register_sidebar(
    array(
        'name'=>"Sidebar Location",
        'id'=>"sidebar",
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    )
);




add_theme_support('custom-background');

//to Register footer menu_1
function register_custom_widget_area() {
    register_sidebar(
    array(
    'id' => 'footer-widget-area',
    'name' => esc_html__( 'My footer widget area', 'theme-domain' ),
    'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
    )
    );
}
add_action( 'widgets_init', 'register_custom_widget_area' );

//to register second footer_menu

function register_custom_second_widget_area() {
    register_sidebar(
        array(
        'id' => 'footer-second-widget-area',
        'name' => esc_html__( 'My footer second widget area', 'theme-domain' ),
        'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
        'after_title' => '</h3></div>'
        )
    );
}
add_action( 'widgets_init', 'register_custom_second_widget_area' );



//To Filter posts by category and name


function filter_posts() {
    $cat_id = isset($_POST['catId']) ? $_POST['catId'] : ''; //for filtering posts by category
    $search_query = isset($_POST['s']) ? $_POST['s'] : ''; //for search filter
    
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category__in' => array($cat_id),
        'paged' => get_query_var('paged'),
        's' => $search_query
    );
    




    //for filtering posts by category
    if ($cat_id) {
        $args['category__in'] = array($cat_id);
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $imagepath= wp_get_attachment_image_src(
                get_post_thumbnail_id(),'large'
            );

            echo '<div class="blog-item col-lg-3 col-md-3 col-sm-3">';
            echo '<img class="post_image" src="' . $imagepath[0] . '"/>';
            echo '<a href="#"><h2 class="blog-heading">' . get_the_title() . '</h2></a>';
            echo '<p class="blog-content">' . get_the_excerpt() . '</p>';
            echo '<a href="' . get_permalink() . '"><input type="button" value="Read More>>" class="Input-button btn-common"></a>';
            echo '</div>';
        }
    }

    wp_reset_postdata();

    die();
}




add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');



    //Searchbox filter...


function filter_posts_search() {
    $search_query = isset($_POST['search_query']) ? $_POST['search_query'] : ''; //for search filter
    //echo $search_query;
    $args = array(
        'post_type' => 'post',

        's' => $search_query,
    );
    

    //Searchbox filter...

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $imagepath= wp_get_attachment_image_src(
                get_post_thumbnail_id(),'large'
            );

            echo '<div class="blog-item col-lg-3 col-md-3 col-sm-3">';
            echo '<img class="post_image" src="' . $imagepath[0] . '"/>';
            echo '<a href="#"><h2 class="blog-heading">' . get_the_title() . '</h2></a>';
            echo '<p class="blog-content">' . get_the_excerpt() . '</p>';
            echo '<a href="' . get_permalink() . '"><input type="button" value="Read More>>" class="Input-button btn-common"></a>';
            echo '</div>';
        }
    }


    wp_reset_postdata();

    die();
}




add_action('wp_ajax_filter_posts_search', 'filter_posts_search');
add_action('wp_ajax_nopriv_filter_posts_search', 'filter_posts_search');
//to enqueue jquery and javascript library

function my_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/js/my-script.js', array('jquery'), '', true );
    wp_localize_script('my-script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_scripts');




//Function for handling ajax request when search icon is triggered


function my_ajax() {
    ?>
    <script type="text/javascript">
        // jQuery(document).ready(function($) {
        
        //     $('#searchform').submit(function(e) {
        //         debugger;
        //         e.preventDefault();
                

        //         var search_query = $('#s').val();
        //         $.ajax({
        //             type: 'POST',
        //             dataType: 'html',
        //             url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        //             data: {
        //                 action: 'filter_posts_search',
        //                 search_query: search_query
        //             },
        //             beforeSend: function() {
        //                 $('#blog-posts').html('<div class="loader"></div>');
        //             },
        //             success: function(data) {
        //                 console.log(data)
        //                 $('#blog-posts').html(data);
        //             },    
        //             error: function(xhr, textStatus, error) {
        //                 console.log(xhr.statusText);
        //             }
        //         });
        //         return true;
        //     });
        // });


        jQuery(document).ready(function($) {
  $('#searchform').submit(function(e) {
    e.preventDefault();

    var search_query = $('#s').val();
    var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';

    $.ajax({
      type: 'POST',
      dataType: 'html',
      url: ajaxUrl,
      data: {
        action: 'filter_posts_search',
        search_query: search_query
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

    return true;
  });
});

    </script>
    <?php
}
add_action( 'wp_footer', 'my_ajax' );

function add_owl_carousel_library() {
    wp_enqueue_script('owl-carousel', 'path/to/owl.carousel.min.js', array('jquery'), '2.3.4', true);
}
add_action('wp_enqueue_scripts', 'add_owl_carousel_library');



//To add pagination

// $big = 999999999; // need an unlikely integer

// echo '<div class="pagination">';
// echo paginate_links(array(
//   'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//   'format' => '?paged=%#%',
//   'current' => max(1, get_query_var('paged')),
//   'total' => $query->max_num_pages
// ));
// echo '</div>';



?>