<?php

    include_once ("../app_code/authentication.php");

    session_start();

    $authenticator = new Authenticator();

   if($authenticator->IsAdmin() == false)
   {
       header( 'Location: adminlogin.php' );
   }
   else
   {
       include_once("header.php");
       include ("../app_code/folder_browser.php");

        $folderBrowser = new FolderBrowser();

        $folders = $folderBrowser->GetFolders("../Auctions");

        echo "\r\n<div class='container'>";
        echo "\r\n   <div class='row'>";
        echo "\r\n      <div class='container'>";
        echo "\r\n         <div class='panel'>";
        echo "\r\n            <h1>Active Auctions</h1><br/>";
        echo "\r\n            <a href='addauction.php' class='small nice blue button'>ADD AUCTION</a>";
        echo "\r\n         </div>";
        echo "\r\n      </div>";
        echo "\r\n   </div>";

        $auctionCount = 1;
        foreach($folders as $folder)
        {
            $auctionId = $folderBrowser->GetLeafFolder($folder);
            echo "\r\n   <div class='row'>";
            echo "\r\n     <div class='six columns>";
            echo "\r\n         <div class='row'>";
            echo "\r\n            <div class='two columns'>";
            echo "\r\n                <img src='../images/cash_register_small.png' alt='small cash register image'/>";
            echo "\r\n            </div>";
            echo "\r\n            <div class='container'>";
            echo "\r\n               <div class='panel'>";
            echo "\r\n                   <h3>AUCTION {$auctionCount}: " . strtoupper( $auctionId ) . "</h3><br>";
            echo "\r\n                   <p>This is a simple explanation of this auction. There could be longer descriptions in relation to this description. This is just a short example of what is possible.</p>";
            echo "\r\n                   <p><strong>Scheduled for:</strong> 20 June 2012 7:00PM</p>";
            echo "\r\n                   <a class=\"small nice blue button\" href=\"auctiondetails.php?auction={$auctionId}\">View Details for {$auctionId}</a>";
            echo "\r\n               </div>";
            echo "\r\n            </div>";
            echo "\r\n         </div>";
            echo "\r\n     </div>";
            echo "\r\n     <div class='four columns'></div>";
            echo "\r\n   </div>";
            $auctionCount++;
        }

         echo "</div>";

       include_once("footer.php");
    }
?>
