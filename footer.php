<?php

 include_once("./app_code/AboutUs.php");

 $aboutUs = new AboutUs();
?>


        <div class="row main-menu">
            <div class="twelve columns">
                <ul class="nav-bar">
                    <li><a><?php echo $aboutUs->GetFullAddress(); ?></a></li>
                    <li><a><?php echo "Office " . $aboutUs->OfficePhone; ?></a></li>
                    <li><a><?php echo "Cell " . $aboutUs->CellPhone; ?></a></li>
                </ul>         
            </div>    
        </div>
    </div><!--End of main-->
<script src="./foundation3/javascripts/jquery.min.js"></script>
<script src="./foundation3/javascripts/jquery.reveal.js"></script>
<script src="./foundation3/javascripts/jquery.orbit-1.4.0.js"></script>
<script src="./foundation3/javascripts/jquery.customforms.js"></script>
<script src="./foundation3/javascripts/jquery.placeholder.min.js"></script>
<script src="./foundation3/javascripts/modernizr.foundation.js"></script>
<script src="./scripts/site-functions.js"></script>