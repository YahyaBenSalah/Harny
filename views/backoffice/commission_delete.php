<?php

    include "../../core/CommissionFns.php";
    
    $id = $_GET['id'];
    CommissionFns::delete($id);

    header("Location: http://localhost/artisons/views/backoffice/commission_list.php");