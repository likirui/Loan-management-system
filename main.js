function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["lname"].value;
    var z = document.forms["myForm"]["email"].value;
    var m = document.forms["myForm"]["password_1"].value;
    var n = document.forms["myForm"]["password_2"].value;
    var filter =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var letters = /^[A-Za-z]+$/;
    if (x == null || x == "") {
        alert("First name must be filled out");
        return false;
    }else if(!x.match(letters)){
      alert("First name should have alphabetical characters only");
     }
   if(y == null || y == ""){
     	alert("Last name should be filled out");
     }else if(!y.match(letters)){
     	alert("Last name should have alphabetical characters only");
     }
     if(z == null || z== ""){
     	alert("email must be filled");
     	return false;
     }else if(!filter.test(z)){
     	alert("please provide a valid email address");
     }
     if(m == null || m == ""){
     	alert("fill password field");
     	return false;
     }else if(m.length<6){
     	alert("password field should be more than six characters");
     	return false;
     }else if(n == null || n == ""){
     	alert("please confirm password");
     	return false;
     }
     else if(m != n){
     	alert("password do not match");
     }
    }
