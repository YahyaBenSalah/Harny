<?php

include '../core/CommissionFns.php';

$liste = CommissionFns::select();

foreach ($liste as $item){
    echo var_dump($item);

    $commission = new Commission($item['id'],$item['client_id'],$item['artist_id'],$item['categorie'],$item['description'],$item['avancement'], $item['prix'],$item['deadline']);

    echo $commission->setDescription("nora");

    CommissionFns::delete($commission->getCommissionId());
}

