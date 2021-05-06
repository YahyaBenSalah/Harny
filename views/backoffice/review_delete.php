<?php

    include "../../core/Crud_Review.php";
    
    $id = $_GET['id'];
    Crud_Review::delete($id);

    header("Location: http://localhost/artisons/views/backoffice/reviews_list.php");