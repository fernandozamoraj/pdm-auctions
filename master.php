<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pagetitle ?></title>
    <link rel="stylesheet" type="text/css" href="css/site.css?version=2" />
</head>
<body>
<p>
    <img src="custom_config/images/pdmauctions2_rzhe.jpg" alt="PDM Auctions Logo Image"/>
</p>
<ul id="menu">
    <li><a href="index.php">Home Page</a></li>
    <li><a href="calendar.php">Calendar</a></li>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a href="services.php">Services</a></li>
</ul>

<?php
  echo $pagemaincontent;
?>

<div id="footer">
    <div id="address">322 E. Belmont Fresno, CA 93701</div>
    <div id="office-phone">559-268-7373</div>
    <div id="cell-phone">559-284-5934</div>
</div>
</body>
</html>
