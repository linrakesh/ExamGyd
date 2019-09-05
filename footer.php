   <section id="footer">
      <div class="container-bottom">
        <div class="footer-widget-1">
        	<img src="<?php echo of_get_option('logo_url_bottom');?>" alt="bottom logo">
        	<p>
        		<?php echo of_get_option('address'); ?>
        	</p>
        </div>
        <?php dynamic_sidebar( 'footer-2' ); ?>
        <?php dynamic_sidebar( 'footer-3' ); ?>
        <?php dynamic_sidebar( 'footer-4' ); ?>
        <?php dynamic_sidebar( 'footer-5' ); ?>
      </div>
    </section>
    <!--end of footer senction-->
    <section id="copyright">
      <div class="container">
        <p class="social-icon">
          <a href="<?php echo of_get_option('facebook') ?>" target="_blank" title="Facebook Page"><i class="facebook fa fa-facebook fa-2x"></i></a>
          <a href="<?php echo of_get_option('twitter') ?>" target="_blank" title="Twitter Page"><i class="twitter fa fa-twitter fa-2x"></i></a>
          <a href="<?php echo of_get_option('linkedin') ?>" target="_blank" title="Instagram Page"><i class="linkedin fa fa-linkedin fa-2x"></i></a>
          <a href="<?php echo of_get_option('instagram') ?>" target="_blank" title="instagram"><i class="youtube fa fa-instagram fa-2x"></i></a>
          <a href="<?php echo of_get_option('youtube') ?>" target="_blank" title="YouTube Channel"><i class="youtube fa fa-youtube fa-2x"></i></a>
        </p>
      </div>
      <div class="container">
        <p>
          WordPress theme by
          <a href="https://binarynote.com" title="Tutorial WordPress theme" target="_blank">Binarynote.com</a>
        </p>
      </div>
    </section>
    <?php wp_footer();?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      jQuery(function($) {

        var nav = $("#menu");
        $(window).scroll(function() {
          if ($(this).scrollTop() > 70) {
            nav.addClass("fixed");
          } else {
            nav.removeClass("fixed");
          }
        });

      //   $('.search-icon').click(function(){
      //   	$('.search-form').slideToggle();
      // });
  });
    </script>
    <script>
      jQuery(function($) {
  $("ul li:has(ul)").addClass("has-submenu");
  $("ul li ul").addClass("sub-menu");
  $("ul.menu li").hover(
    function() {
      $(this).addClass("hover");
    },
    function() {
      $(this).removeClass("hover");
    }
  );
  var $menu = $("#menu"),
    $menulink = $("#spinner-form"),
    $search = $("#search"),
    $search_box = $(".search_box"),
    $menuTrigger = $(".has-submenu > a");
  $menulink.click(function(e) {
    $menulink.toggleClass("active");
    $menu.toggleClass("active");
    if ($search.hasClass("active")) {
      $(".menu.active").css("padding-top", "50px");
    }
  });
  $search.click(function(e) {
    e.preventDefault();
    $search_box.toggleClass("active");
  });
  $menuTrigger.click(function(e) {
    e.preventDefault();
    var t = $(this);
    t.toggleClass("active")
      .next("ul")
      .toggleClass("active");
  });
  $("ul li:has(ul)");
  /* $(function() {
    var e = $(document).scrollTop();
    var t = $(".nav_wrapper").outerHeight();
    $(window).scroll(function() {
      var n = $(document).scrollTop();
      if ($(document).scrollTop() >= 50) {
        $(".nav_wrapper").css("position", "fixed");
      } else {
        $(".nav_wrapper").css("position", "fixed");
      }
      if (n > t) {
        $(".nav_wrapper").addClass("scroll");
      } else {
        $(".nav_wrapper").removeClass("scroll");
      }
      if (n > e) {
        $(".nav_wrapper").removeClass("no-scroll");
      } else {
        $(".nav_wrapper").addClass("no-scroll");
      }
      e = $(document).scrollTop();
    }); */
});

    </script>
  </body>
</html>
