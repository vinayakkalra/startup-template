<?php

//Use this file for mysql connectivity. Please require this file in other php files
// $link = mysqli_connect("", "", "","");
$link = mysqli_connect("localhost", "root", "", "finstreet_finchords");

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}


?>
   