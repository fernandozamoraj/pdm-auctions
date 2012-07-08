
<?php
global $pageTitle;

$pageTitle = "About Us";

include_once("header.php");
include_once("./app_code/AboutUs.php");

$aboutUs = new AboutUs();

echo "\r\n   <div class='row'>";
echo "\r\n       <div class='eight columns centered'>";
echo "\r\n            <h3>{$aboutUs->Header}</h3>";
echo "\r\n       </div>";
echo "\r\n   </div>";


foreach ($aboutUs->Paragraphs as $paragraph) {
        echo "\r\n    <div class='row'>";
        echo "\r\n         <div class='eight columns centered'>";
        echo "\r\n                    </br><p>{$paragraph}</p>";
        echo "\r\n         </div>";
        echo "\r\n    </div>";
        echo "\r\n";
    }


    include_once("footer.php");
?>


<script type="text/javascript">
            
            $(window).load(function() {
                PdmApp.setActiveLink("#aboutuslink");
            });
</script>

</body>
</html>