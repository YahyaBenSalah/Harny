<?php
    include '../../core/Crud_Produit.php';

$id = $_GET['id'];
$produit = Crud_Produit::selectOne($id);

Crud_Produit::archive($produit,$id);
Crud_Produit::delete($id);

header("Location: http://localhost/artisons/views/backoffice/product_list.php");