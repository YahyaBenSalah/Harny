<?php
include '../../core/messagesFns.php';

$target_dir = "../uploadedfiles/";
    $target_file = $target_dir . basename($_FILES["fichier_attache"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($_FILES["fichier_attache"]["name"] != ""){
        $check = getimagesize($_FILES["fichier_attache"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fichier_attache"]["tmp_name"], $target_file)) {
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $message = new message(
            $_POST['id'],
            $_POST['client_id'],
            $_POST['artist_id'],
            $_POST['date_envoie'],
            $_POST['contenu'],
            $_FILES["fichier_attache"]["name"]);

    }
    else{
        $message = new message(
            $_POST['id'],
            $_POST['client_id'],
            $_POST['artist_id'],
            $_POST['date_envoie'],
            $_POST['contenu'],
            $_GET["fichier_attache"]["name"]);
    }


messageFns::update($message);

header("Location: http://localhost/artisons/views/backoffice/message_list.php");
