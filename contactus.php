
<?php
global $pageTile;
$pageTile = "PDM Auction - Contact Us";
include_once("header.php");
include_once("./app_code/AboutUs.php");

$aboutUs = new AboutUs();
?>

<div class='container'>
    <h1><?php $aboutUs->Header ?></h1>
    <div class="row">
        <div class="twelve columns">
            <a href="#" class="button" data-reveal-id='myModal'>Contact Us</a>
        </div>
    </div>

    <div id="myModalHolder" class="reveal-modal">
        <h2>Awesome. I have it.</h2>

        <p class="lead">Your couch.  I it's mine.</p>
        <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
        <a class="close-reveal-modal">&#215;</a>
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
        <a class="close-reveal-modal">&#215;</a>
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
</div>

<?php
    include_once("footer.php");
?>
