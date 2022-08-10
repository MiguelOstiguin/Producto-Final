<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Estilo_General.css">
    <link rel="stylesheet" href="Estilo_Index.css">
    <title>Welcome</title>
</head>
<body>
    <header class="header"><!--HEADER que contendrá el menú principal-->
        <div class="logo_header">
            <img src="Imagenes/GRILL'S HOUSE BLANCO-05.png" alt="">
        </div>
        <nav class="nav_menu">
            <ul>
                <li><a href="welcome.php ?>">Inicio</a></li>
                <li><a href="Paquetes.html">Paquetes</a></li>
                <li><a href="Complementos.html">Complementos</a></li>
                <li><a href="Cortes.html">Cortes</a></li>
                <li><a href="Bebidas.html">Bebidas</a></li>
                <li><a href="Contacto.html">Contacto</a></li>
        <?php echo "<h1>Bienvenido " . $_SESSION['username'] . "</h1>"; ?>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container_principal">
    <div class="Slider">
        <ul>
            <li>
                <img src="Imagenes/50OFF2.png"
                alt=""> 
            </li>
            <li>
            <img src="Imagenes/Pepsi121.png"
                alt=""> 
            </li>
            <li>
                <img src="Imagenes/3X22.png"
                alt="">
            </li>
            <li>
                <img src="Imagenes/TortillasOferta.png"
                alt="">
            </li>
        </ul>
    </div>
    
    


    <h1>Bebidas</h1>
    <div id="Titulo_1">
        <img width="250px" height="200px" src="Imagenes/Pepsi.jpg">
        <h5><br>Pepsi</h5>
        <p>355ml</p>
    </div>

    <div id="Titulo_2">
        <img width="250px" height="200px" src="Imagenes/Manzanita.jpg">
        <h5><br>Pepsi</h5>
        <p>355ml</p>
    </div>
    <div id="Titulo_3">
        <img width="250px" height="200px" src="Imagenes/Mirinda.jpg">
        <h5><br>Pepsi</h5>
        <p>355ml</p>
    </div>
    
    <div id="Imagen_Titulo_4">
        <img width="350px" height="200px" src="Imagenes/Sirloin.jpg">
    </div>

    <div id="Titulo_4">
        <h5><br>¡MEJOR PAQUETE!</h5>
        <p>3 Piezas Sirloin a solo $900!.</p>
    </div>
</div>

</body>
</html>