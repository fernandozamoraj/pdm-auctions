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
    <h1>Your Data Was Saved Succesfully</h1>
</div>

<?php include_once("footer.php") ?>
