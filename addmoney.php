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
    <?php include('./top.php');  ?>
    <link rel="stylesheet" href="wallet.css">
    <script src="wallet.js"></script>
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
          
          <div>
<!-- Top fieldset with money displayed, loan button and "make money" button -->
<fieldset style="height:130px">
      <p><span style="position:relative;top:-2px;">Money:</span><br> <fieldset class="cash"><span style="font-size:55px;position:relative;top:-5px;">$</span><span style="padding-right:46px; font-size:60px; position:relative;top:-5px;" id="moneyamount">0</span></fieldset>&nbsp;&nbsp;&nbsp;<span style="position:absolute;top:118px;left:25px;color:#e6e720;">+ $<span id="mps">0</span> per second</span></p>

        <button onclick="clickPoint()" style="position:absolute;top:33px;right:255px;height:100px;border:1px solid #12891a;color:white;font-size:20pt;padding:10px;padding-top:15px;width:200px;" class="clickpointz">Make
            Money<br><span style="font-size:10pt;position:relative;top:-3px;">+<span id="populationamount">1</span> per
                click</span></button>

        
    </fieldset>


<!-- Extra statistics -->
    <fieldset style="margin-top:30px;padding:0px;">
      <table cellpadding="0" style="position:relative;left:0px;">
        <tr>
          <th class="management">POPULATION</th>
          
          <th class="management">INDUSTRY</th>
          
          <th class="management">COMMERCIAL</th>
          
          <th class="management" style="border-right:0px;">TOURISM</th>
        </tr>
        <tr>
          <td class="managementa">Increases money per click</th>
          
          <td class="managementa">Increases money per second</th>
          
          <td class="managementa">Increases money per second</th>
          
          <td class="managementa" style="border-right:0px;">Increases population over time</th>
        </tr>
        <tr>
          <td class="management">
            <button onclick="upgradeMPC();" class="population">Increase Population<br><span id="clickercost">Cost: $50<span></button>
            
            <button onclick="buyHouse();" class="house">Buy House<br><span id="housecost">Cost: $750<span></button>
              
            <button onclick="buyApartment();" class="apartment">Buy Apartment<br><span id="housecost">Cost: $5000<span></button>
            
          </td>
          
          <td class="management">
            <button onclick="buyFactWorker();" class="factoryworker">Hire Worker<br><span id="factoryWorkerCost">Cost: $75<span></button>
            
            <button onclick="buyFactory();" class="factory">Buy Factory<br><span id="factorycost">Cost: $1000<span></button>
              
            <button onclick="buyFactory();" class="distribution">Buy Distribution Center<br><span id="factorycost">Cost: $25000<span></button>
            
              </td>
          
          <td class="management">
              <button onclick="buyEmployee();" class="employee">Hire Employee<br><span id="employeeCost">Cost: $750<span></button>
                
              <button onclick="buyEmployee();" class="store">Buy Store<br><span id="employeeCost">Cost: $10000<span></button>
                
          <button onclick="buyDistrict();" class="mall">Buy Shopping Mall<br><span id="districtCost">Cost: $75000<span></button>
            
            
              </td>
          
          <td class="management" style="border-right:0px;">
            <button onclick="buyEmployee();" class="tourguide">Hire Tour Guide<br><span id="employeeCost">Cost: $7500<span></button>
              
              <button onclick="buyEmployee();" class="hotel">Buy Hotel<br><span id="employeeCost">Cost: $25000<span></button>
                
          <button onclick="buyDistrict();" class="monument">Construct Monument<br><span id="districtCost">Cost: $150000<span></button>
            </td>
       </tr>
                
        
      </table>
</div>
         

         
      </div>
    </div>

    <div class="sidebar-overlay"></div>
  </body>
</html>
