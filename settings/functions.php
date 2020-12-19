<?php
/*
 * File name:   functions.php
 * Author   :   Justin San
 * Desc		:	Handles all the back end
 ? -=-=-=-=-=-=-=-=-=-=-=-=
 * Created  :   19/12/2020
 * Updated  :   19/12/2020
*/
?>

<?php
function displayMessage($errMsg, $state)
{
    $dataAmount = count($errMsg);
    $fieldName = array();
    $reason = array();
    $data = "";
    /*
        *SPLIT $errMsg INTO 2 SEPERATE DATA / ARRAY:
        *    -$fieldName
        *    -$reason
        */
    //FIELD NAME
    for ($i = 0; $i < $dataAmount; $i += 2) {
        array_push($fieldName, $errMsg[$i]);
    }

    //REASON
    for ($i = 1; $i < $dataAmount; $i += 2) {
        array_push($reason, $errMsg[$i]);
    }

    /*
        NEATLY PUT THE MESSAGE BACK INTO A 
        READABLE HTML FORMAT
        */
    for ($i = 0; $i < count($reason); $i++) {
        $data .= "
            <p><strong>" . $fieldName[$i] . ":</strong> - 
            <em>" . $reason[$i] . ".</em></p>
            ";
    }
    /*
        SWITCH CASE TO INDICATE IF ITS AN ERROR,
        WARNING OR SUCCESS. CHANGE THE BACKGROUND
        OF THE MESSAGE. 
        */
    switch ($state) {
        case 'error':
            $state = "alert-danger";
            break;

        case 'warn':
            $state = "alert-warning";
            break;

        case 'success':
            $state = "alert-success";
            break;

        default:
            $state = "alert-primary";
            break;
    }

    $displayMessage = "
        <div class='alert $state' role='alert'>
            $data
        </div>
        ";
    return $displayMessage;
}

function sanitisedInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sanitisedTextField($paragraph)
{
    $paragraph = preg_replace('/\s\s+/', '\n', $paragraph);
    $paragraph = "\"$paragraph\"";
    return $paragraph;
}

function getName($loc)
{
    $name = basename($loc);
    $name = strtolower($name);
    $name = ucwords($name);
    return $name;
}

function uploadFile($type, $name, $path, $errMsg)
{
    $errMsg = array();
    $allowedTypes = ["jpg", "jpeg", "gif", "png", "zip"];

    $fileName = basename($_FILES[$name]["name"]);

    if ($path == "images") {
        $targetDir = "./files/" . ucfirst($path) . "/";
    } else {
        $targetDir = "./files/" . ucfirst($type) . "/";
    }
    $targetFile = $targetDir . $fileName;

    $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
    $fileSize = $_FILES[$name]["size"];
    $tempFile = $_FILES[$name]["tmp_name"];


    if (!in_array($fileType, $allowedTypes)) {
        return array_push($errMsg, "File Type Error", "Only [zip], [jpeg], [gif] and [png] can be uploaded to the server");
    }
    // check if file is empty
    else if ($fileSize == 0) {
        return array_push($errMsg, "File Empty", "File cannot be empty. Please try again");
    }
    // check if file size too big
    else if ($fileSize > 1073741274) {
        return array_push($errMsg, "File Size too Powerful", "File cannot be bigger than 1GB. Please try again");
    }
    // check if file already exists on server
    else if (file_exists($targetFile)) {
        return array_push($errMsg, "File Exist", "File already exist on the server. Please try again");
    }

    if ($errMsg  == array()) {
        move_uploaded_file($tempFile, $targetFile);
        if ($fileType == "zip") {
            return unzipFile($targetFile, $fileName);
        } else if ($fileType != "zip") {
            return "$targetFile";
        }
    }
}

function unzipFile($fileLoc, $fileName)
{
    $zip = new ZipArchive;
    if ($zip->open($fileLoc) === TRUE) {
        $fileDir = preg_replace("/(\.\w*)/", "", $fileName);
        $fileDir = dirname($fileLoc) . "/" . $fileDir;
        mkdir($fileDir);
        $zip->extractTo($fileDir);
        $zip->close();

        return "$fileDir";
    }
}

function checkPath($fileName)
{
    $dir = "./data";
    $fileDir = $dir . "/" . $fileName;
    /*CHECK IF FILE EXIST. IF NOT CREATE ONE*/
    if (!file_exists($fileDir)) {
        umask(0007);

        /*CHECK IF DIR EXIST. IF NOT CREATE ONE*/
        if (!file_exists($dir))
            mkdir($dir, 02770);

        $fileOpen = fopen($fileDir, "w");
        fclose($fileOpen);
    }
}

function writeFile($loc, $data)
{
    $file = fopen($loc, "a+");
    fwrite($file, $data);
    fclose($file);
};

function displayProject($fileDir, $currLoc)
{
    $currLoc = str_replace('.php', '', $currLoc);
    $handle = fopen($fileDir, "r");

    $rowTag = "<!--START-->\n<div class=\"row\">";
    $endTag = "<!--END-->\n</div><br>";

    if (is_readable($fileDir)) {
        $count = 0;
        $str = $rowTag;
        
        while (!feof($handle)) {
            list($type, $name, $imgPath, $githubURL, $projectDir, $desc) = array_pad(explode("\t", fgets($handle)), 6, null);
            if ($type != null && $currLoc == $type) {
                if($count != 0 && $count % 3 == 0){
                    $str .= $endTag;
                    $str .= $rowTag;
                }
                
                $cardTag = "
                    <div class=\"col-sm\">
                        <div class=\"card\" style=\"width: 18rem;\">
                            <img class=\"card-img-top\" src=\"" . $imgPath . "\" alt=\"$name\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">" . $name . "</h5>
                                <p class=\"card-text\">" . $desc . "</p>
                                <a href=\"" . $projectDir . "\" class=\"btn btn-primary\">Live Demo</a>
                                <a href=\"" . $githubURL . "\" class=\"btn btn-primary\">Source Code</a>
                            </div>
                        </div>
                    </div>";

                    $str .= $cardTag;
                    $count++;
                }else if($type != null && $currLoc == $type){
                    if($count != 0 && $count % 3 == 0){
                        $str .= $endTag;
                        $str .= $rowTag;
                    }
                    
                    $cardTag = "
                        <div class=\"col-sm\">
                            <div class=\"card\" style=\"width: 18rem;\">
                                <img class=\"card-img-top\" src=\"" . $imgPath . "\" alt=\"$name\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">" . $name . "</h5>
                                    <p class=\"card-text\">" . $desc . "</p>
                                    <a href=\"" . $projectDir . "\" class=\"btn btn-primary\">Live Demo</a>
                                    <a href=\"" . $githubURL . "\" class=\"btn btn-primary\">Source Code</a>
                                </div>
                            </div>
                        </div>";
    
                        $str .= $cardTag;
                        $count++;
                }
            }
        echo $str;
    }
}
?>