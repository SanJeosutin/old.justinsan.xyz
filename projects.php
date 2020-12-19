<?php
/*
 * File name:   project.php
 * Author   :   Justin San
 * Desc		:	Projects page
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
        <h1 class="display-4">My Projects Portfolio</h1>
        <p class="lead">
            For the past couple of years, I've been working on a few side projects
            <em>(Weather it's a small ones or a big ones. All is in here!)</em> to build up my portfolio.
            You can find them bellow. Happy browsing!
        </p>
        <?php //SCRIPT GOES HERE
            checkPath("uploadFiles.txt");
            displayProject("./data/uploadFiles.txt", basename($_SERVER['PHP_SELF']));
        //SCRIPT ENDS HERE?>
    </div>
</div>
<?php include('./incs/footer.inc'); ?>