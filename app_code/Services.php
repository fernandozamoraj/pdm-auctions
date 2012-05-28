<?php

include_once("SafeWebReader.php");
//html purifier code
if(file_exists($_SERVER['DOCUMENT_ROOT'] . 'PDMAuctions/app_code/htmlpurifier/library/HTMLPurifier.auto.php'))
    require_once $_SERVER['DOCUMENT_ROOT'] . 'PDMAuctions/app_code/htmlpurifier/library/HTMLPurifier.auto.php';
else
    require_once $_SERVER['DOCUMENT_ROOT'] . 'app_code/htmlpurifier/library/HTMLPurifier.auto.php';


class Services{

    public $Services = array();

    function __construct()
    {
        $contents = "";
        if(file_exists("./custom_config/services.dat"))
            $contents = file_get_contents("./custom_config/services.dat");
        else
            $contents = file_get_contents("../custom_config/services.dat");

        $jsonContents = json_decode($contents, true);

        $Services = array();

        foreach ($jsonContents["services"] as $service ) {

            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);


            $tempService = new ServiceInfo();

            $tempService->header = $purifier->purify($service["header"]);
            $tempService->description = $purifier->purify($service["description"]);
            $tempService->image = $purifier->purify($service["image"]);

            $this->Services[] = $tempService;
        }
    }

    public function  FromForm()
    {
        $MaxServices = 20;
        $safeWebReader = new  SafeWebReader();

        $counter = 1;
        $this->Services = array();

        while(true)
        {
            if($counter == $MaxServices)
                break;

            $tempHeader = $safeWebReader->Get("header" . $counter);
            $tempDescription = $safeWebReader->Get("description" . $counter);
            $tempImage = $safeWebReader->Get("image" . $counter);

            if($tempHeader != "")
            {
                $tempService = new ServiceInfo();
                $tempService->header = $tempHeader;
                $tempService->description = $tempDescription;
                $tempService->image = $tempImage;

                $this->Services[] = $tempService;
            }

            $counter++;
        }
    }

    public function Save()
    {
        $contents = array("services" => $this->Services);

        $jsonContents = json_encode($contents, true);

        file_put_contents("../custom_config/services.dat", $jsonContents);
    }
}

class ServiceInfo
{
    public $header = "";
    public $description = "";
    public $image = "";
}

?>