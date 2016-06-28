<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 19:22
 */

include_once('appels_duree.php');
include_once('top_10_data.php');
include_once('sms_total.php');

?>

<h1>Retrouver la durée totale réelle des appels effectués après le 15/02/2012 (inclus) </h1>
<p>
    <strong><?php echo getTotalDureeAppel(); ?></strong> heures d'appels ont été effectuées depuis le 15/02/2012
</p>

<h1>Retrouver le TOP 10 des volumes data facturés en dehors de la tranche horaire 8h0018h00, par abonné.</h1>
<?php
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


<h1>Retrouver la quantité totale de SMS envoyés par l'ensemble des abonnés</h1>

<p>
    <strong><?php echo $totalSms; ?></strong> sms ont été envoyés
</p>
