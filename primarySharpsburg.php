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

?>
