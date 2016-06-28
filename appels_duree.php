<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 15:18
 */

require_once "accesBdd.php";

/**
 * Retrouve la durée totale réelle des appels effectués après le 15/02/2012 (inclus)
 * @return une string d'un total d'heure
 */
function getTotalDureeAppel()
{
    $stringRQ = "SELECT
            SEC_TO_TIME(SUM(TIME_TO_SEC(appel_duree_reel))) AS total
        FROM
            tickets__appels
        WHERE
            appel_type LIKE 'appel%'
                AND appel_type NOT LIKE '%reçu%'
                AND DATE(appel_datetime) >= STR_TO_DATE('15/02/2012', '%d/%m/%Y')";

    $req = accesBdd::getDb()->prepare($stringRQ);
    $req->execute();
    $rows = $req->fetch();

    return $rows['total'];
}
