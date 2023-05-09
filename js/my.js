function ValidationForm() {
  let location = document.forms["RegForm"]["location"];
  let pnumber = document.forms["RegForm"]["pnumber"];
 
  
  
  if(location.value == "") {
    alert("Please enter your valid location.");
    username.focus();
    return false;
  }
  if(pnumber.value == "") {
    alert("Please enter a valid Phone Number.");
    email.focus();
    return false;
  }

}


function loadData() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "../notice.txt");
  xhttp.send();
}


