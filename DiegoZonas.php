
<?php

    //Leer data del archivo zonas.csv
    // $csv_file_name = 
    // $handle = fopen('zonas.csv','a');
    // $data = fgetcsv($handle,1000,',');
    // $all_data = array();

    // while($data = fgetcsv($handle,1000,',')){
    //     $all_data[] = $data;
    // }

    // echo "<;>";print_r($all_data);

    // fclose($handle);


    //-----------------------------NO FUNCIONA-------------------
    // function customCsvArray($update){
    //     $arreglo = [
    //         $Provincia = '',
    //         $Canton = '',
    //         $Distrito = ''
    //     ];
    //     $file_open = fopen("zonas.csv", 'a');
    //     while(($data = fgetcsv($file_open, 1000, ",")) !== FALSE){
    //         if($data[0] == $update){
    //             $arreglo[0] = $data[0];
    //             $arreglo[1] = $data[1];
    //             $arreglo[2] = $data[2];
    //         }
    //     }
    //     echo json_encode($arreglo, JSON_PRETTY_PRINT);
    // }
    // customCsvArray("zonas.csv");
    //-------------------------------------------------------------

    //----------------------Tampoco funciona-----------------------
        // $arreglo = [
        //     $Provincia = '',
        //     $Canton = '',
        //     $Distrito = ''
        // ];
        // $file_open = fopen("zonas.csv", 'r');
        // $no_rows = count(file("zonas.csv"));
        // if($no_rows > 1){
        //     $no_rows = ($no_rows - 1) +1;
        // }
        // $form_data = array(
        //     'Provincia' => '$Provincia',
        //     'Canton' => '$Canton',
        //     'Distrito' => '$Distrito'
        // );
        // fputcsv($file_open, $form_data);
        // $Provincia = '';
        // $Canton = '';
        // $Distrito = '';
    //------------------------------------------------------------
    // function csvToArray($csvFile){
 
    //     $file_to_read = fopen($csvFile, 'r');
     
    //     while (!feof($file_to_read) ) {
    //         $lines[] = fgetcsv($file_to_read, 1000, ',');
     
    //     }
     
    //     fclose($file_to_read);
    //     return $lines;
    // }
    // $csvFile = 'zonas.csv';
    // $csv = csvToArray( $csvFile);

    // echo '<pre>';
    // print_r($csv);
    // echo '</pre>';

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

    function csvToArray($fileName){
        $Coptions = "";
        $Doptions = "";
        $firstRow = true;
    
        if(($handle = fopen($fileName, 'r')) !== FALSE){
            $Cpasado ="";
            while(! feof($handle)){
            $fp = fgetcsv($handle, 1000, "\n");
            if(!empty($fp) && !$firstRow){
    
                foreach($fp as $field){
                    $values = explode(',', $field);
                    if( $Cpasado != $values[1]){
                        $Coptions .= '[value'.'=> '.$values[1]. ', ' .'region_id => '.searchId($values[0]). ','. ' label => '.$values[1].'],' . "\n";
                        $Cpasado = $values[1];
                    }
                    $Doptions .= '[value'.'=> '.$values[2]. ', '.'city => '.$values[1].', ' .' label => '.$values[2].']' . "\n";
                }
            }
            $firstRow = false;
        }
        file_put_contents('cantonesUpdate.php', print_r($Coptions, true));
        file_put_contents('distritosUpdate.php', print_r($Doptions, true));
        }
    }  

    


    csvToArray('zonas.csv');
?>
