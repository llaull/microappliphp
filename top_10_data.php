<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 16:22
 */

require_once "accesBdd.php";

/**
 * Retrouve le TOP 10 des volumes data facturés en dehors de la tranche horaire 8h00 18h00, par abonné.
 * @return un tableau avec la réponse de la requête
 */
function getTopData()
{
    $stringRQ = "SELECT * FROM tickets__appels WHERE
            (HOUR(appel_datetime) <= 8 OR
            HOUR(appel_datetime) >= 18)
            AND appel_type LIKE 'connexion%'
              GROUP BY abonne_ID
              ORDER BY appel_duree_fact DESC
              LIMIT 10";

    $req = accesBdd::getDb()->prepare($stringRQ);
    $req->execute();
    $rows = $req->fetchAll();

    return $rows;
}
