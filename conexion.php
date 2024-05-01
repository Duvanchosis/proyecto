<?php
$user = "root";
$pass = "";
$host = "localhost";
$connection = mysqli_connect($host, $user, $pass);
$datab = "specialgifts";
$db = mysqli_select_db($connection, $datab);

if(!$db)
{
    header('Location:' , 'p2.php');
}

else
{
header('Location: '.'p2.php');
}

