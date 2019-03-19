<?php
    if ( isset($_GET['id']) ){

        // convert the id to int type .. 
        $id = intval ($_GET['id']);

        // connect ot db ..
        require_once ("../../config/config-db.php"); 
        require_once ("../private/connect-to-db.php");
        // request : get files from db ..
        $req = "DELETE FROM files WHERE file_id = $id";
        // exec to request .. 
        $result = mysqli_query ($connect ,  $req) ;
         if (!$result){
           echo "error";
         }else{
           header("Location: http://localhost/store-files-in-any-rdbms/src/public/display-list-of-files.php");   
         }
    } else {
        // display erros 
        echo "Mauvais id d'image";
    }
?>