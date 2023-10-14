<?php
include './config.php';
if (isset($_POST['register'])) {
  if (empty($_POST["username"])) {
    echo "<script language='javascript'> alert ('Please enter your Username!');</script>";
  } else if (empty($_POST["name"])) {
    echo "<script language='javascript'> alert ('Please enter your Full Name!');</script>";
  } 
  else if (empty($_POST["email"])) {
    echo "<script language='javascript'> alert ('Please enter your email!');</script>";
  } 
  else if (empty($_POST["password"])) {
    echo "<script language='javascript'> alert ('Please enter your Password!');</script>";
  } 
  else if (empty($_POST["confirmpassword"])) {
    echo "<script language='javascript'> alert ('Please enter your Confirm Password!');</script>";
  } 
 
  else {
    $uname = $_POST["username"];
    $name = $_POST["name"];
    $upass = $_POST["password"];
    $uemail = $_POST["email"];
    $sql="INSERT INTO `admin` (`username`, `name`, `email`, `password`) VALUES ('$uname', '$name', '$uemail', '$upass');";
    $result=mysqli_query($conn, $sql);
    if($result){
      // echo "<script language='javascript'> alert ('
      $message='You are Registered Successfully!';
    // );</script>";
      echo "<script>alert('$message');
      window.location.href=`./login.php`
      </script>";
    }

  }
} else if (isset($_POST['submit'])) {
  header("location:login.php");
}
     ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="./assets/style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
  </head>
  <script> 
  function matchpass() {
    const pass = document.getElementById("pswd").value; 
    const cpw=document.getElementById("confirmpassword").value;
    if(pass !== cpw)
    {
      document.getElementById("message").innerHTML = "Password and Confirm Password not matched!"; 
    }
    else if(pass === cpw){
      document.getElementById("message").innerHTML = "";
    }

  } 
function verifyPassword() {  
  const pw = document.getElementById("pswd").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "Password length must not exceed 15 characters";  
     return false;  
  } else {  
    document.getElementById("message").innerHTML = ""; 
    //  alert("Password is correct");  
  }  

}  
</script>  
  <body>
    <div class="container">
      <div class="screen">
        <div class="screen__content">
          <form method="POST" class="registration">
            <div class="login__field">
              <i class="login__icon fas fa-user"></i>
              <input
                type="text"
                name="username"
                class="login__input"
                placeholder="+91 9999999999"
              />
            </div>

            <div class="login__field">
              <i class="login__icon fas fa-user"></i>
              <input
                type="text"
                name="name"
                class="login__input"
                placeholder="Full Name"
              />
            </div>
            <div class="login__field">
              <i class="login__icon fas fa-user"></i>
              <input
                type="text"
                name="email"
                class="login__input"
                placeholder="xyz@gmail.com"
              />
            </div>
            <div class="login__field">
              <i class="login__icon fas fa-lock"></i>
              <input
              id="pswd"
              onchange="verifyPassword()"
                type="password"
                name="password"
                class="login__input"
                placeholder="Password"
              />
              <p id="message"></p>
            </div>
            <div class="login__field">
              <i class="login__icon fas fa-lock"></i>
              <input
                type="password"
                onchange="matchpass()"
                name="confirmpassword"
                id="confirmpassword"
                class="login__input"
                placeholder="Confirm Password"
              />
            </div>
            <div class="flex">
        <div id="submit">
        <input name="register" id="submitbtn" type="submit" value="Register Now">
             </div>
             <div id="submit">
        <input name="submit" type="submit" value="Login Here">
             </div>
        </div>
            <!-- <a href="login.php" class="button login__submit">
              <span class="button__text">Register Now</span>
              <i class="button__icon fas fa-chevron-right"></i>
            </a> -->
          </form>
          <div class="forgot">
            <a href="login.php" class="button login__submit">
              <span class="button__text">Login </span>
              <i class="button__icon fas fa-chevron-right"></i>
            </a>
          </div>
          <div class="social-login">
            <h3>log in via</h3>
            <div class="social-icons">
              <a href="#" class="social-login__icon fab fa-instagram"></a>
              <a href="#" class="social-login__icon fab fa-facebook"></a>
              <a href="#" class="social-login__icon fab fa-twitter"></a>
            </div>
          </div>
        </div>

        <div class="screen__background">
          <span
            class="screen__background__shape screen__background__shape4"
          ></span>
          <span
            class="screen__background__shape screen__background__shape3"
          ></span>
          <span
            class="screen__background__shape screen__background__shape2"
          ></span>
          <span
            class="screen__background__shape screen__background__shape1"
          ></span>
        </div>
      </div>
    </div>
  </body>
</html>
