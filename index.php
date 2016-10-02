

<?php 

// Define your username and password 
$username = "admin"; 
$password = "password"; 



if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 

?> 

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">

</head>

  <body>

    <div class="login">
  <h2>Log In</h2>
 <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
  <fieldset>
    <input type="text" title="Enter your Username" name="txtUsername" value="admin" /> 
  	<input type="password" title="Enter your password" name="txtPassword" value="password" />
  </fieldset>
  
  <input type="submit" name="Submit" value="Log In" />
  </form> 
  <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="#">Sign Up &rarr;</a>
  </div>
</div>
    
</body>
</html>

<?php 

} 
else { 

?> 

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TechTwice.co</title>

<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="buttons/buttons.css" />
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 588px;
	top: 34px;
}
</style>
</head>

<body>

<div id="buttonContainer">
<div style="text-align:center; color:#036; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:800; font-size:25px; ">Please Choose Menu</div>
  <ul>
  <li><a href="browser.html" class="button big blue">File Browser</a></li>
  <li><a href="gallery.html" class="button big green">Gallery</a></li>
  <li><a href="upload.html" class="button big orange">File Upload</a></li>
  <li><a href="#" class="button big gray">Home</a></li>
</ul>
    
    
</div>
<div id="apDiv1"><img src="css/techtwice.png"/></div>

<div id="footer">
  <div class="tri"></div>
	Designed by <a href="http://www.techtwice.co/me" target="_blank">TechTwice</a> Web: <a href="http://www.techtwice.co" target="_blank"> TechTwice.co</a>
</div>

    
</body>
</html>
 

<?php 

} 

?> 