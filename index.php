<!-- Description: Main page for the Sharpsburg web site
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
      <!-- First column is contact information -->
      <div class="column-left">
        <h3 class="sharpsburgblue">Contact Us</h3>
          <p1>
            <span>Borough of Sharpsburg</span>
            <span>Office hours: 830am - 4:30pm M-F</span>
            <span>Address: 1611 Main Street, Sharpsburg PA, 15215</span>
            <span>Phone: (412)781-0546</span>
            <span>Fax: (412)781-8449</span>
            <span>Email: manager@sharpsburgborough.com</span>
          </p1>
        <h3 class="sharpsburgblue">Find us with Google</h3>
        <!-- google map widget -->
        <div id="map"></div>
      </div>
      <!-- Second column is the about us section -->
      <div class="column-center border-center">
        <h3 class="sharpsburgblue">About Us</h3>
          <p2>
            <span>The Borough of Sharpsburg is a small community in Allegheny County, Pennsylvania; located
            along the Allegheny River just about 5 miles outside of Pittsburgh, Pennsylvania. With a population
            of 3,446 it is surrounded by Etna, Shaler Township, Aspinwall, and O'Hara Township. Sharpsburg
            is known as the birthplace of the H.J. Heinz Company. Heinz manufactured his first products in
            the kitchen of his Sharpsburg home. Sharpsburg is part of the Fox Chapel Area School District.
            </span>
          </p2>
          <img src="Images/SharpsburgOverviewImage.jpg" id=sharpsburgaerial alt="Sharpsburg From the air"/>
      </div>
      <!-- right column is for events. Since the boroughs events are all expired I've added a fake Optimus Prime event -->
      <div class="column-right">
        <h3 class="sharpsburgblue">Events</h3>
          <p3>
            <span>Optimus Prime at the Sharpsburg Community Center 15 May 2017 from 5:00pm - 7:pm!</span>
          </p3>
          <img src="Images/350px-Optimusg1.jpg" id=optimusprimecasual alt="Optimus Prime. Stolen from the web. Filling up space on part of the site I don't plan to build."/>
      </div>
    </div>
    <div class="footer-regular">
      <?php
        spawn_footer();
      ?>
    </div>
  </body>
</html>
