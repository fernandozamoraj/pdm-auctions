
<?php
global $pageTitle;

$pageTitle = "About Us";

include_once("header.php");
include_once("./app_code/AboutUs.php");

$aboutUs = new AboutUs();

echo "\r\n<div class='container'>\r\n   <h1>{$aboutUs->Header}</h1>";

    foreach ($aboutUs->Paragraphs as $paragraph) {
        echo "\r\n    <div class='row-fluid'>\r\n      <div class='span5'><div class='well'></br><p>{$paragraph}</p></div> </div>\r\n   </div>";
    }

    echo "\r\n</div>\r\n";

    include_once("footer.php");
?>

