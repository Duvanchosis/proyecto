<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="./css/main2.css" rel="stylesheet" />
    <title>INVENTARIO</title>
</head>

<body>
    <div div class="interfaz">
        <div class="c_producto"><input type="text" class="c_producto1">CODIGO PRODUCTO</input></div>
        <div class="ingresar_c"><input type="text" class="ingresar_c1">CANTIDAD </input></div>
        <div class="imprimir"></div>
        <a href="" class="imprimir1">IMPRIMIR</a>
        <div class="sacar">
        <input type="text" class="sacar1">SACAR CANTIDAD</input></div>
        <div class="guardar"></div>
        <a href="" class="guardar1">GUARDAR</a>
        
        <div class="cerrar"></div>
        <a href="" class="cerrar1">CERRAR SESION</a>
        
        <div class="logo"></div>
        <div class=""><a href="" class="buscar"></a></div>
        <div class=""><a href="" class="ir"></a></div>
        <div class=""><a href="" class="ir2"></a></div>     
        
    </div>

    <?php
    //Aqui comienza php//
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
//{
    
//header('Location: '.'p2.php');
//}
$consulta = "SELECT * FROM productos";
$result = mysqli_query($connection,$consulta);
if(!$result)
{
    echo "No se a podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>ID</th></h1>";
echo "<th><h1>tabla productos</th></h1>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td><h2>" . $colum['idproductos'] . "</td></h2>";
    echo "<td><h2>" . $colum['codigodelproducto'] . "</td></h2>";
    echo "<td><h2>" . $colum['nombredelproducto'] . "</td></h2>";
    echo "<td><h2>" . $colum['stock'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";
?>

</body>

</html>