<?php
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
      <title>Sign up</title>
	  <link href="P6_Sign_up.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
      <h2><I>Daily Fresh</I></h2>
      <form action="P6_register.php" method="POST">
	    <p style="padding-left:220px;">Already have an account? <a href="P5_Sign_in.html">Sign in</a></p>
		<h3>Create new account</h3>
	    <p>*Required fields</p>
		<label>Title</label><br/>
		<select id="title" name="title">
		    <option selected>Select title</option>
			<option value="Mr.">Mr.</option>
			<option value="Mrs.">Mrs.</option>
			<option value="Miss">Miss</option>
			<option value="Ms.">Ms.</option>
		</select> <br/>
		<label for="name" style="text-align:left;">*First Name</label><br/>
	    <input type="text" id="firstname" name="firstname"/><br/>
		<label for="name" style="text-align:left;">*Last Name</label><br/>
	    <input type="text" id="lastname" name="lastname"/><br/>
        <label for="email" style="text-align:left;">*Email</label><br/>
	    <input type="text" id="email" name="email"/><br/> 
		<label for="password" style="text-align:left;">*Password</label><br/>
		<input type="password" id="password1" name="password1"/><br/> 
		<label for="password" style="text-align:left;">*Confirm Password</label><br/>
		<input type="password" id="password2" name="password2"/><br/><br/><br/>
		<input type="checkbox" id="consent" value="consent" name="consent" style="width:5%;height:15px;"/>
		<label for="consent">I'm not a robot.</label><br/>
		<input type="submit" id="submit" value="Create account" onclick="validate();" style="width:80%;color:white;background-color:black;box-sizing:border-box;font-size:20px;"/>
		<input type="reset" id="reset" value="Reset" onclick="" style="width:80%;color:white;background-color:black;box-sizing:border-box;font-size:20px;"/>
	 </form>
	 <script type = "text/javascript">
	  function validate(){
	    var firstname = document.getElementById("firstname").value;
		var lastname = document.getElementById("lastname").value;
		var email = document.getElementById("email").value;
	    var p1 = document.getElementById("password1").value;
        var p2 = document.getElementById("password2").value;
		var consent = document.getElementById("consent");
        
      if (firstname != "" && lastname != "" && email != "" && p1 == p2 && consent.checked){
	    window.location = "Index.html";
        alert ("Create new account successfully");
		return true;
      }
	  if (firstname == "" || lastname == "" || email == "" || p1 == "" || p2 == ""){
        alert ("Required fields can not be blank");
		return false;
      }
	  if(p1 != p2){
        alert ("The two passwords you entered are not the same \n" + "Please re-enter both now");
        return false;
	  }
	  if(!consent.checked){
	    alert ("Please verify your identity by clicking the checkbox");
		return false;
      }
	  }
	  </script>
  </body>
</html>