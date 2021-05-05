<?php
    include '../../core/CommissionFns.php';

$commission = new Commission(
    -1,
    $_POST['client_id'],
    $_POST['artist_id'],
    $_POST['categorie'],
    $_POST['description'],
    $_POST['avancement'],
    $_POST['prix'],
    $_POST['deadline']
);

CommissionFns::insert($commission);

header("Location: http://localhost/artisons/views/backoffice/commission_add_view.php");