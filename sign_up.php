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

<table>
  jfnbdb
</table>
<!--?php
require('dbconnect.inc.php');
if(isset($_POST['submit'])){
  $nom=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $pays=$_POST['pays'];
  $sql="INSERT INTO `utilisateurs` (`idutilisateurs`, `nom_utilisateur`, `email`, `password`, `pays`) VALUES (NULL, '$nom', '$email', '$password', '$pays')";
  $row= mysqli_query($connect,$sql);
  if(!$row){
    echo'veuillez verifier vos informations inserees';
  }

  else{
    header("location:home.php");
  }
}

?-->
<body>

<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="#home" class="active" >Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
        

          
          <a href="signe-in.php"><h2 class="active">Sign in </h2></a>
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="loginIcon.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <div class="signup-form-form">
          <form action="" method="post"> 
            <input type="text" id="email" class="fadeIn second" name="name" placeholder="nom utilisateur">
            <input type="email" id="email" class="fadeIn third" name="email" placeholder="email">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="text" id="password" class="fadeIn third" name="pays" placeholder="pays">
            <input type="submit" class="fadeIn fourth." name="submit" value="Sign Up">
          </form>

 
          <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                }
                if ($_GET["error"] == "invaliduid") {
                    echo "<p>Choose a propre username</p>";
                }
                if ($_GET["error"] == "invalidemailt") {
                    echo "<p>Enter a valid email </p>";
                }
                if ($_GET["error"] == "passworddontmatcht") {
                    echo "<p>Password dont match</p>";
                }
                if ($_GET["error"] == "usernametaken") {
                    echo "<p>The username is already taken choose a different one</p>";
                }
                if ($_GET["error"] == "statamentfailed") {
                    echo "<p>Something went wrong try again</p>";
                }
                if ($_GET["error"] == "none") {
                    echo "<p>Sign up successful</p>";
                }
                
            }
        ?>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
            
          </div>
      
        </div>
      </div>

</body>
</html>