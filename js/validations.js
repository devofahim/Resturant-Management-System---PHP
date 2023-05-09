function ValidationForm() {
  let username = document.forms["RegForm"]["username"];
  let pass = document.forms["RegForm"]["password"];
  let email = document.forms["RegForm"]["email"];
  let phoneNumber = document.forms["RegForm"]["pnumber"];
  let location = document.forms["RegForm"]["location"];
  
  
  if(username.value == "") {
    alert("Please enter your username.");
    username.focus();
    return false;
  }
  if(email.value == "") {
    alert("Please enter a valid Email address.");
    email.focus();
    return false;
  }
  if(email.value.indexOf("@", 0) < 0) {
    alert("Please enter a valid e-mail address.");
    email.focus();
    return false;
  }
  if(email.value.indexOf(".", 0) < 0) {
    alert("Please enter a valid Email address.");
    email.focus();
    return false;
  }
  if(phoneNumber.value == "") {
    alert("Please enter your Mobile number.");
    phoneNumber.focus();
    return false;
  }
  if(password.value == "") {
    alert("Please enter your password");
    pass.focus();
    return false;
  }
  if(location.value == "") {
    alert("Please enter your location");
    pass.focus();
    return false;
  }
}