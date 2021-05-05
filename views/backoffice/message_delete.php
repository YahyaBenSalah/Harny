<?php

    include "../../core/messagesFns.php";
    
    $id = $_GET['id'];
    messageFns::delete($id);

    header("Location: http://localhost/artisons/views/backoffice/message_list.php");