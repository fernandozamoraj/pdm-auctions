
<?php
global $pageTile;
$pageTile = "PDM Auction - Contact Us";
include_once("header.php");
include_once("./app_code/AboutUs.php");

$aboutUs = new AboutUs();
?>


    <div class="row"> 
       <h1><?php $aboutUs->Header ?></h1>
    </div>   
    <div class="row">
        <div class="twelve columns">
            <h3>Contact Us</h3>
        </div>
    </div>

    <div id="myModal" class="reveal-modal">
        <h4>PDM Auctions Feedback Form</h4>

        <div class="container">
            <form class="nice" action="" method="">
                <label for="sendername">Sender:</label>
                <input id="sendername" name="sendername" placeholder="sender name"/>
                <label for="senderemail">E-Mail:</label>
                <input id="senderemail" name="senderemail" placeholder="Email"/>
                <label for="commentsarea">Comments<label>
                <textarea  id="commentsarea" name="comments" class="large" rows="10"></textarea>
                <button name="sumbit" type="submit">Submit</button>
            </form>
        </div>

        <p class="lead">We thank you for your feedback</p>
    </div>

    <div class='row'>
        <div class='three columns'>
            <h3>Address</h3>
            <p><?php echo $aboutUs->Street; ?></p>
            <p><?php echo $aboutUs->City . ", " . $aboutUs->State; ?></p>
            <p><?php echo $aboutUs->Zipcode ?></p>
        </div>
        <div class='three columns'>
            <h3>Email</h3>
            <p><?php echo $aboutUs->EmailBusiness; ?></p>
        </div>
        <div class='three columns'>
            <h3>Office Phone</h3>
            <p><?php echo $aboutUs->OfficePhone; ?></p>
        </div>
        <div class='three columns'>
            <h3>Cell Phone</h3>
            <p><?php echo $aboutUs->CellPhone; ?></p>
        </div>
   </div>

<?php
    include_once("footer.php");
?>


<script type="text/javascript">
            
            $(window).load(function() {
                PdmApp.setActiveLink("#contactuslink");
            });
</script>

</body>
</html>