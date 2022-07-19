<?php
/*Autor: Nathalia Quiros Vargas 
Fecha: 7/18/2022
Descripcion: Creacion de Zonas.php
Entrega de asignacion
Imagineer Costa Rica
En esta parte se abre el archivo de zonas.csv
*/
function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
 }

$row = 1;
if (($handle = fopen("zonas.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);

        echo "<p> $num valores en la linea $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            $zona [$num][$row]=clean ($data[$c]);
            echo clean ($data[$c]) . "<br />\n";
        }
    }
    fclose($handle);
}

$row1 = 1;
if (($handle1 = fopen("cantones1.php", "r+","C:\Imagineer\ZonasCR")) !== FALSE) {
    while (($data1 = fwrite("cantones1.php", "r+","C:\Imagineer\ZonasCR")) !== FALSE) {
        $num1 = count($data1);

        echo "<p> $num1 nuevos valores $row1: <br /></p>\n";
        $row1++;
        for ($c=0; $c < $num1; $c++) {
            if ($row1 >= 3) {
               $valorcanton =$zona [$num1-2][$row1];
                echo "archivo cantones php" . clean($data1[$c]) . "<br />\n";
                echo "archivo cantones php" . clean($valorcanton) . "<br />\n";
                fwrite($data1[$c],$valorcanton,"C:\Imagineer\ZonasCR");
            } 

        }
    }
    fclose($handle1);
}

function searchId($nombre){
    $codigo = 0;
    strtoupper($nombre);

    switch($nombre){
        case "SAN JOSE":
            $codigo = 609;
        break;

        case "ALAJUELA":
            $codigo = 610;
        break;

        case "CARTAGO":
            $codigo = 611;
        break;

        case "HEREDIA":
            $codigo = 612;
        break;

        case "GUANACASTE":
            $codigo = 613;
        break;

        case "PUNTARENAS":
            $codigo = 614;
        break;

        case "LIMON":
            $codigo = 615;
        break;
    }

    return $codigo;

}

?>
