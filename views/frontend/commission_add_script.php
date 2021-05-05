<?php
    include '../../core/CommissionFns.php';

$commission = new Commission(
    -1,
    $_POST['client_id'],
    $_POST['artist_id'],
    $_POST['categorie'],
    $_POST['description'],
    0,
    $_POST['prix'],
    $_POST['deadline']
);

CommissionFns::insert($commission);


header("Location: http://localhost/artisons/views/frontend/commissions.php");