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
    $pasa="N";
    $correo=$_POST ["correo"];
    $consulta = "SELECT * FROM usuario where login='".$usuario."'";
    $result = mysqli_query($conecction,$consulta);
}
if(!$result)
{
    header('location: '.'interfazusuario.php');
    echo "No se a podido realizar la consulta".$consulta;
}
else {
    while ($colum = mysqli_fetch_array($result)){
        if($correo == $colum["usuario"]){
            $pasa="S";
        }
    }
}
if($pasa == "S")
header('location: '.'p2.php');
else
header('lacation: '.'p2.php');
?>