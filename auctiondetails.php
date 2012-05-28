<?php

    include("./app_code/auction_repo.php");
    include_once("header.php");
    include_once("./app_code/folder_browser.php");


    $auctionRepo = new AuctionRepo();

    $auction = $_GET["auction"];

    $folderBrowser = new FolderBrowser();

    $filesList = $folderBrowser->GetImageFiles("./Auctions/" . $auction );

    echo "<div class='container'>";

    foreach($filesList as $tempfile)
    {

        $fullPath = "./Auctions/" . $auction . "/" . $tempfile;

        $auctionItem = $auctionRepo->GetItemDetails($fullPath);

        echo "  <div class='row'>";
        echo "     <div class='four columns'><img src='{$fullPath}' alt='auction item image'/></div>";
        echo "     <div class='eight columns'>";
        echo "       <p><h3>DESCRIPTION</h3></p><p>{$auctionItem->Description}</p>";
        echo "       <p><h3>Price:</h3></p><p>{$auctionItem->Price}</p>";
        echo "       <p><h3>Shipping:</h3></p><p>{$auctionItem->Shipping}</p>";
        echo "     </div>";
        echo "  </div>";
    }

    echo "</div>";

   include_once("footer.php");
?>