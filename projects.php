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

//VARS
$projectPath = "./files/projects";
?>
<div class="jumbotron jumbotron-fluid bg-yellowgreen">
    <div class="container">
        <h1 class="display-4">Few of my projects</h1>
        <p class="lead">
            For the past couple of years, I've been working on a few side projects
            <em>(Weather it's a small ones or a big ones. All is in here!)</em> to build up my portfolio.
            You can find them bellow. Happy browsing!
        </p>
        <?php //SCRIPT GOES HERE
            checkPath("projectCard.inc");
            createCard("./data/ProjectCards/projectCard.inc" ,$projectPath, "$projectPath/.Images/random-image.jpg", "$projectPath/WEB RCON", "https://github.com/SanJeosutin/MCRCON", "Just a Minecraft RCON Web UI. It's still in development.");
            include('./data/ProjectCards/projectCard.inc');
        //SCRIPT ENDS HERE?>
    </div>
</div>
<?php include('./incs/footer.inc'); ?>