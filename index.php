<?php
  include_once("header.php");
  include_once("./app_code/AboutUs.php");
  include_once("./app_code/Services.php");
  $aboutUs = new AboutUs();
?>


       <h3>
           <?php echo $aboutUs->PromotionHeader ?>
       </h3>

<?php
$services = new Services();


echo "\r\n   <div class='container'>";

    echo "\r\n       <div class='row'>";

        $count = 1;

    echo "\r\n             <div class='pdm-services'>";
        foreach ($services->Services as $service) {

                echo "\r\n             <div class='span4'>";

                if($service->image != "")
                    echo "\r\n                    <img src='./custom_config/images/{$service->image}' alt='{$service->image}'/>";

                echo "\r\n                    <a class='btn btn-primary btn-large' href='services.php'>All Services</a>";
                echo "\r\n                    <h4>{$service->header}</h4>";
                echo "\r\n                    <p>{$service->description}</p>";
                echo "\r\n             </div>";

            $count++;
            if($count == 4)
            break;
        }
    echo "\r\n           </div>";
    echo "\r\n      </div>";
    echo "\r\n   </div>\r\n";
?>




<?php
   include_once("footer.php");
?>