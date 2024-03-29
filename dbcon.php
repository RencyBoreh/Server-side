<?php
 define("HOSTNAME","localhost");
 define("USERNAME","root");
 define("PASSWORD","");
 define("DATABASE","hotel");

$connection =  mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) ;
 if(!$connection){
  die("connection failed");}

else {
    echo "yess";
}

?>