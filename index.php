<html>
   <head>
      <title>Store Files - PHP & MYSQL</title> 
      <link rel="icon" href="lib/favicon/favicon.ico" type="image/x-icon">     
   </head>  
   <body>
          <!-- Save the file in the DB -->
          <?php
                      require_once ("config/config-db.php");
                      require_once ("src/private/transfer-file-to-db.php");
                    if ( isset($_FILES['the_file_name_to_upload']) ){
                              transfer();
                    }
          ?>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <center> 
      <h3>Send File : </h3>
      <form enctype="multipart/form-data" action="" method="post">
         <input type="file" name="the_file_name_to_upload" size=50 />
         <button type="submit" > Send </button>
      </form>
      <p><a href="src/public/display-list-of-files.php">List</a></p>
      </center>
   </body>
</html>