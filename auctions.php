<?php
$pageTitle = "Auctions";

include_once("header.php");

include ("./app_code/folder_browser.php");

$folderBrowser = new FolderBrowser();

$folders = $folderBrowser->GetFolders("./Auctions");

echo "<div class='container'>";
    echo "<h1>Active Auctions</h1>";
    echo "</div>";

$auctionCount = 1;
foreach($folders as $folder)
{
$auctionId = $folderBrowser->GetLeafFolder($folder);
echo "<div class=\"row-fluid\">";

            echo "  <div class='span4 well'>";
    echo "      <h1>" . strtoupper( $auctionId ) . "</h1>";
    echo "      <p>This is a simple explanation of this auction. There could be longer descriptions in relation to this description. This is just a short example of what is possible.</p>";
    echo "      <p><strong>Scheduled for:</strong> 20 June 2012 7:00PM</p>";
    echo "      <a class=\"btn btn-primary btn-large\" href=\"auctiondetails.php?auction={$auctionId}\">View Details for {$auctionId}</a>";
    echo "  </div>";
            echo "</div>";
            echo "<div class='row-fluid'><div class='span5'>.</div></div>";
            echo "<div class='row-fluid'><div class='span5'>.</div></div>";
            $auctionCount++;
        }

include_once("footer.php");
?>