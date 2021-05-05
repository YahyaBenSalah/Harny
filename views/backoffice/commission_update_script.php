<?php
include '../../core/CommissionFns.php';

$commission = new Commission(
    $_POST['id'],
    $_POST['client_id'],
    $_POST['artist_id'],
    $_POST['categorie'],
    $_POST['description'],
    $_POST['avancement'],
    $_POST['prix'],
    $_POST['deadline']
);

CommissionFns::update($commission);

header("Location: http://localhost/artisons/views/backoffice/commission_list.php");
