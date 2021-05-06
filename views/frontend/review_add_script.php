<?php
    include '../../core/Crud_Review.php';

$review = new Review(
    -1,
    $_POST['lastName'],
    $_POST['name'],
    $_POST['text'],
    $_POST['date']
);

Crud_Review::insert($review);

header("Location: http://localhost/artisons/views/frontend/reviews.php");