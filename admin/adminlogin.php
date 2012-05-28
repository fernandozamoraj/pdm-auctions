<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDM Auctions Administration Page</title>
    <link type="text/css" rel="stylesheet" href="../twitterbs/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="../twitterbs/css/bootstrap-responsive.css"/>
</head>
<body>
<div class="container">
    <h1>PDM Auctions</h1>
    <p>Aministrator Login Page</p>
</div>
<?php

echo "<div class='container'>";

echo "<form action='index.php' method='get\'>";
echo "<br/>User Name:   <br/><input type=\"text\" name=\"user\"/>";
echo "   <input type='hidden' name='submit'>";
echo "     <br/><br/><button type='submit' name='submit' class='btn btn-primary''>Submit</button>";
echo "</form>";
echo "</div>";
?>

<div class="container">
    <p>If you have forgotten your password please contact your system administrator</p>
    <img src="../images/gear2.png" alt="Gear Image" />
</div>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="../twitterbs/js/bootstrap.js"></script>
<script type="text/javascript" src="../scripts/jquery-1.5.1.js"></script>

</body>
</html>