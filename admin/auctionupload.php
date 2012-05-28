<?php

//got code from this site for zipping http://www.internoetics.com/2011/05/17/unzip-a-file-with-php/

include_once("../app_code/SafeWebReader.php");
include_once("header.php");


$safeWebReader = new SafeWebReader();

if ($_FILES["zipfile"]["error"] > 0)
{
    echo "Error: " . $_FILES["zipfile"]["error"] . "<br />";
}
else
{
    echo "Upload: " . $_FILES["zipfile"]["name"] . "<br />";
    echo "Type: " . $_FILES["zipfile"]["type"] . "<br />";
    echo "Size: " . ($_FILES["zipfile"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["zipfile"]["tmp_name"];


    if (file_exists("zipped/" . $_FILES["zipfile"]["name"]))
    {
        echo $_FILES["zipfile"]["name"] . " already exists. ";
    }
    else
    {
        move_uploaded_file($_FILES["zipfile"]["tmp_name"],
            "../Auctions/zipped/" . $_FILES["zipfile"]["name"]);
        echo "\r\nStored in: " . "../Auctions/zipped/" . $_FILES["zipfile"]["name"];
    }

    $fileName = $_FILES["zipfile"]["name"];

    $auctionName = basename("../Auctions/zipped/{$fileName}", ".zip");

    if($auctionName == "")
    {
        $auctionName = "unzipped";
    }

    $zip = new ZipArchive();

    $res = $zip->open("../Auctions/zipped/{$fileName}");

    if ($res === TRUE) {

        $newDirectory = "../Auctions/{$auctionName}/";

        if(!file_exists($newDirectory))
        {
            mkdir($newDirectory);
            $zip->extractTo($newDirectory);
            $zip->close();
            echo "<br/> Unzip was successful";
            echo "<br><a href='auctiondetails.php?auction=$auctionName' class='btn-large'>View Auction</a>";

        }
        else
        {
            echo "<br/>Directory {$newDirectory} already exists";
        }

     }
     else{
	        echo "<br/>Unzip was not successful";
     }
}
?>
</body>
</html>