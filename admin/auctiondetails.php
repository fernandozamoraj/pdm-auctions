<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDM Auctions Administration Page</title>
    <link type="text/css" rel="stylesheet" href="../twitterbs/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="../twitterbs/css/bootstrap-responsive.css"/>
</head>
<body>
<?php

    include_once ("../app_code/authentication.php");

    session_start();

    $authenticator = new Authenticator();

   if($authenticator->IsAdmin() != true)
   {
       header( 'Location: adminlogin.php' );
   }
   else
   {
       include("../app_code/folder_browser.php");
       include("../app_code/auction_repo.php");
       include_once("header.php");

       $auctionRepo = new AuctionRepo();

        $auction = $_GET["auction"];

       $folderBrowser = new FolderBrowser();

       $filesList = $folderBrowser->GetImageFiles("../Auctions/" . $auction );

       echo "<div class='container-fluid'>";

       foreach($filesList as $tempfile)
       {

           $fullPath = "../Auctions/" . $auction . "/" . $tempfile;

           $auctionItem = $auctionRepo->GetItemDetails($fullPath);

           echo "  <div class='row-fluid'>";
           echo "     <div class='span2'><img src=\"{$fullPath}\" width='80%' height='80%' alt='auction item image'/></div>";
           echo "     <div class='span8'>";
           echo "       <div><p><h3>DESCRIPTION</h3></p><p>{$auctionItem->Description}</p></div>";
           echo "       <div><p><h3>Price:</h3></p><p>{$auctionItem->Price}</p></div>";
           echo "       <div><p><h3>Shipping:</h3></p><p>{$auctionItem->Shipping}</p></div>";
           echo "     </div>";
           echo "  </div>";
       }

       echo "</div>";

   }
?>
</body>
</html>