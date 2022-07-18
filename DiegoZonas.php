
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

    
?>
