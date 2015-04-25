<?php

$filename = $_POST['filename'];

$file = $_SERVER['DOCUMENT_ROOT'] . "/upload/$filename";

if (is_readable($file)) {
    if (isset($_POST['filename'])) {
        if (!unlink($file)) {
            echo  "Eroare la ştergerea fişierului $filename";
        } else {
            echo "Fişierul $filename a fost şters";
        }
    }
}
?>