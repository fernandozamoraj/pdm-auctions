<?php

 include_once("./app_code/AboutUs.php");

 $aboutUs = new AboutUs();
?>


<div class="navbar navbar-form">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="#"><?php echo $aboutUs->GetFullAddress(); ?></a>
            <a class="brand" href="#"><?php echo "Office " . $aboutUs->OfficePhone; ?></a>
            <a class="brand" href="#"><?php echo "Cell " . $aboutUs->CellPhone; ?></a>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="./twitterbs/js/bootstrap.js"></script>
<script type="text/javascript" src="./scripts/jquery-1.5.1.js"></script>
<!-- Included JS Files -->
<script src="./foundation/javascripts/jquery.min.js"></script>
<script src="./foundation/javascripts/foundation.js"></script>
<script src="./foundation/javascripts/app.js"></script>

</body>
</html>

