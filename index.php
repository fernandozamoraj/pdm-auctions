<?php
  include_once("header.php");
  include_once("./app_code/AboutUs.php");
  include_once("./app_code/Services.php");
  $aboutUs = new AboutUs();
?>


<div class="container">
    <h3>
        <?php echo $aboutUs->PromotionHeader ?>
    </h3>
</div>

<?php
$services = new Services();


echo "\r\n<div class='container'>";

    echo "\r\n    <div class='row'>";

        $count = 1;

        foreach ($services->Services as $service) {

            echo "\r\n          <div class='four columns'>";

                echo "                  <div class='panel'>";
                if($service->image != "")
                    echo "\r\n                 <img src='./custom_config/images/{$service->image}' alt='{$service->image}'/>";

                echo "\r\n                 <a class='medium button' href='services.php'>All Services</a>";
                echo "\r\n                 <h4>{$service->header}</h4>";
                echo "\r\n                 <p>{$service->description}</p>";
                echo "\r\n              </div>";
                echo "\r\n           </div>";

            $count++;
            if($count == 4)
            break;
        }

        echo "\r\n   </div>";
    echo "\r\n</div>\r\n";
?>




<?php
   include_once("footer.php");
?>