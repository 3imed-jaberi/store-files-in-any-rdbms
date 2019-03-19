<?php

    if ( isset($_GET['id']) ){

        // convert the id to int type .. 
        $id = intval ($_GET['id']);

        // connect ot db ..
        require_once ("../../config/config-db.php"); 
        require_once ("../private/connect-to-db.php");
        // request : get files from db ..
        $req = "SELECT * FROM files WHERE file_id = $id";
        // exec to request .. 
        $result = mysqli_query ($connect ,  $req) or die (mysql_error ($connect));
        
        // result of the exec of the request .. 
        $file_data = mysqli_fetch_row ($result);
        
        // check the id .. 
        if ( !$file_data[0] ){
            // display errors .. 
            echo "Id d'image inconnu";
        } else {
             // set the type of file in the header .. 
            header ("Content-type: " . $file_data[3]);
            // display the file content .. 
            echo $file_data[4] ;
        }

    } else {
        // display erros 
        echo "Mauvais id d'image";
    }

?>