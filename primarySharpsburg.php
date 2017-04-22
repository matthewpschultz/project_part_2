<?php
  // Used to supply PhP to the other pages as needed
  function spawn_header() {
    echo "<a href=index.php>";
    echo "<img src='Images/SharpsburgEmblemCustomMatt1.jpg' id=sharpsburgemblem alt='Sharpsburg Emblem Custom Matt 1'/>";
    echo "</a>";
  }

  function spawn_navbar() {
    $nav_items = array("'aboutUs.php'>ABOUT US", "'services.php'>SERVICES", "'forms.php'>FORMS AND APPLICATIONS", "'business.php'>BUSINESS LIST",
    "'calendar.php'>CALENDAR", "'contact.php'>CONTACT", "'swift911.php'>SWIFT 911", "'links.php'>LINKS");
    echo "<ul>";
    foreach ($nav_items as $nav_item)
    {
      echo "<li><a href=", $nav_item, "</a><li>";
    }
    echo "</ul>";
  }

  function spawn_footer() {
    echo "Author - Matthew P. Schultz<br>";
    echo "Copyright 2017, Schultz inc.<br>";
  }

  function populate_events() {
    $event_items = array ("<span><strong><font color='red'>Special Elections</font></strong></span>
    <p4><span> Special elections for Mayor to be held at the Sharpsburg community center due to the
    early retirement of outgoing Mayor Chuck Norris. Election will
    be held May 16th, 8am to 8pm. Please support your candidates Dwayne \"the Rock\" Johnson and
    Melissa McCarthy. Your vote counts!</span></p4>
    <br>",
    "<span><strong><font color='red'>Council Meetings</font></strong></span>
    <p4><span> Council meetings are held every 2nd Thursday of the month at the Sharpburg Municipal Building
    in the Council Chambers starting at 6:00pm. We promise these aren't super boring!</span></p4>
    <br>",
    "<span><strong><font color='red'>Farmers Market</font></strong></span>
    <p4><span> The Farmers Market runs from April 1st through September 31st in the Parking lot at
    the corner of Main and 15th Street. Eat healthy and support your local farmers. </span></p4>");

    foreach ($event_items as $event_item) {
      echo $event_item;
    }
  }
?>
