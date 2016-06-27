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

// creation d'un oubjet qui va convertir le csv en array
$csvArray = new ConvertCsvToArray();
$data = $csvArray->convert($file);

//premiere boucle sur les morceaux du tableau $data 
foreach(array_chunk($data, 100) as $datas ) {

    // crée un ticket pour chaque ligne du tableau
    foreach($datas as $arr) {

        $ticket = new TicketsAppels();
        $ticket->setCompteID($arr[0]);
        $ticket->setFactureID($arr[1]);
        $ticket->setAbonneID($arr[2]);
        $ticket->setAppelDatetime((new \DateTime($arr[3])));
        $ticket->setAppelDureeFact($arr[4]);
        $ticket->setAppelDureeReel($arr[5]);
        $ticket->setAppelType($arr[6]);

        $entityManager->persist($ticket);
    }
}

$entityManager->flush();

echo "importation fini";
