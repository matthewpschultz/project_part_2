<!DOCTYPE html>
<!-- Description: content coming soon
       Author:Matthew P. Schultz
       Date Modified: 15 April 2017
-->
<?php
  include "primarySharpsburg.php";
?>
<html>
  <head>
    <title>Sharpsburg Borough Web Site</title>
      <!-- link to the CSS file -->
      <link rel="stylesheet" type="text/css" href="./CSS/primarySharpsburgCSS.css">
  </head>
  <body>
  <div id="wrap">
  <div>
    <?php
      spawn_header();
    ?>
  </div>
  <div>
    <!-- The navigation bar called from a separate file -->
    <div>
      <?php
        spawn_navbar();
      ?>
  </div>
  <!-- I got nothing. Here is the hamster dance as a place holder -->
  <div class="column-wide">
    <h3 class="sharpsburgblue">Page is under construction. Check back soon. </h3>
      <p1>
        <img src="Images/Website-Under-Construction.jpg" id=page under contruction alt="This page is under construction"/>
      </p1>
  </div>
  <div class="footer">
    <?php
      spawn_footer();
    ?>
  </div>
  </body>
</html>
