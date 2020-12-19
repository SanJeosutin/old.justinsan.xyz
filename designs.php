<?php
/*
 * File name:   designs.php
 * Author   :   Justin San
 * Desc		:	Design page
 ? -=-=-=-=-=-=-=-=-=-=-=-=
 * Created  :   19/12/2020
 * Updated  :   19/12/2020
*/
?>

<?php
include('./incs/header.inc');
include('./incs/navbar.inc');
include('./settings/functions.php');

?>
<div class="jumbotron jumbotron-fluid bg-yellowgreen">
    <div class="container">
        <h1 class="display-4">My Designs Portfolio</h1>
        <p class="lead">
            I haven't done much designs <em>(Illustrator, Photoshop, UI, etc)</em> in the past years or so. 
            Hopping to get back to it soon enough though. Just need some inspirations thats all :D. Anywho, happy browsing!
        </p>
        <?php //SCRIPT GOES HERE
        checkPath("uploadFiles.txt");
    displayProject("./data/uploadFiles.txt", basename($_SERVER['PHP_SELF']));
        //SCRIPT ENDS HERE?>
    </div>
</div>
<?php include('./incs/footer.inc'); ?>