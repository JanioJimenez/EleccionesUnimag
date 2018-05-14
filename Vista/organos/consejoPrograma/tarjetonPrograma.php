<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votaciones</title>
    <script src="../../js/jquery-3.3.1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/stilos.css">
</head>

<body>

    <?php
        session_start();  
    ?>

    <div class="encabezado">
        <div class="caja_titulo">
            <div class="logoU">
                <img src="../../../imagenes/logoU.png" alt="">
            </div>
            <div class="titulo">
                <h1>VOTO PARA LA FÓRMULA DEL CONSEJO DE PROGRAMA</h1>
            </div>
            <div class="logoIn">
                <img src="../../../imagenes/logoInnovador.png" alt="">
            </div>
        </div>

        
    </div>

    <div class="contenedor">


        <div id="elecciones" class="fondoTargeton">

            <div id="targeton1" class="Contenedor_targeton">
                <div class="ajustar"></div>
                <div class="centro"><h2>Opción 1</h2></div>
                <div class="ajustar"></div>
            </div>

            <div id="targeton2" class="Contenedor_targeton">
                <div class="ajustar"></div>
                <div class="centro"><h2>Opción 2</h2></div>
                <div class="ajustar"></div>
            </div>

            <div id="targeton3" class="Contenedor_targeton">
                <div class="ajustar"></div>
                <div class="centro"><h2>Opción 3</h2></div>
                <div class="ajustar"></div>
            </div>

            <div id="targeton4" class="Contenedor_targeton">
                <div class="ajustar"></div>
                <div class="centro"><h2>Opción 4</h2></div>
                <div class="ajustar"></div>
            </div>

            <div id="targeton5" class="Contenedor_targeton">
                <div class="ajustar"></div>
                <div class="centro"><h2>Opción 5</h2></div>
                <div class="ajustar"></div>
            </div>

            <div id="targeton6" class="Contenedor_targeton">
                <div class="ajustarB"></div>
                <div class="centroB"><h2>VOTO EN BLANCO</h2></div>
                <div class="ajustarB"></div>
            </div>

            <div id="confir" class="fondoConfirmar">
                <div class="confirmar">
                    <div class="cajaConfirmar">
                        <span class="tituloConfirmar">Estas seguro de su elección!</span>
                    </div>
                    <div class="marque1">
                        <div class="marca1">
                            <div class="opcionConfirmar">
                                <div class="ajustar"></div>
                                <div class="centroOpcion"><h2>Opción 1</h2></div>
                                <div class="ajustar"></div>
                            </div>
                        </div>

                        <div class="marca2">
                            <div class="opcionConfirmar">
                                <div class="ajustar"></div>
                                <div class="centroOpcion"><h2>Opción 2</h2></div>
                                <div class="ajustar"></div>
                            </div>
                        </div>

                        <div class="marca3">
                            <div class="opcionConfirmar">
                                <div class="ajustar"></div>
                                <div class="centroOpcion"><h2>Opción 3</h2></div>
                                <div class="ajustar"></div>
                            </div>
                        </div>

                        <div class="marca4">
                            <div class="opcionConfirmar">
                                <div class="ajustar"></div>
                                <div class="centroOpcion"><h2>Opción 4</h2></div>
                                <div class="ajustar"></div>
                            </div>
                        </div>

                        <div class="marca5">
                            <div class="opcionConfirmar">
                                <div class="ajustar"></div>
                                <div class="centroOpcion"><h2>Opción 5</h2></div>
                                <div class="ajustar"></div>
                            </div>
                        </div>

                        <div class="marca6">
                            <div class="opcionVotoBlanco">
                                <div class="ajustarB"></div>
                                 <div class="centroB"><h2>VOTO EN BLANCO</h2></div>
                                 <div class="ajustarB"></div>
                            </div>
                        </div>
                        

                    </div>
                    <div class="opcionCancelar">
                        <input type="button" value="Cancelar" id="cancelar">
                    </div>
                    <div class="opcionAceptar">
                        <input type="button" value="Aceptar" id="aceptar">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/evento.js"></script>
</body>


</html>