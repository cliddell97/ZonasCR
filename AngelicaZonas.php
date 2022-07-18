<?php


//Verifica el nombre de la provincia y devuelve su Id.
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

//script csv to array
function csvToArray($file){
    
    $optionsCanton = '$options' ." = [ \n" .'         [\'value\' => \'\', \'label\' => \'Seleccione cantón\'],' ."\n";
    $optionsDistrito = '$options' ." = [ \n" .'         [\'value\' => \'\', \'label\' => \'Seleccione distrito\'],' ."\n";
    $firstRow = true;

    if (($handle = fopen($file, "r")) !== FALSE) {
        $cantAnterior = "";

        while (! feof( $handle )){
            //obtiene la primera fila
            $fields = fgetcsv ($handle, 1000, "\t");
            
            //Verifica que haya informacion en el vector y que no sea la primera fila
            if(!empty($fields) && !$firstRow){

                foreach($fields as $field){
                    //divide la fila en valores
                    $values = explode(',', $field);

                    //Verifica que no se repita el canton
                    if( $cantAnterior != $values[1]){
                        //Ingresa la información a la cadena de canton
                        $optionsCanton .= '         [\'value\'' .' => ' .'\'' .$values[1] .'\'' .', \'region_id\' => ' .'\'' .searchId($values[0]) .'\'' .', \'label\' => ' .'\'' .$values[1] .'\'' .'],' ."\n";
                        $cantAnterior = $values[1];
                    }

                    //Ingresa la información a la cadena de distrito
                    $optionsDistrito .= '         [\'value\'' .' => ' .'\'' .$values[2] .'\'' .', \'city\' => ' .'\'' .$values[1] .'\'' .', \'label\' => ' .'\'' .$values[2] .'\'' .'],' ."\n";
                }
            }
            $firstRow = false;
        }

        file_put_contents('cantones2.txt', print_r($optionsCanton, true)); 
        file_put_contents('distritos2.txt', print_r($optionsDistrito, true)); 
    }
}

csvToArray("zonas.csv");

?>
