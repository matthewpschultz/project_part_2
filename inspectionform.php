<!DOCTYPE html>
<!-- Description: document for scheduling inspections with the borough online
       Author:Matthew P. Schultz
       Date Modified: 15 April 2017
-->
<?php
  include "primarySharpsburg.php";
?>
<html>
  <head>
    <title>Sharpsburg Inspection Schedule Request</title>
      <!-- link to CSS files -->
      <link rel="stylesheet" type="text/css" href="./CSS/inspectionFormSharpsburg.css">
      <link rel="stylesheet" type="text/css" href="./CSS/primarySharpsburgCSS.css">
      <!-- link to Java Script file -->
      <script src="./JavaScript/SharpsburgErrors.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="wrap">
      <!-- call PhP for page header -->
      <div>
        <?php
          spawn_header();
        ?>
      </div>
      <!-- call PhP for Nav Bar -->
      <div>
        <?php
          spawn_navbar();
        ?>
      </div>

    <h2 class="sharpsburgblue">Welcome to the borough of Sharpsburg inspection site!</h2>
    <h3 class="fontfancy">Description</h3>
      <p2>Hello. This form is to request scheduling of borough inspections.
        Please fill out the information below and we will get<br> back to you within 2
        business days to confirm a time. If you have any questions please contact
        us at 555-123-4567.<br>
      </p2>
      <!-- form for requesting an inspection appointment -->
      <div id="form" class="column-wide">
        <p class="bold-font sharpsburgblue">Submission form</p>
          <form name="inspectionForm" id="inspectionForm" method="post">
            <fieldset>
              <label for="firstname">First Name:</label>
              <input type="text" id="firstname" />
            </fieldset>
            <fieldset>
              <label for="lastname">Last Name:</label>
              <input type="text" id="lastname" />
            </fieldset>
            <fieldset>
              <label for="address">Address:</label>
              <input type="text" id="address" />
            </fieldset>
            <fieldset>
              <label for="phonenumber">Phone Number:</label>
              <input type="text" id="phonenumber" />
            </fieldset>
            <fieldset>
              <label for="hour">Hour: (8-16)</label>
              <input type="number" id="hour" />
            </fieldset>
              <input type="submit" id="formSubmit" name="submitto" value="Submit" onclick="verifyFormValues();">
            </form>
          </div>
        </div>
    </body>
</html>
<!-- EOF -->
