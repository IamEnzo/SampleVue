<?php
$connect = mysqli_connect('localhost','root','','vuetesting');
if($connect->connect_error){
    die('Could not connect to database!');
}
else{
    echo "weww";
}


?>