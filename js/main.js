function validateForm()
{
var x = document.forms["myForm"]["user_name"].value;
if (x == null || x == "")
	{
	alert("Hello, Mr/Ms...?");
	return false;
	}
var x = document.forms["myForm"]["user_email"].value;
var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");
if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
	{
  
	alert("E-mail address isn't valid");
	return false;
	}
var x = document.forms["myForm"]["user_message"].value;
	if (x == null || x == "")
		{
		alert("What do you like to tell us?");
		return false;
		}
}