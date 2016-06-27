<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 13:29
 */

require_once "bootstrap.php";
require_once "ConvertCsvToArray.php";

//fichier source
$file = "tickets_appels_201202.csv";

$csvArray = new ConvertCsvToArray();
$data = $csvArray->conv($file);


foreach(array_chunk($data, 100) as $datas ) {

    foreach($datas as $arr) {

        echo ">";
        $product = new TicketsAppels();
        $product->setCompteID($arr[0]);
        $product->setFactureID($arr[1]);
        $product->setAbonneID($arr[2]);
        $product->setAppelDatetime((new \DateTime($arr[3])));
        $product->setAppelDureeFact($arr[4]);
        $product->setAppelDureeReel($arr[5]);
        $product->setAppelType($arr[6]);

        $entityManager->persist($product);
    }
    echo "-";
}
$entityManager->flush();
