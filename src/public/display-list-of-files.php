<html>
   <head>
      <title>Store Files - PHP & MYSQL</title>
   </head>
   <body>
      <?php

          // include
          require_once ("../../config/config-db.php");
          require_once ("../private/connect-to-db.php");
                    
          // request for get data from the database .. 
          $req = "SELECT * FROM files ORDER BY file_name";
          // exec the requete .. 
          $result = mysqli_query ($connect , $req) or die (mysqli_error ($connect));

          // display data in dashboard ..
          echo "<center><table border='1'><tr><th>file name</th><th>file type</th><th>file size</th><th>display file</th><th>delete file</th></tr>";
          while ( $file_data = mysqli_fetch_row ($result) ){
             echo "<tr><td>".$file_data[1]."</td><td>".$file_data[3]."</td><td>".$file_data[2]."</td><td><a href=\"preview-files.php?id=" . $file_data[0] . "\">Show</a></td><td><a href=\"delete-files.php?id=" . $file_data[0] . "\">remove</a></td></tr>";
          }
          echo "</table></center>";
      ?>
   </body>
</html>