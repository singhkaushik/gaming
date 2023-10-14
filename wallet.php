<?php
session_start(); 
if (isset($_SESSION['username'])) {
    $user_id = $_SESSION['username'];
	include('config.php');
	$sql="SELECT * FROM admin where username='$user_id'";
	$query = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($query)) {
    $uid = $row['id'];
		$username = $row['name'];
		$useremail = $row['email'];
	}
} else {
    header("Location: index.php"); // Redirect the user to login
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/dashboard.css" />
    <?php include('./top.php');  ?>
  </head>
  <body>
    <div class="main-wrapper">
      <?php include('./sidebar.php');  ?>
      <div class="page-wrapper" style="min-height: 502px">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <div class="page-sub-header">
                  <h3 class="page-title">Welcome <?php echo $username;?>! </h3>
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Wallet</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php
                      $wallet = "SELECT * from wallet where user_id=$uid";
                      $result_set = mysqli_query($conn,$wallet);
                      while ($row = mysqli_fetch_array($result_set)){
                          $total=$row["total"];
                            }
                      ?> 
          <div class="row">
            <div class="text-center"><h4>Balance: ₹ <?php echo $total; ?></h4></div>
            <div class="my-3">
                <input type="text" name="" id="wallet">
            </div>
            <div class="col-xl-4 col-sm-4  d-flex">
                <div class="card-body">500</div>
                <div>1000</div>
                <div>1500</div>
                <div>500</div>
                <div>1000</div>
                <div>1500</div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sidebar-overlay"></div>
  </body>
</html>
