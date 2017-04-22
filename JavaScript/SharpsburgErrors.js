/* JavaScript for inspection submission form
remember form functions be able to return true */

// Make sure all fields have values. Only checks for values does not verify they are anything but text.
function verifyFormValues() {
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  var address = document.getElementById("address").value;
  var phonenumber = document.getElementById("phonenumber").value;
  var hour = document.getElementById("hour").value
  var form = document.getElementById("inspectionForm").value;

  if (firstname == "") {
    alert("First name can not be left blank");
    return false;
  }
  if (lastname == "") {
    alert("Last name can not be left blank");
    return false;
  }
  if (address == "") {
    alert("Address can not be left blank");
    return false;
  }
  if (phonenumber == "") {
    alert("Phone number can not be left blank");
    return false;
  }
  if (Number(hour) < 8 || Number(hour) > 16) {
    alert("Hour must be between 8 and 16");
  }
  else {
    // Clear the Form
    document.getElementById("inspectionForm").style.display="none";
    alert("Form submitted succesfully. Have a great day!");
    return true;
  }
}
