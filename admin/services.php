<?php

include_once ("../app_code/authentication.php");
include_once("../app_code/Services.php");

session_start();

$authenticator = new Authenticator();

if($authenticator->IsAdmin() == false)
{
    header( 'Location: adminlogin.php' );
}
else
{
    include_once("header.php");
    $errorMessage = "";

    $services = new Services();

    if(isset($_POST['submit']))
    {
        $services = new Services();

        $services->FromForm();

        $services->Save();

        echo "<h1>Data Saved...</h1>";

        header( 'Location: successfulsave.php' );
    }
    ?>

<div class="container">
    <div class="row">
        <div class="twelve columns">
            <form class="nice" action="" method="post">
                <div class="row-fluid">
                    <h1>Services</h1>
                    <p class="span4">Fill out the information below and submit. This information will become the information in the Services page viewed by your customer.</p>
                </div>

                <?php
                $serviceCount = 1;
                foreach ($services->Services  as $service) {

                    echo "\r\n             <label>Header{$serviceCount}</label>";
                    echo "\r\n             <input type='text' name='header{$serviceCount}' placeholder='Enter Header' value='{$service->header}'/>";

                    echo "\r\n             <label>Image{$serviceCount}</label>";
                    echo "\r\n             <input type='text' name='image{$serviceCount}' placeholder='Enter Image Name' value='{$service->image}'/>";

                    echo "\r\n             <label>Description {$serviceCount}</label>";
                    echo "\r\n             <textarea class='large' cols='70' rows='8' name='description{$serviceCount}'>{$service->description}</textarea>";
                    $serviceCount++;
                }

                while($serviceCount < 5)
                {
                    echo "\r\n             <label>Header{$serviceCount}</label>";
                    echo "\r\n             <input type='text' name='header{$serviceCount}' placeholder='Enter Header'></input>";

                    echo "\r\n             <label>Image{$serviceCount}</label>";
                    echo "\r\n             <input type='text' name='image{$serviceCount}' placeholder='Enter Image Name'></input>";

                    echo "\r\n             <label>Description{$serviceCount}</label>";
                    echo "\r\n             <textarea class='large' cols='70' rows='8' name='description{$serviceCount}'></textarea>";
                    $serviceCount++;

                }
                ?>
                <input type="hidden" name="submit">
                <button name="submit" type="submit" class="nice medium button">Save changes</button>
                <button class="nice medium button">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?php
}
include_once("footer.php");
?>