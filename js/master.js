function menubar(){
  var menu = document.querySelector(".menu_mobile_responsible");
  var header = document.querySelector(".header");
  header.style.height = '290px';
  menu.style.display = 'block';
}
function closeMenu(){
  var menu = document.querySelector(".menu_mobile_responsible");
  var header = document.querySelector(".header");
  header.style.height = '80px';
  menu.style.display = 'none';
}
function displaybca(){
  var bca = document.querySelector("#bca");
  var bba = document.querySelector("#bba");
  var bcom = document.querySelector("#bcom");
  var pharma = document.querySelector(".pharmaHide");
  pharma.style.display = 'none';
  bca.style.display = 'block';
  bba.style.display = 'none';
  bcom.style.display = 'none';
}
function displaybba(){
  var bca = document.querySelector("#bca");
  var bba = document.querySelector("#bba");
  var bcom = document.querySelector("#bcom");
  var pharma = document.querySelector(".pharmaHide");
  pharma.style.display = 'none';
  bca.style.display = 'none';
  bcom.style.display = 'none';
  bba.style.display = 'block';
}
function displaybcom(){
  var bca = document.querySelector("#bca");
  var bba = document.querySelector("#bba");
  var bcom = document.querySelector("#bcom");
  var pharma = document.querySelector(".pharmaHide");
  pharma.style.display = 'none';
  bca.style.display = 'none';
  bba.style.display = 'none';
  bcom.style.display = 'block';

}
function displaypharma(){
  var pharma = document.querySelector("#pharma");
  var nurse = document.querySelector("#nurse");
  var mba = document.querySelector("#mba");
  var ing = document.querySelector("#IngHide");
  nurse.style.display = 'none';
  nurse.style.display = 'none';
  ing.style.display = 'none';
  pharma.style.display = 'block';
}
function displaynurse(){
  var pharma = document.querySelector("#pharma");
  var nurse = document.querySelector("#nurse");
  var mba = document.querySelector("#mba");
  var ing = document.querySelector("#IngHide");
  mba.style.display = 'none';
  nurse.style.display = 'block';
  ing.style.display = 'none';
  pharma.style.display = 'none';
}
function displaymba(){
  var pharma = document.querySelector("#pharma");
  var nurse = document.querySelector("#nurse");
  var mba = document.querySelector("#mba");
  var ing = document.querySelector("#IngHide");
  nurse.style.display = 'none';
  mba.style.display = 'block';
  ing.style.display = 'none';
  pharma.style.display = 'none';
}
/* News letter security checking */
function validateNews(){
  var name = document.getElementById('name_news').value;
  var email = document.getElementById('email_news').value;
  if (name == "") {
    alert('Please Enter name !!!')
    return false;
  }
  if (email == "") {
    alert('Please Enter email !!!')
    return false;
  }
  if (!isNaN(name)) {
    alert('Please Enter name in letter not number !!!')
    return false;
  }
  if (!isNaN(email)) {
    alert('Please Enter email not number !!!')
    return false;
  }
  if (name.length >= 8) {
    alert('Please Enter name less than 8 alphabet !!!')
    return false;
  }
  if (email.length >= 18) {
    alert('Please Enter email less than 18 alphabet !!!')
    return false;
  }
  if (email.indexOf("@", 0) < 0)
   {
       window.alert("Please enter a valid e-mail address.");
       email.focus();
       return false;
   }
   if (email.indexOf(".", 0) < 0)
   {
       window.alert("Please enter a valid e-mail address.");
       email.focus();
       return false;
   }
}
/* Search box security checking system */
function search_course(){
  var name = document.getElementById('search').value;
  if (name == " ") {
    alert('Please Enter course like bca,bba,bcom ...')
    return false;
  }
  if (!isNaN(name)) {
    alert('Please Enter course in letter not number !!!')
    return false;
  }
  if (name.length >= 8) {
    alert('Please Enter course less than 8 alphabet !!!')
    return false;
  }
}
/* contact form security checking system */
function validateContact(){
  var name = document.getElementById('name_news').value;
  var email = document.getElementById('email_news').value;
  var message = document.getElementById('message_news').value;
  var error = document.getElementById('contact_error');
  if (name == "") {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter name !!!';
    return false;
  }
  if (email == "") {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter email !!!';
    return false;
  }
  if (message == "") {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter message !!!';
    return false;
  }
  if (!isNaN(name)) {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter name in letter not number !!!';
    return false;
  }
  if (!isNaN(email)) {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter email not number !!!';
    return false;
  }
  if (name.length >= 8) {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter name less than 8 alphabet !!!';
    return false;
  }
  if (email.length >= 18) {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter email less than 18 alphabet !!!';
    return false;
  }
  if (message.length >= 255) {
    error.style.display = 'block';
    error.innerHTML = 'Please Enter message less than 18 alphabet !!!';
    return false;
  }
  if (email.indexOf("@", 0) < 0)
   {
     error.style.display = 'block';
       error.innerHTML = "Please enter a valid e-mail address.";
       email.focus();
       return false;
   }
   if (email.indexOf(".", 0) < 0)
   {
     error.style.display = 'block';
       error.innerHTML = "Please enter a valid e-mail address.";
       email.focus();
       return false;
   }
}
