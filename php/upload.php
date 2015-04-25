<?php
if (isset($_FILES["file"]["type"])) {
    $validextensions = array("jpeg", "jpg", "png", "gif");
    $temporary = preg_split('/\.(?=[^.]*$)/', $_FILES["file"]["name"]);
    $file_extension = strtolower(end($temporary));
    $_FILES["file"]["name"] = preg_replace('/[-!$%^&*()_+|~=`{}\[\]:";\'<>?,.\/]/','-', $_FILES["file"]["name"]);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/gif"))
        && in_array($file_extension, $validextensions) ) {

        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } else {
            if (file_exists("../upload/" . $_FILES["file"]["name"])) {
                echo "<br><span class='alert label-danger large' id='invalid'>" . $_FILES["file"]["name"] . " <b>exista deja!</b></span> ";
            } else {
                $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "../upload/" . $_FILES['file']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
                echo "<br><span class='alert label-success large' id='success'>Imaginea a fost urcata cu succes!</span><br/>";
                echo "<br/><b>Fisierul:</b> " . $_FILES["file"]["name"] . "<br>";
                echo "<b>Tipul:</b> " . $_FILES["file"]["type"] . "<br>";
                echo "<b>Marimea:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            }
        }
    } else {
        echo "<br><span class='alert label-danger large' id='invalid'>***Tip de fisier invalid! Nu sunt acceptate decat jpg, jpeg, png si gif***<span>";
    }
}
?>