function validate()
{
	var username = document.getElementById("username").value;
	var useremail = document.getElementById("useremail").value;
	var userpassword = document.getElementById("userpassword").value;
	var userconfirmpassword = document.getElementById("userconfirmpassword").value;

	if(username=="")
	{
		alert("All fields are mandatory. Please fill username");
		return false;
	}
	if(useremail=="")
	{
		alert("All fields are mandatory. Please fill Email");
		return false;
	}
	if(userpassword=="")
	{
		alert("All fields are mandatory. Please fill Password");
		return false;
	}
	if(userconfirmpassword=="")
	{
		alert("All fields are mandatory. Please fill Confirm Password");
		return false;
	}
	if(!/^[A-Za-z ]+$/.test(username))
	{
		alert("A name should only alphabets");
		return false;
	}
	if(userpassword!==userconfirmpassword)
	{
		alert("Passwords do not Match.");
		return false;
	}

}