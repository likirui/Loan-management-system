function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var y = document.forms["myForm"]["id"].value;
    var z = document.forms["myForm"]["contact"].value;
    var m = document.forms["myForm"]["loan"].value;
    var n = document.forms["myForm"]["duration"].value;
    var p = document.forms["myForm"]["fname"].value;
    var r = document.forms["myForm"]["lname"].value;
    var t = document.forms["myForm"]["numb_1"].value;
    var i = document.forms["myForm"]["tel_1"].value;
    var j = document.forms["myForm"]["firstname"].value;
    var k = document.forms["myForm"]["lastname"].value;
    var l = document.forms["myForm"]["numb_2"].value;
    var q = document.forms["myForm"]["tel_2"].value;
    var letters = /^[A-Za-z] $/;
    if (x == null || x == "" ){
    	alert("please enter email");
        return false;
    }else if(y == null || y == ""){
    	alert("please enter ID number");
        return false;
   }else if(isNaN(y)){
    	alert("please enter valid ID number");
        return false;
    }else if(z == null || z == ""){
    	alert("please enter phone number");
        return false;
	}else if(isNaN(z)){
		alert("please enter valid phone number");
        return false;
	}else if(m == null || m == ""){
		alert("please enter loan ammount");
        return false;
	}else if(isNaN(m)){
		alert("please enter valid loan ammount");
        return false;
	}else if(n == null || n == ""){
		alert("please fill the repayment duration");
        return false;
	}else if ( p== null || p == "" ){
        alert("please enter firstname");
        return false;
   }else if(r == null || r == ""){
        alert("please enter last name");
        return false;
    }else if(t == null || t==""){
        alert("please enter ID number");
        return false;
    }else if(isNaN(t)){
        alert("please enter valid ID number");
        return false;
    }else if(i== null || i ==""){
        alert("please enter phone number");
        return false;
    }else if(isNaN(i)){
        alert("please enter valid phone number");
        return false;
    }else if(j == null || j ==""){
        alert("please enter first name");
        return false;
    }else if(k == null || k==""){
     alert("please enter lastname");
     return false;
    }else if(l== null || l==""){
        alert("please enter ID number");
        return false;
         }else if(isNaN(l)){
            alert("please enter valid ID number");
            return false;
     }else if(q == null || q ==""){
        alert("please enter phone number");
        return false;
     }else if(isNaN(q)){
        alert("please enter valid phone number");
        return false;
     }else{
         return true;
     }
}