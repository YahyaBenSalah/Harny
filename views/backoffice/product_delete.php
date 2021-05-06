<?php

    include "../../core/Crud_Produit.php";
    
    $id = $_GET['id'];
    Crud_Produit::delete($id);

    header("Location: http://localhost/artisons/views/backoffice/product_list.php");