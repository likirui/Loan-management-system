function validateForm(){
	var x = document.forms["form_1"]["fname"].value;
if (x == null || x == "" ){
    	alert("please enter fname");
        return false;
}
}