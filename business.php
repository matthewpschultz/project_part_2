<!DOCTYPE html>
<!-- Description: content coming soon
       Author:Matthew P. Schultz
       Date Modified: 15 April 2017
-->
<html>
  <head>
    <title>Sharpsburg Borough Web Site</title>
      <!-- link to the CSS file -->
      <link rel="stylesheet" type="text/css" href="./CSS/primarySharpsburgCSS.css">
  </head>
  <body>
  <div id="wrap">
  <div>
    <a href="index.php">
      <img src="Images/SharpsburgEmblemCustomMatt1.jpg" id=sharpsburgemblem alt="Sharpsburg Emblem Custom Matt 1"/>
    </a>
  </div>
  <!-- The navigation bar. Most of these do not go to full content pages -->
  <div>
    <!-- The navigation bar called from a separate file -->
    <div>
      <?php
        include "primarySharpsburg.php";
        spawn_navbar();
      ?>
  </div>
  <!-- I got nothing. Here is the hamster dance as a place holder -->
  <div class="column-wide">
    <h3 class="sharpsburgblue">Real Content coming soon! For now enjoy the hamster dance! </h3>
      <p1>
        <a href=https://www.youtube.com/watch?v=6WpMlwVwydo>
          <img src="Images/hamsterdanceyoutube.jpg" id=hamstersdancing alt="Hey it's a classic and I'm kinda old!"/>
        </a>
      </p1>
  </div>
  </div>
  </body>
</html>
