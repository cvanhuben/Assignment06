<?php 
     // $currentTitle = "Cj Van Huben Scrolly Page"; 
    include "includes/top.inc"; ?>


<body>

    <!-- Navigation -->

    <?php 
        include "includes/nav.inc";
    ?>

    <!-- Top Section -->

    <?php
        include "includes/page1.inc"
    ?>

    <!-- Second Section -->

    <?php
        include "includes/page2.inc"

    ?>

    <!-- Third Section -->
       <?php
        include "includes/page3.inc"

    ?>

    <!-- Forth Section -->
      <?php
        include "includes/page4.inc"

    ?>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>
