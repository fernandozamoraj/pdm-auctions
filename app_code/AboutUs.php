<?php

include_once("SafeWebReader.php");
//html purifier code
if(file_exists($_SERVER['DOCUMENT_ROOT'] . 'PDMAuctions/app_code/htmlpurifier/library/HTMLPurifier.auto.php'))
    require_once $_SERVER['DOCUMENT_ROOT'] . 'PDMAuctions/app_code/htmlpurifier/library/HTMLPurifier.auto.php';
else if(file_exists($_SERVER['DOCUMENT_ROOT'] . 'app_code/htmlpurifier/library/HTMLPurifier.auto.php'))
    require_once $_SERVER['DOCUMENT_ROOT'] . 'app_code/htmlpurifier/library/HTMLPurifier.auto.php';
else
    require_once $_SERVER['DOCUMENT_ROOT'] . '/app_code/htmlpurifier/library/HTMLPurifier.auto.php';



class AboutUs{

    public $Header;
    public $Paragraphs = array();
    public $Street;
    public $City;
    public $State;
    public $Zipcode;
    public $CellPhone;
    public $OfficePhone;
    public $EmailWebMaster;
    public $EmailBusiness;
    public $PromotionHeader;
    public $PromotionParagraphs;

    function __construct()
    {
        $contents = "";
        if(file_exists("./custom_config/aboutus.dat"))
            $contents = file_get_contents("./custom_config/aboutus.dat");
        else
            $contents = file_get_contents("../custom_config/aboutus.dat");

        $jsonContents = json_decode($contents, true);



        $this->Header = $jsonContents["aboutus"]["header"];
        $this->Street = $jsonContents["address"]["street"];
        $this->City = $jsonContents["address"]["city"];
        $this->State = $jsonContents["address"]["state"];
        $this->Zipcode = $jsonContents["address"]["zipcode"];
        $this->CellPhone = $jsonContents["phone"]["cell"];
        $this->OfficePhone = $jsonContents["phone"]["office"];
        $this->EmailBusiness = $jsonContents["email"]["business"];
        $this->EmailWebMaster = $jsonContents["email"]["webmaster"];
        $paragraphs = $jsonContents["aboutus"]["paragraphs"];

        foreach ($paragraphs as $paragraph) {

            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);

            $clean_html = $purifier->purify($paragraph);

            $this->Paragraphs[] = $clean_html;
        }

        $this->PromotionHeader = $jsonContents["promotion"]["header"];

        $paragraphs = $jsonContents["promotion"]["paragraphs"];

        foreach ($paragraphs as $paragraph) {
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);

            $clean_html = $purifier->purify($paragraph);

            $this->PromotionParagraphs[] = $clean_html;
        }
    }

    public function  FromForm()
    {
            $safeWebReader = new  SafeWebReader();

            $this->Header = $safeWebReader->Get("header");
            $this->Paragraphs = Array();
            $this->Paragraphs[] = $safeWebReader->Get("paragraph1");
            $this->Paragraphs[] = $safeWebReader->Get("paragraph2");
            $this->Paragraphs[] = $safeWebReader->Get("paragraph3");
            $this->Paragraphs[] = $safeWebReader->Get("paragraph4");
    }

    public function Save()
    {
        $contents = array("aboutus" => array("header" => $this->Header, "paragraphs" => $this->Paragraphs),
                           "address" => array("street"=> $this->Street,"city" => $this->City, "state" => $this->State, "zipcode" => $this->Zipcode),
                           "phone" => array("cell" => $this->CellPhone, "office" => $this->OfficePhone),
                           "email" => array("webmaster" => $this->EmailWebMaster, "business" => $this->EmailBusiness),
                           "promotion" => array("header" => "WE BUY AND SELL EVERYTHING COMPRAMOS Y VENDEMOS TODO Y DE TODO!", "paragraphs" => array("blah", "blah")));

        $jsonContents = json_encode($contents, true);

        file_put_contents("../custom_config/aboutus.dat", $jsonContents);
    }

    public function GetFullAddress()
    {
        return$this->Street . " " . $this->City . ", " . $this->State . " " .  $this->Zipcode;
    }
}

?>