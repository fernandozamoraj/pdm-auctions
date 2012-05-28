<?php
include_once("header.php");
?>

<div class="container-fluid">
    <h1>Auction Upload</h1>
    <p>From this site you can upload your files as one single zip file. The file must be a zip file</p>
    <h1>Requirements</h1>
    <ul>
        <li>All images files must be JPEGs with jpg extension</li>
        <li>The file name will be the name of the auction so please name it accordingly</li>
        <li>If the auction already exists this will delete the old auction and delete it with the new information</li>
        <li>The template information file must be included in the zip otherwise the contents will have no corresponding information</li>
    </ul>
</div>

<div class="container-fluid">
    <form class="well" action="auctionupload.php" method="post" enctype="multipart/form-data">
        <div class="clearfix">
            <label for="zipfile"><h1>Filename:</h1></label>
            <div class="input">
                <input type="file" name="zipfile" id="zipfile" class="input-file" />
            </div>
        </div>
        <div class="form-actions">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


<?php include_once("footer.php"); ?>