<?php
include './config.php';
if (isset($_POST['submit'])) {
     if (empty($_POST["username"])) {
          echo "<script language='javascript'> alert ('Please enter your Username!');</script>";
     } else if (empty($_POST["password"])) {
          echo "<script language='javascript'> alert ('Please enter your Password!');</script>";
     } else {
          $uname = $_POST["username"];
          $upass = $_POST["password"];
          $sql = "SELECT * FROM admin WHERE username='$uname' AND password='$upass'";
          $result = $conn->query($sql);
          if ($row = mysqli_fetch_assoc($result)) {
               session_start();
               $_SESSION['id'] = $row['id'];
               $_SESSION['username'] = $row['username'];
               $_SESSION['name'] = $row['name'];
               echo "<script language='javascript'> alert ('Login succesfully!');</script>";
               header("location:dashboard.php");
          } else {
               echo "<script language='javascript'> alert ('Invalid Username or Password!'); window.history </script>";
               echo "<p style='color:#ff3d69;'>Invalid Username or Password Please try again.</p><br/>";
          }

     }
}
elseif(isset($_POST['register'])){
     header("location:register.php");
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
  <body>
    <div class="container">
      <div class="screen">
        <div class="screen__content">
          <form method="POST" class="login">
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
              <i class="login__icon fas fa-lock"></i>
              <input
                type="password"
                name="password"
                class="login__input"
                placeholder="Password"
              />
            </div>
            <div class="flex">
        <div id="submit">
        <input name="submit" type="submit" value="Log-In">
             </div>
             <div id="submit">
        <input name="register" type="submit" value="Register Here">
             </div>
        </div>
            <!-- <input type="submit" value="Log In Now " name="submit" class="button login__submit">
              <span class="button__text">Log In Now</span>
              <i class="button__icon fas fa-chevron-right"></i>
            </input> -->
          </form>
          <!-- <div class="register">
            <a href="register.php" class="button login__submit">
              <span class="button__text">Register </span>
              <i class="button__icon fas fa-chevron-right"></i>
            </a>
          </div> -->
          <div class="social-login">
            <h3>log in via</h3>
            <div class="social-icons">
              <a href="#" class="social-login__icon fab fa-instagram"></a>
              <a href="#" class="social-login__icon fab fa-facebook"></a>
              <a href="#" class="social-login__icon fab fa-twitter"></a>
            </div>
          </div>
          <div class="forgot">
            <a href="register.php" class="button forget">
              <span class="button__text">Forgot Password </span>
              <i class="button__icon fas fa-chevron-right"></i>
            </a>
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
