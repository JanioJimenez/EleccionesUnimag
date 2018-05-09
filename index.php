<!DOCTYPE html> 
<html>

<head>
    <meta charset="utf-8">
    <title>Elecciones 2018</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <script src="Vista/js/jquery-3.3.1.js"></script>
</head>

<body>
    <header class="encabezado">
        <div class="logo"></div>
        
        <div class="menu">
            <div class="centrarMenu">
                <span id="clic" class="iniciar">Iniciar sesión</span>
                <div class="cajaJurado">
                <span id="inicioJurado" class="jurado">Jurado</span>
                </div>
            </div>
            
        </div>
    </header>
    <div id="display" class="fondoTransparente">
        <form action="Controlador/Action/login.php" method="POST">
            <div  class="formulario">
                <input type="button" value="X" id="cerrar">
                <div class="regis"></div>
                <div class="unimag">Unimagdalena</div>
                <input type="number" placeholder="Código" required class="barra" id="cedula" name="usuario">
                <input type="password" placeholder="Contraseña" required class="barra" id="contraseña" name="clave">
                <span id="errorUsuario">Usuario o contraseña invalido!</span>
                <input type="submit" value="Aceptar" id="enviar">
            
           
            </div>
        </form>
    </div>

</body>
<script src="Vista/js/evento.js"></script>

</html>