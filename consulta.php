<?php


$consulta = "SELECT * FROM usuario";
$result = mysqli_query($connection,$consulta);
if(!$result)
{
    echo "No se a podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>ID</th></h1>";
echo "<th><h1>tabla usuario</th></h1>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td><h2>" . $colum['idusuario'] . "</td></h2>";
    echo "<td><h2>" . $colum['n.usuario'] . "</td></h2>";
    echo "<td><h2>" . $colum['correo'] . "</td></h2>";
    echo "<td><h2>" . $colum['clave'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";
