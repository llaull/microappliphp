<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 16:22
 */

require_once "accesBdd.php";

/**
 * Retrouver le TOP 10 des volumes data facturés en dehors de la tranche horaire 8h00 18h00, par abonné.
 * @return un tableau avec la reponse de la requete
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

//initialise la valeur i à 1 pour afficher les positions des abonnés
$i = 1;
?>

<table border="1" cellspacing="0">
    <thead>
    <tr>
        <th>Position</th>
        <th>appel_datetime</th>
        <th>abonne_ID</th>
        <th>appel_duree_fact</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach (getTopData() as $v) : ?>
        <tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $v['appel_datetime']; ?> </td>
            <td> <?php echo $v['abonne_ID']; ?> </td>
            <td> <?php echo $v['appel_duree_fact']; ?> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
