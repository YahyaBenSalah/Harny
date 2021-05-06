<?php
include '../../core/Crud_Review.php';

$review = new Review(
    $_POST['id'],
    $_POST['lastName'],
    $_POST['name'],
    $_POST['text'], 
    $_POST['date']
);

Crud_Review::update($review);

header("Location: http://localhost/artisons/views/backoffice/reviews_list.php");
