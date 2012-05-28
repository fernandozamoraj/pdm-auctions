
<?php
global $pageTitle;

$pageTitle = "About Us";

include_once("header.php");
include_once("./app_code/Services.php");

$services = new Services();

echo "\r\n<div class='container'>";
echo "\r\n   <div class='row'>";
echo "\r\n       <div class='four columns'>";
echo "\r\n       </div>";
echo "\r\n       <div class='four columns'>";
echo "\r\n           <h1>Services</h1>";
echo "\r\n       </div>";
echo "\r\n       <div class='four columns'>";
echo "\r\n       </div>";
echo "\r\n   </div>";
echo "\r\n   <div class='row'>";

$count = 1;

foreach ($services->Services as $service) {

    echo "\r\n          <div class='four columns'>";
    echo "\r\n             <div class='panel'>";
    if($service->image != "")
        echo "\r\n                 <img src='./custom_config/images/{$service->image}' alt='{$service->image}'/>";
    echo "\r\n                 <h4>{$service->header}</h4>";
    echo "\r\n                 <p>{$service->description}</p>";
    echo "\r\n              </div>";
    echo "\r\n           </div>";

    //Close the row and start a new one
    if($count % 3 == 0)
    {
        echo "\r\n      </div>";
        echo "\r\n      <div class='row'>";
    }

    $count++;
}

echo "\r\n   </div>";
echo "\r\n</div>\r\n";

include_once("footer.php");
?>