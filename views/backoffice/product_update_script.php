<?php
include '../../core/Crud_Produit.php';

$produit = new Produit(
    $_POST['id'],
    $_POST['titre'],
    $_POST['description'],
    $_POST['categorie'], 
    $_POST['id_artist'],
    $_POST['prix'],
    $_POST['image'],
    $_POST['artist']
);

Crud_Produit::update($produit);

header("Location: http://localhost/artisons/views/backoffice/product_list.php");
