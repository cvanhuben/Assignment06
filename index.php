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
        include "includes/title.inc"
    ?>

    <!-- Second Section -->

    <?php
        include "includes/jerry.inc"

    ?>

    <!-- Third Section -->
       <?php
        include "includes/ali.inc"

    ?>

    <!-- Forth Section -->
      <?php
        include "includes/about.inc"

    ?>

    <footer id = "page-footer">
        
        <ul>
            <li>Copyright 2017 - Cj Van Huben</li>

            <div class="csc-footer"><li>CSC 174 - Professor Kostin</li></div>

        </ul>


    </footer>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<?php
    include "includes/scripts.inc"
?>

</body>

</html>
