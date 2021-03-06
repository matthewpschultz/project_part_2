<!DOCTYPE html>
<!-- Description: aboutUS page
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
  <!-- link to Java Script file for Google Map -->
  <script src="./JavaScript/GoogleMap.js" type="text/javascript"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRWKROd3jTNPgAyPGZ-NE7-jNUnfu4YDk&callback=initMap"></script>
  <!-- force image header to be separated from the columns below -->
  <div>
    <?php
      spawn_header();
    ?>
  </div>
  <!-- The navigation bar called from a separate file -->
  <div>
    <?php
      spawn_navbar();
    ?>
  </div>
  <div class="column-narrow">
    <h3 class="sharpsburgblue">Contact Us</h3>
      <p1>
        <span class="bold-font">Borough of Sharpsburg</span>
        <span>1611 Main Street</span>
        <span>Pittsburgh, PA 15215</span>
        <span>Phone: (412)781-0546</span>
        <span>Fax: (412)781-8449</span>
        <span>Office Hours: 8:30am-4:30pm</span>
        <br />
        <span>William Rossey</span>
        <span>Borough Manager - x 100</span>
        <span>manager@sharpsburgborough.com</span>
        <br />
        <span>Barb Ruhle</span>
        <span>Utilities Administrator - x 101</span>
        <br />
        <span>Roxanne Magnelli</span>
        <span>Borough Treasurer - x 102</span>
      </p1>
      <h3 class="sharpsburgblue">Find us with Google</h3>
        <div id="map"></div>
  </div>
  <div class="column-wide border-center">
    <h3 class="sharpsburgblue">About Us</h3>
      <p2>
        <span>The Borough of Sharpsburg is a small community in Allegheny County, Pennsylvania; located
        along the Allegheny River just about 5 miles outside of Pittsburgh, Pennsylvania. With a population
        of 3,446 it is surrounded by Etna, Shaler Township, Aspinwall, and O'Hara Township. Sharpsburg
        is known as the birthplace of the H.J. Heinz Company. Heinz manufactured his first products in
        the kitchen of his Sharpsburg home. Sharpsburg is part of the Fox Chapel Area School District.
        </span>
      </p2>
      <img src="Images/SharpsburgOverviewImage.jpg" id=sharpsburgaerial-about alt="Sharpsburg From the air"/>
      <p2>
        <br>
        <span>Sharpsburg is a member of the North Hills Council of Governments, a voluntary coalition of
        twenty municipalities inboth Allegheny and Butler Counties, which was initiated as a result of
        the Pennsylvania Intergovernmental Cooperation Act of 1972, and is a non-profit corporation
        under the laws of the state of Pennsylvania.
        </span>
        <br>
        <span>
        The goal of this website is to connect our wonderful residents to businesses and other important
        information while connecting our community to others in the region, informing them of the great things
        that are happening here in Sharpsburg.
        </span>
        <br>
  </div>
  </div>
  <div class="footer-about">
    <?php
      spawn_footer();
    ?>
  </div>
  </body>
</html>
