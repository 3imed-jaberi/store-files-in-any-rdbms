<?php
    function transfer(){

        // init data .. 
        $result = false;
        $file_blob   = '';
        $file_size = 0;
        $file_type   = '';
        $file_name    = '';
        $size_max = 250000;

        // Check if the file is uploaded or not  .. 
        $result = is_uploaded_file($_FILES['the_file_name_to_upload']['tmp_name']); 
        if (!$result) {
            echo "Problème de transfert";
            return false;
        } else {
            // The file has been received .. 

            // get file size .. 
            $file_size = $_FILES['the_file_name_to_upload']['size'];
            /*
            // check the size you want .. 
            if ($file_size > $size_max) {
                echo "Trop gros !";
                return false;
            }*/

            // get some information from the file .. 
            $file_type = $_FILES['the_file_name_to_upload']['type'];
            $file_name  = $_FILES['the_file_name_to_upload']['name'];


            // get connection .. 
            require_once ("connect-to-db.php");

            // get content of the files .. 
            $file_blob = file_get_contents ($_FILES['the_file_name_to_upload']['tmp_name']);

            // request : add to db .. 
            $req = "INSERT INTO files ( file_name, file_size, file_type, file_blob )VALUES ('$file_name','$file_size','$file_type'," .
                    "'" . addslashes ($file_blob)."')"; 

            // exec the request ..
            $result = mysqli_query ($connect , $req) or die (mysqli_error ($connect));

            return true;
        }
    }
?>