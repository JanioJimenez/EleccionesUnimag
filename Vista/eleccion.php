<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votaciones</title>
    <script src="js/jquery-3.3.1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/targeton.css">
</head>

<body>

    <?php
        session_start();
        echo $_SESSION['usuario'];  
    ?>

    <div class="contenedor">
        <div class="caja_titulo">
            <div class="banderaIzq">
                <img src="../imagenes/banIzq.png" alt="">
            </div>
            <div class="titulo">
                <h1>VOTO PARA LA FÓRMULA DE PRESIDENTE Y VICEPRESIDENTE DE LA REPÚBLICA</h1>
            </div>
            <div class="banderaDer">
                <img src="../imagenes/banDer.png" alt="">
            </div>
        </div>

        <div id="elecciones" class="fondoTargeton">

            <div id="targeton1" class="Contenedor_targeton">
                <div class="voto1">
                    <div class="partidos">
                        <div class="partidoP">
                            <img src="../imagenes/partidos/logoCentro.png">
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>PRESIDENTE</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>VICEPRESIDENTE</h5>
                        </div>
                    </div>
                    <div class="foto">
                        <div class="fondoCuadrado">
                            <div class="cuadroP">
                                <div class="fotoP">
                                    <img src="../imagenes/candidatos/duque.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="espacio"></div>
                        <div class="fondoCuadrado1">
                            <div class="cuadroV">
                                <div class="fotoV">
                                    <img src="../imagenes/candidatos/marta.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>IVAN DUQUE</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>MARTA LUCIA</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div id="targeton2" class="Contenedor_targeton">
                <div class="voto2">
                    <div class="partidosA">
                        <div class="partidoH">
                            <img src="../imagenes/partidos/logoPetro.png">
                        </div>
                        <div class="partidoV">
                            <img src="../imagenes/partidos/logoVerde.png" alt="">
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>PRESIDENTE</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>VICEPRESIDENTE</h5>
                        </div>
                    </div>
                    <div class="foto">
                        <div class="fondoCuadrado">
                            <div class="cuadroP">
                                <div class="fotoP">
                                    <img src="../imagenes/candidatos/petro.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="espacio"></div>
                        <div class="fondoCuadrado1">
                            <div class="cuadroV">
                                <div class="fotoV">
                                    <img src="../imagenes/candidatos/maria.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>GUSTAVO PETRO</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>MARIA ROBLEDO</h5>
                        </div>
                    </div>
                </div>
            </div>


            <div id="targeton3" class="Contenedor_targeton">
                <div class="voto3">
                    <div class="partidosA">
                        <div class="partidoH">
                            <img class="imgP" src="../imagenes/partidos/mejor.png">
                        </div>
                        <div class="partidoV">
                            <img src="../imagenes/partidos/partidoU.png" alt="">
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>PRESIDENTE</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>VICEPRESIDENTE</h5>
                        </div>
                    </div>
                    <div class="foto">
                        <div class="fondoCuadrado">
                            <div class="cuadroP">
                                <div class="fotoP">
                                    <img src="../imagenes/candidatos/vargas.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="espacio"></div>
                        <div class="fondoCuadrado1">
                            <div class="cuadroV">
                                <div class="fotoV">
                                    <img src="../imagenes/candidatos/pinzon.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>VARGAS LLERAS</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>JUAN PINZON</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div id="targeton4" class="Contenedor_targeton">
                <div class="voto4">
                    <div class="partidosA">
                        <div class="partidoH">
                            <img src="../imagenes/partidos/logoVerde.png">
                        </div>
                        <div class="partidoV">
                            <img src="../imagenes/partidos/logoVerde.png" alt="">
                        </div>
                    </div>
                    <div class="administrador adm">
                        <div class="presidente">
                            <h5>PRESIDENTE</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>VICEPRESIDENTE</h5>
                        </div>
                    </div>
                    <div class="foto">
                        <div class="fondoCuadrado">
                            <div class="cuadroP">
                                <div class="fotoP">
                                    <img src="../imagenes/candidatos/fajardo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="espacio"></div>
                        <div class="fondoCuadrado1">
                            <div class="cuadroV">
                                <div class="fotoV">
                                    <img src="../imagenes/candidatos/claudia.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>SERGIO FAJARDO</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>CLAUDIA LÓPEZ</h5>
                        </div>
                    </div>
                </div>
            </div>


            <div id="targeton5" class="Contenedor_targeton">
                <div class="voto5">
                    <div class="partidosA">
                        <div class="partidoH">
                            <img src="../imagenes/partidos/liberal.png">
                        </div>
                        <div class="partidoV">
                            <img class="imgP" src="../imagenes/partidos/polo.png" alt="">
                        </div>
                    </div>
                    <div class="administrador adm">
                        <div class="presidente">
                            <h5>PRESIDENTE</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>VICEPRESIDENTE</h5>
                        </div>
                    </div>
                    <div class="foto">
                        <div class="fondoCuadrado">
                            <div class="cuadroP">
                                <div class="fotoP">
                                    <img src="../imagenes/candidatos/calle.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="espacio"></div>
                        <div class="fondoCuadrado1">
                            <div class="cuadroV">
                                <div class="fotoV">
                                    <img src="../imagenes/candidatos/clara.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="administrador">
                        <div class="presidente">
                            <h5>HUMBERTO DE LA CALLE</h5>
                        </div>
                        <div class="mitad"></div>
                        <div class="vicepresidente">
                            <h5>CLARA LÓPEZ</h5>
                        </div>
                    </div>
                </div>
            </div>


            <div id="targeton6" class="Contenedor_targeton">
                <div class="voto6">
                    <h2 class="votoB">VOTO EN BLANCO</h2>
                </div>
            </div>
            <div id="confir" class="fondoConfirmar">
                <div class="confirmar">
                    <div class="tituloConfirmar">
                        <span>Estas seguro de su elección!</span>
                    </div>
                    <div class="marque1">
                        <img class="marca1" src="../imagenes/votar/marque1.png" alt="">
                        <img class="marca2" src="../imagenes/votar/marque2.png" alt="">
                        <img class="marca3" src="../imagenes/votar/marque3.png" alt="">
                        <img class="marca4" src="../imagenes/votar/marque4.png" alt="">
                        <img class="marca5" src="../imagenes/votar/marque5.png" alt="">
                        <img class="marca6" src="../imagenes/votar/marque6.png" alt="">
                    </div>
                    <div class="opcion1">
                        <input type="button" value="Cancelar" id="cancelar">
                    </div>
                    <div class="opcion2">
                        <input type="button" value="Aceptar" id="aceptar">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="js/evento.js"></script>
</body>


</html>