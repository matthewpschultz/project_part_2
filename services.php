<!DOCTYPE html>
<!-- Description: services page
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
  <!-- force image header to be separated frm the columns below -->
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
  <div class="column-services-left border-center">
    <h2 class="sharpsburgblue">Services</h3>
    <h4>Public Works Department<br /></h4>
      <span>The Public Works Department in the Borough has five crewmen who are responsible for street maintenance and repair, water lines,
        sewer lines, as well as the salting and removal of snow on the Borough streets during the winter months. Water service is now provided
        by Hampton-Shaler Water Authority and the distribution lines for water is maintained by the Borough through the Sharpsburg Water Department.
        <br /><br />
        All water bills are collected at the Borough Office.<br /><br />
      </span>
    <h4>Trash Collection<br /></h4>
      <span>Residential trash collection service in the Borough takes place every TUESDAY throughout the year. Whenever there is a national holiday
        during the week, the collection will be one day behind during that week.<br /><br />
      </span>
      <h4>Building Inspections<br /></h4>
        <span>Norm George-Professional Code Services is the Building Inspector and Zoning Officer for the Borough of Sharpsburg. Building
           inspections are performed as needed upon request.  Mr. George is available for general inquiries and inspections at the Borough
           office every Tuesday from 9:00-1:00.   Newly sold properties are required to be inspected prior to the closing.
           The building inspector will never go into a property without being invited in or without someone being at the property.
           If you would like to file a complaint regarding a code or building violation, please call the borough office at (412) 781-0546.<br /><br />

           You can schedule an inspection with the form here
           <br /><br />
           <a href="./inspectionform.php" class="sharpsburgblue big-font">Schedule an inspection</a>
           <br /><br />
        </span>
  </div>
  <div class="column-services-right">
    <img src="Images/house_blueprint_image.jpg" id=houseBlueprint alt="House stylized design layout"/>
  </div>
  </div>
  <div class="footer-regular">
    <?php
      spawn_footer();
    ?>
  </div>
  </body>
</html>
