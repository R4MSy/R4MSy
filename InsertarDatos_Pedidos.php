<head>
<title>Abarrotes Rosy</title>
    <style>
        body {
            background-color: #F2E0C9;
            margin: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        
        .Titulo {
            text-align: center;
            background-color: #F29985;
            color: #401F13;
            font-size: 25px;
            padding: 10px;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .Titulo img {
            margin-left: 15px;
            height: 80px;
        }
        
        nav {
            background-color: #E5784E;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        nav .dropdown {
            position: relative;
        }

        nav .dropbtn {
            background-color: #E5784E;
            color: #401F13;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        nav .dropbtn:hover, nav .dropbtn:focus {
            background-color:#9FBFAD;
            
        }

        nav .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        nav .dropdown-content a {
            color: #401F13;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        nav .dropdown-content a:hover {
            background-color: #EFB560;
        }

        nav .dropdown:hover .dropdown-content {
            display: block;
        }

        #PiePag {
            background-color: #E5784E;
            color: #401F13;
            padding: 10px;
            text-align: center;
            margin-top: 50px;
        }

        #PiePag h2 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="Titulo">
        <h1>Abarrotes Rosy</h1>
        <img src="LogoIn.png" alt="Logo">
    </div>

    <nav>
        <div class="dropdown">
            <button class="dropbtn">Clientes</button>
            <div class="dropdown-content">
                <a href="ConsultaUsuarios.php" target="_self">Consulta de datos</a>
                <a href="InsertarClientes.html" target="_self">Insertar Datos</a>
                <a href="BorrarClientes.html" target="_self">Borrar Datos</a>
                <a href="ActualizarClientes.php" target="_self">Actualizar Datos</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Pedidos</button>
            <div class="dropdown-content">
                <a href="ConsultaPedidos.php" target="_self">Consulta de datos</a>
                <a href="InsertarPedidos.html" target="_self">Insertar Datos</a>
                <a href="BorrarPedidos.html" target="_self">Borrar Datos</a>
                <a href="ActualizarPedidos.php" target="_self">Actualizar Datos</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Proveedores</button>
            <div class="dropdown-content">
                <a href="ConsultaProveedores.php" target="_self">Consulta de Datos</a>
                <a href="InsertarProveedores.html" target="_self">Insertar Datos</a>
                <a href="BorrarProveedores.html" target="_self">Borrar Datos</a>
                <a href="ActualizarProveedores.php" target="_self">Actualizar Datos</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Usuarios</button>
            <div class="dropdown-content">
                <a href="ConsultaUsuarios.php" target="_self">Consulta de Datos</a>
                <a href="InsertarUsuarios.html" target="_self">Insertar Datos</a>
                <a href="BorrarUsuarios.html" target="_self">Borrar Datos</a>
                <a href="ActualizarUsuarios.php" target="_self">Actualizar Datos</a>
            </div>
        </div>
        <button class="dropbtn"><a href="index.html" target="_self">Volver al inicio</a></button>
    </nav>
    <?php
    $con = mysqli_connect("localhost", "root","","vanityfox");

    if (!$con)
        {
        die('No conexion:' .mysqli_error()); 
        }

    $sql="INSERT INTO pedidos
    VALUES('$_POST[Id_Cliente]','$_POST[TipoPedido]', '$_POST[Cantidad]')";

    if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
    {

    die('Error:'.mysqli_error($con));
    }
        echo "<center>";
        echo "Se actualizo el registro<br>";
        echo "<a href='ConsultaPedidos.php'> Ver registros</a>";
        mysqli_close($con);
?>
    <div id="PiePag"> 
        <h2>Todos los derechos reservados</h2>
        <p>Modo Administrador</p>
    </div>
</body>