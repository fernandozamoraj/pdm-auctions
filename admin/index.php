<?php
include_once ("../app_code/authentication.php");

session_start();

$authenticator = new Authenticator();
$authenticator->SetUserCredentials();

if($authenticator->IsAdmin() == false)
{
    header( 'Location: adminlogin.php' ) ;
}
else
{
    include_once("header.php");
}
?>

<div class="container">
    <img src="../images/gear2.png" alt="Gear Image" />
    <h1>PDM Auctions Administrator Menu</h1>
    <p>Select one of the menu options above to perform the indicated administrative function</p>
    <p>Select any of the options from the menu above to control the content in that particular area</p>
    <h1>The areas below are all working</h1>
    <p>Feel free to give them a try.</p>
    <ul>
        <li>
            About - Edit your about information then visit the <a href="../aboutus.php">about page</a> to view it.
        </li>
        <li>Auctions - View the current auctions</li>
        <li>Add Auction - Upload a zip file with jpg images and then view it in your auctions</li>
    </ul>
</div>

<?php include_once("footer.php") ?>