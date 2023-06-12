// Get the container element
var Navbar__LinkContainer = document.getElementById("myDIV");

// Get all buttons with class="Navbar__Link" inside the container
var Navbar__Links = Navbar__LinkContainer.getElementsByClassName("Navbar__Link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < Navbar__Links.length; i++) {
    Navbar__Links[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}
$(document).ready(function() {
  $('form').on('change', 'select', function() {
    var categoryId = $(this).val();
    $.ajax({
      url: myAjax.ajaxurl,
      type: 'POST',
      data: {
        action: 'filter_posts',
        category_id: 'categoryId',
      },
      success: function(response) {
        $('.container blog-posts').html(response);
      }
    });
  });
});
$.ajax({
  url: myAjax.ajaxurl,
  type: 'POST',
  data: {
    action: 'filter_posts',
    category_id: 'categoryId',
  },
  success: function(response) {
    $('.container blog-posts').html(response);
  },
  error: function(xhr, textStatus, error) {
    console.log(xhr.statusText);
    console.log(textStatus);
    console.log(error);
  }
});
jQuery(document).ready(function($) {
  $('#search-form').submit(function() {
      var searchTerm = $('#search-box').val();
      var catId = $('.sidebar-li.active a').data('catid');
      $.ajax({
          type: 'POST',
          url: myAjax.ajaxurl,
          data: {
              action: 'filter_posts',
              catId: catId,
              searchTerm: searchTerm
          },
          success: function(response) {
              $('#blog-posts').html(response);
          }
      });
      return false;
  });
});
