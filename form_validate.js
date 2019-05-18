<!DOCTYPE html>
<html>
<head>
	<title>java</title>
</head>
<body>
	<script language="javascript">
	function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("First name must be filled out");
        return false;
    }
}
</script>
 <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
Name: <input type="text" name="fname"><br>
<input type="submit" value="Submit">
</form>
