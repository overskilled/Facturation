<!DOCTYPE html>
<html>
<head>
<title>sing-in</title>
<meta charset="utf-8">
<link rel="stylesheet" href="header.css">
</head>
<script>

    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<body>

<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!--form-->

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
    

      
      <a href="http://localhost/license-gl/singe-up.php"><h2 class="active">Sign up</h2></a>
  
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="loginIcon.png" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form action="" method="post">
      <input type="text"  class="fadeIn second" name="name" placeholder="Username/Email">
        <input type="text"  class="fadeIn third" name="pwd" placeholder="password">
        <input type="submit" class="fadeIn fourth." name="submit" value="sign In">
        
        
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        
      </div>
  
    </div>
  </div>

 
</body>
</html>