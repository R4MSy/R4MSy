<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <style type="text/css"></style>
        <style>
            
            body
            {
                background-color: #B7B39F;
            }
           
            .Cuadro{
                background-color: #707271;
                padding: 20px;
                margin-top: 200px;
            }
            .Volver{
                background-color: #707271;
                padding: 20px;
                margin-top: 200px;
                text-align: center;
            }

        
        </style>
</head>
<body>
    


   
<div class="Cuadro">
    <?php
    
        echo "<center><br><br><font face='arial'>";

            $nom=$_POST['nombre2'];
            $pass=$_POST['password2'];

if($nom=="Mariana" and $pass=="1") {

$con = mysqli_connect("localhost", "root", "", "VanityFox");

if ($con) {
    echo "Bienvenido " . $nom . ", se ha conectado correctamente";
    echo "<a href='InicioAdmin.html'> Página </a>";
} else {
    echo "<h2>Fallo al conectar a la base de datos</h2>";
    echo "<a href='Index.html' target='_self'> Regresar </a>";
    die(mysqli_error($con)); 
}
        echo "<a href='InicioAdmin.html'>Modo Administrador</a>";
}
else {
    echo "<h2>Acceso Denegado</h2>";
    echo "<a href='Index.html'>regresar</a>";
    die(mysqli_error());
}
?>
</div>
<div class=""
</body>
</html>