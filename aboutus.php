
<?php
global $pageTitle;

$pageTitle = "About Us";

include_once("header.php");
include_once("./app_code/AboutUs.php");

$aboutUs = new AboutUs();

echo "\r\n<div class='container'>";
echo "\r\n   <div class='row'>";
echo "\r\n       <div class='span8'>";
echo "\r\n            <h3>{$aboutUs->Header}</h3>";
echo "\r\n       </div>";
echo "\r\n   </div>";


foreach ($aboutUs->Paragraphs as $paragraph) {
        echo "\r\n    <div class='row'>";
        echo "\r\n         <div class='span8'>";
        echo "\r\n                    </br><p>{$paragraph}</p>";
        echo "\r\n         </div>";
        echo "\r\n    </div>";
        echo "\r\n";
    }

    echo "\r\n</div>\r\n";

    include_once("footer.php");
?>

