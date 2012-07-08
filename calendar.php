<?php
global $pageTile;
$pageTile= "PDM Auctions - Calendar";

include_once("header.php");

?>

<h1>
    Calendar Coming Soon!
</h1>

<?php
    include_once("footer.php");
?>


<script type="text/javascript">
            
            $(window).load(function() {
                PdmApp.setActiveLink("#calendarlink");
            });
</script>

</body>
</html>