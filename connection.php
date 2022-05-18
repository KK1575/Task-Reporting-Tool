<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = reportingtool";
   $credentials = "user = postgres password=KK1575";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      //echo " Database connected successfully.\n";
   }
?>