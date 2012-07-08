<?php
  include_once("header.php");
  include_once("./app_code/AboutUs.php");
  include_once("./app_code/Services.php");
  include_once("./app_code/folder_browser.php");
  $aboutUs = new AboutUs();
  $folderBrowser = new FolderBrowser();
?>


       <h3>
           <?php echo $aboutUs->PromotionHeader ?>
       </h3>


               <div class="row">
                    <div class="twelve columns">
                        <div id="featured">
                            
                            <?php
                               foreach($folderBrowser->GetFiles('./promo-images/') as $image)
                               {
                                   if($image == "." || $image == "..")
                                       continue;
                                   
                                   echo("\r\n                    <div><img src='./promo-images/{$image}' /></div>");
                               }
                            ?>
                        </div>                
                    </div>    
                </div>

 


<?php
   include_once("footer.php");
?>

<script type="text/javascript">
            
            $(window).load(function() {
                PdmApp.setActiveLink("#homelink");
                
                $('#featured').orbit({
                    animation: 'fade',
                    animationSpeed: 1200
                });
            });
</script>

</body>
</html>