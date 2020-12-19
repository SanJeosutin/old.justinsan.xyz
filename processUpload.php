<?php
/*
 * File name:   .processUpload.php
 * Author   :   Justin San
 * Desc		:	Process projects upload
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
        <h1 class="display-4">Upload Project</h1>

        <?php
        $state = "error";
        $dir = "uploadFiles.txt";
        $errMsg = array();

        if (!isset($_POST['submitProject'])) {
            header("location: index.php");
            exit();
        } else {
            $proj_type = $_POST["projectType"];
            $proj_title = sanitisedInput($_POST["projectTitle"]);
            $proj_GithubRepo = filter_var($_POST["projectGithubURL"], FILTER_SANITIZE_URL);
            $proj_desc = sanitisedTextField($_POST["projectDesc"]);

            //Check Data
            if (!preg_match("/^(\w[\s]*){1,20}$/", $proj_title)) {
                if (strlen($proj_title) > 21) {
                    array_push($errMsg, "Project Title", "Characters limit reach. Ensure that title is no more than 20 characters long");
                } else {
                    array_push($errMsg, "Project Title", "Only ' ' [space] and alphanumeric characters are allowed");
                }
            }
            if (filter_var($proj_GithubRepo, FILTER_VALIDATE_URL) === FALSE) {
                array_push($errMsg, "Github Repository", "Could not find Github Repository. Please check your URL. Make sure it is in correct format");
            }
            if (str_word_count($proj_desc) > 51) {
                array_push($errMsg, "Project Descriptions", "Characters limit reach. Ensure that description is no more than 50 words long");
            }

            checkPath($dir);
            uploadFile($proj_type, "projectImage", "images", $errMsg);
            uploadFile($proj_type, "projectPath", "zip", $errMsg);

            if ($errMsg == array()) {
                $state = "success";

                $proj_data = $proj_type . "\t" . $proj_title . "\t" . $proj_imgPath . "\t" . $proj_GithubRepo . "\t" . $proj_path . "\t" . $proj_desc . "\n";

                $fileDir = "./data/$dir";
                $file = fopen($fileDir, "a+");
                fwrite($file, $proj_data);
                fclose($file);

                array_push($errMsg, "Success", "Request has been received! Thank you");
            } else {
                $state = "error";
                array_push($errMsg, "Error", "File could not be uploaded. Please try again later");
            }

            echo displayMessage($errMsg, $state);
        }

        ?>
    </div>
</div>
<?php include('./incs/footer.inc'); ?>