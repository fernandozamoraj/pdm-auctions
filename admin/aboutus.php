<?php

    include_once ("../app_code/authentication.php");
    include_once("../app_code/AboutUs.php");

    session_start();

    $authenticator = new Authenticator();

   if($authenticator->IsAdmin() == false)
   {
       header( 'Location: adminlogin.php' );
   }
   else
   {
       include_once("header.php");
       $errorMessage = "";

       $aboutUs = new AboutUs();

       if(isset($_POST['submit']))
       {
           $aboutUs = new AboutUs();

           $aboutUs->FromForm();

           $aboutUs->Save();

           echo "<h1>Data Saved...</h1>";

           header( 'Location: successfulsave.php' );
       }
?>

       <div class="container">
           <div class="row">
               <div class="twelve columns">
                   <form class="nice" action="" method="post">
                       <div class="row-fluid">
                           <h1>About us</h1>
                           <p class="span4">Fill out the information below and submit. This information will become the about information in the About Us page viewed by your customer.</p>
                       </div>
                       <label class="row-fluid">Header</label>
                      <input type="text" name="header" class="input-text" placeholder="Enter the header" value="<?php echo $aboutUs->Header; ?>"/>
                      <?php
                           $paragraphCount = 1;
                           foreach ($aboutUs->Paragraphs as $paragraph) {
                                echo "\r\n             <label for='standarTextarea'>Paragraph {$paragraphCount}</label>";
                                echo "\r\n             <textarea class='large' cols='70' rows='8' name='paragraph{$paragraphCount}'>{$paragraph}</textarea>";
                               $paragraphCount++;
                           }

                           while($paragraphCount < 5)
                           {
                               echo "\r\n             <label>Paragraph {$paragraphCount}</label>";
                               echo "\r\n             <textarea class='large' rows='8' placeholder='Enter Text' name='paragraph{$paragraphCount}'></textarea>";
                               $paragraphCount++;
                           }
                       ?>
                      <input type="hidden" name="submit">
                     <button name="submit" type="submit" class="nice medium button">Save changes</button>
                     <button class="nice medium button">Cancel</button>
                  </form>
               </div>
           </div>
       </div>
<?php
}
       include_once("footer.php");
?>