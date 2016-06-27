<?php
ini_set('memory_limit', '1024M');

/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 13:54
 */
class ConvertCsvToArray
{

    public function convert($filename, $delimiter = ';')
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            return FALSE;
        }

        $header = NULL;
        $data = array();

        if (($handle = fopen($filename, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        return $data;
    }

    public function conv($filename)
    {
        if (($handle = fopen($filename, "r")) !== FALSE) {
            fgetcsv($handle, 1000, ";");

            $imports = array();

            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

                if (($data[0] != "") AND (is_numeric($data[0]))) {

                    $compte_ID = $data[0];
                    $facture_ID = $data[1];
                    $abonne_ID = $data[2];
                    $appel_duree_reel = $data[5];
                    $appel_duree_fact = $data[6];
                    $appel_type = $data[7];

                    //convertir la date FR + l'heure en format Y-m-d H:i:s
                    $appel_datetime = strtotime(str_replace('/', '-', $data[3]) . ' ' . $data[4]);
                    $appel_datetime = date("Y-m-d H:i:s", $appel_datetime);

                    $imports[] = array($compte_ID, $facture_ID, $abonne_ID, $appel_datetime, $appel_duree_reel, $appel_duree_fact, $appel_type);
                }

            }

        }
        return $imports;
    }
}
