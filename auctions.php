<?php
$pageTitle = "Auctions";

include_once("header.php");

include ("./app_code/folder_browser.php");

$folderBrowser = new FolderBrowser();

$folders = $folderBrowser->GetFolders("./Auctions");

echo "\r\n<div class='container'>";
echo "\r\n   <div class='row'>";
echo "\r\n     <div class='span12'>";
if(count($folders) > 2)
    echo "\r\n        <h2>Active Auctions</h2>";
else
    echo "\r\n        <h2>No Active Auctions</h2>";
echo "\r\n     </div>   ";
echo "\r\n   </div>";

$auctionCount = 1;
foreach($folders as $folder)
{
    $auctionId = $folderBrowser->GetLeafFolder($folder);

    if(strtoupper($auctionId) === "ZIPPED" || strtoupper($auctionId) === "UNZIPPED")
        continue;

    echo "\r\n   <div class='row'>";
    echo "\r\n      <div class='span4 offset-by-four'>";
    echo "\r\n         <div class='panel'>";
    echo "\r\n            <h3>" . strtoupper( $auctionId ) . "</h3>";
    echo "\r\n            <p>This is a simple explanation of this auction. There could be longer descriptions in relation to this description. This is just a short example of what is possible.</p>";
    echo "\r\n            <p><strong>Scheduled for:</strong> 20 June 2012 7:00PM</p>";
    echo "\r\n            <a class='btn btn-large' href='auctiondetails.php?auction={$auctionId}'>View Details for {$auctionId}</a>";
    echo "\r\n          </div>";
    echo "\r\n      </div>";
    echo "\r\n      <div class='span4'></div>";
    echo "\r\n    </div>";

    $auctionCount++;
}

echo "\r\n</div>";

include_once("footer.php");
?>