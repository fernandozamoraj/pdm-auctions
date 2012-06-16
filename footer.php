<?php

 include_once("./app_code/AboutUs.php");

 $aboutUs = new AboutUs();
?>


        <div class="navbar navbar-form footer">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#"><?php echo $aboutUs->GetFullAddress(); ?></a>
                    <a class="brand" href="#"><?php echo "Office " . $aboutUs->OfficePhone; ?></a>
                    <a class="brand" href="#"><?php echo "Cell " . $aboutUs->CellPhone; ?></a>
                </div>
            </div>
        </div>
    </div><!--End of main-->
</div> <!-- End of wrapper-->
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="./twitterbs/js/bootstrap.js"></script>
<script type="text/javascript" src="./scripts/jquery-1.5.1.js"></script>

</body>
</html>

