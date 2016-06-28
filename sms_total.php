<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 15:42
 */

require_once "bootstrap.php";

//Retrouve la quantité totale de SMS envoyés par l'ensemble des abonnés
$qb = $entityManager->createQueryBuilder();
$qb->select('count(t.id)')
    ->from('TicketsAppels', 't')
    ->where('t.appel_type LIKE :type')
    ->setParameters(array('type' => "%envoi%sms%"));

$totalSms = $qb->getQuery()->getSingleScalarResult();
