<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 15:18
 */

require_once "bootstrap.php";

$qb = $entityManager->createQueryBuilder();
$qb->select('t')
    ->from('TicketsAppels', 't')
    ->where('t.appel_type LIKE :type')
    ->setParameters(array('type' => "%envoi%sms%"));

echo count($qb->getQuery()->getArrayResult()) ."envoyer";
