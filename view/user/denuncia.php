<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3b5ef9eb52.js" crossorigin="anonymous"></script>
    <!--font-family: 'Alegreya', serif;-->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- font-family: 'Lato', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <title>Denunciar Maltrato Animal</title>
</head>

<body>
    <header></header>
    
    <section class="iniciar_sesion"></section>


    <section class="main">
        <section class="descripcion_pagina" id="descripcion_pagina">
            <!-- Contenedor de la seccion "Conoce mas" -->
            <div class="container">
                <!-- Contenedor del titulo principal -->
                <div class="row texto">
                    <!-- Contenedor del titulo -->
                    <div class="col-12 col-md-12">
                        <h2 class="titulo2">Haz aquí tu denuncia</h2>
                    </div>
                </div>

                <!-- Contenedor de la descripcion principal y botones de navegacion -->
                <div class="row descripcion">
                    <!-- Contenedor de la descripcion -->
                    <div class="col-12 col-lg-6">
                        <!-- Descripcion principal de la pagina -->
                        <h3 class="sub_parrafo">Diligencia el siguiente formulario para que las autoridades competentes
                            inicien el proceso de intervención ante el caso de maltrato</h3>
                    </div>

                    <!-- Contenedor principal de la foto del header -->
                    <div class="col-lg-6">
                        <!-- Contenedor y foto del header -->
                        <div class="foto_denuncia">
                            <img class="img-responsive" src="img/perro_denuncia.jpg" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="formulario" id="formulario">
            <div class="container">
                <!-- Contenedor del titulo -->
                <div class="row texto">
                    <!-- Contenedor y titulo -->
                    <div class="col-md-12">
                        <h3 class="titulo">Formulario de denuncia</h3>
                    </div>
                </div>

                <!-- Contenedor general del formulario -->
                <div class="row contenedor-formulario">
                    <div class="col-md-12">
                        <!-- Formulario de denuncia animal-->
                        <form name="formularioDenuncia" method="GET" action="capturar.php"class="needs-validation contenido-formulario" novalidate>
                        <!-- Titulo para la seccion informacion adicional -->
                        <div class="form-row">
                                <div class="col-md-1 huellas"></div>
                                <div class="col-md-9">
                                    <label class="subtitulo" for="informacion-adicional">Información  acerca de
                                        los hechos</label>
                                    <section class="informacion-adicional" id="informacion-adicional">
                                        <div class="form-row">
                                            <div class="col-10">
                                                <label for="lugar_hechos">Lugar de los hechos</label>
                                            </div>
                                        </div>

                                        <!-- Fila municipio y direccion -->
                                        <div class="form-row">
                                            <!-- Tipo de documento -->
                                            <div class="col-md-4">
                                                <select  class="form-control" id="select_usuario" >
                                                    <option value="">Municipio</option>     
                                                    <?php
                                                    
                                                    require '../conector/conexion.php';
                                                    $sql_s = mysql_query("SELECT descripcion FROM tipo_documento ORDER BY id_tipo_documento");
                                                    while ($row_s = mysql_fetch_array($sql_s))
                                                    {
                                                        $id_tipo_documento = $row_s['id_tipo_documento'];
                                                        $descripcion = $row_s['descripcion'];
                                                        ?>  
                                                        <option value="<?php echo $id_tipo_documento; ?>"><?php echo $nombre; ?></option>
                                                        
                                                        <?php
                                                    }
                                                    ?>                                   
                                                </select>
                                            </div>

                                            <!-- Campo direccion de los hechos -->
                                            <div class="col-8">
                                                <input name="direccion" type="text"
                                                    class="form-control" id="direccion_hechos"
                                                    placeholder="Dirección de los hechos" required>
                                            </div>
                                        </div>

                                        <!-- Fila del campo de texto descripcion de los hechos -->
                                        <div class="form-row">
                                            <dic class="col-12">
                                                <label for="message-text" class="col-form-label">Descripción</label>
                                                <textarea class="form-control" id="message-text"
                                                    placeholder="Descripción de lo hechos" required></textarea>
                                            </dic>
                                        </div>

                                        <!-- Fila del campo adjuntar evidencias -->
                                        <div class="form-row">
                                            <label for="inputGroupFile03" class="col-form-label">Adjuntar evidencias del
                                                maltrato</label>
                                            <div class="custom-file">
                                                <input name="url"type="file" class="custom-file-input" id="inputGroupFile03"
                                                    aria-describedby="inputGroupFileAddon03">
                                                <label class="custom-file-label" for="inputGroupFile03">Elegir archivo</label>
                                            </div>
                                        </div>

                                        <!-- Fila del checkbox terminos y condiciones -->
                                        <div class="form-row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        He leído y acepto los términos y condiciones
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-1 vacio"></div>

                                <div class="col-md-1 vacio"></div>
                                <div class="col-md-9">
                                    <!-- Titulo para la seccion tipo de denuncia -->
                                    <label class="subtitulo" for="tipo-denuncia">Tipo de denuncia</label>
                                    <section class="tipo-denuncia" id="tipo-denuncia">
                                        <!-- Fila del campo de texto nombre(s) -->
                                        <div class="form-row">
                                            <div class="col-12">
                                                <label for="nombre">Nombre(s)</label>
                                                <input name="nombres_denunciante" type="text" class="form-control"
                                                    id="validationCustom01" placeholder="Nombre(s)" required>
                                            </div>
                                        </div>

                                        <!-- Fila del campo de texto apellidos -->
                                        <div class="form-row">
                                            <div class="col-12">
                                                <label for="apellidos">Apellidos</label>
                                                <input name="apellidos_denunciante" type="text" class="form-control"
                                                    id="apellidos" placeholder="Apellidos" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-10">
                                                <label for="update_tipo_documento">Documento de identidad</label>
                                            </div>
                                        </div>

                                        <!-- Fila tipo de documento y numero de documento -->
                                        <div class="form-row">
                                            <!-- Tipo de documento -->
                                            <div class="col-md-4">
                                                <select v-model="newUser.document_type" class="custom-select"
                                                    id="tipo_documento" required>
                                                    <option selected value="">Tipo de documento</option>
                                                    <option v-for="document_type in document_types">
                                                        {{ document_type.descripcion }}</option>
                                                </select>
                                            </div>

                                            <!-- Campo numero de documento -->
                                            <div class="col-8">
                                                <input name="documento_identidad_denunciante" type="text"
                                                    class="form-control" id="numero_documento"
                                                    placeholder="Número de documento" required>
                                            </div>
                                        </div>

                                        <!-- Fila del campo de texto correo electronico -->
                                        <div class="form-row">
                                            <div class="col-12">
                                                <label for="correo_electronico">Correo Electrónico</label>
                                                <input name="email_denunciante" type="text" class="form-control"
                                                    id="correo_electronico" placeholder="Correo electrónico" required>
                                            </div>

                                        </div>

                                        <!-- Fila del campo de texto numero telefonico -->
                                        <div class="form-row">
                                            <div class="col-12">
                                                <label for="numero_telefonico">Número telefónico</label>
                                                <input name="telefono_denunciante" type="text"
                                                    class="form-control" id="numero_telefonico"
                                                    placeholder="Número telefónico" required>
                                            </div>
                                        </div>
                                    </section>                               

                                    <!-- Titulo para la seccion condiciones del animal -->   
                                    <div class="form-row">
                                        <div class="col-md-1 vacio"></div>
                                        <div class="col-md-9">
                                            <label class="subtitulo" for="condiciones-animal">Condiciones del animal</label>
                                            <section class="condiciones-animal" id="condiciones-animal">
                                                <!-- Enunciado de la pregunta -->
                                                <label for="pregunta1">1. ¿El animal sufre de hambre o sed, presenta síntomas
                                                    de
                                            desnutrición?</label>
                                        <!-- Opciones de respuesta para la pregunta 1 -->
                                        <div class="form-row" id="pregunta1">
                                            <!-- Opcion 1 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio11" name="preguntaRadio1"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio11">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio12" name="preguntaRadio1"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio12">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio13" name="preguntaRadio1"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio13">No
                                                    responde</label>
                                            </div>
                                        </div>

                                        <!-- Enunciado de la pregunta -->
                                        <label for="pregunta2">2. ¿El animal sufre injustificadamente malestar físico o
                                            dolor?</label>
                                        <!-- Opciones de respuesta para la pregunta 2 -->
                                        <div class="form-row" id="pregunta2">
                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio21" name="preguntaRadio2"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio21">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio22" name="preguntaRadio2"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio22">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio23" name="preguntaRadio2"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio23">No
                                                    responde</label>
                                            </div>
                                        </div>

                                        <!-- Enunciado de la pregunta -->
                                        <label for="pregunta3">3. ¿El animal sufre de enfermedades por negligencia o
                                            descuido?</label>
                                        <!-- Opciones de respuesta para la pregunta 3 -->
                                        <div class="form-row" id="pregunta3">
                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio31" name="preguntaRadio3"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio31">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio32" name="preguntaRadio3"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio32">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio33" name="preguntaRadio3"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio33">No
                                                    responde</label>
                                            </div>
                                        </div>

                                        <!-- Enunciado de la pregunta -->
                                        <label for="pregunta4">4. ¿El animal es sometido a condiciones de miedo o
                                            estrés?</label>
                                        <!-- Opciones de respuesta para la pregunta 4 -->
                                        <div class="form-row" id="pregunta4">
                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio41" name="preguntaRadio4"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio41">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio42" name="preguntaRadio4"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio42">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio43" name="preguntaRadio4"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio43">No
                                                    responde</label>
                                            </div>
                                        </div>

                                        <!-- Enunciado de la pregunta -->
                                        <label for="pregunta5">5. ¿El espacio donde se encuentra ubicado el animal es
                                            adecuado
                                            para que este se exprese de forma natural ?</label>
                                        <!-- Opciones de respuesta para la pregunta 5 -->
                                        <div class="form-row" id="pregunta5">
                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio51" name="preguntaRadio5"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio51">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio52" name="preguntaRadio5"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio52">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio53" name="preguntaRadio5"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio53">No
                                                    responde</label>
                                            </div>
                                        </div>

                                        <!-- Enunciado de la pregunta -->
                                        <label for="pregunta6">6. ¿El responsable del animal lo agrede de forma
                                            física?</label>
                                        <!-- Opciones de respuesta para la pregunta 6 -->
                                        <div class="form-row" id="pregunta6">
                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio61" name="preguntaRadio6"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio61">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio62" name="preguntaRadio6"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio62">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio63" name="preguntaRadio6"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio63">No
                                                    responde</label>
                                            </div>
                                        </div>

                                        <!-- Enunciado de la pregunta -->
                                        <label for="pregunta7">7.¿El responsable del animal lo agrede de forma
                                            verbal?</label>
                                        <!-- Opciones de respuesta para la pregunta 7 -->
                                        <div class="form-row" id="pregunta7">
                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio71" name="preguntaRadio7"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio71">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio72" name="preguntaRadio7"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio72">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio73" name="preguntaRadio7"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio73">No
                                                    responde</label>
                                            </div>
                                        </div>


                                        <!-- Enunciado de la pregunta -->
                                        <label for="pregunta8">8. ¿El responsable del animal cuenta con la capacidad de
                                            brindar
                                            bienestar al animal?</label>
                                        <!-- Opciones de respuesta para la pregunta 8 -->
                                        <div class="form-row" id="pregunta8">
                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio81" name="preguntaRadio8"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio81">Si</label>
                                            </div>

                                            <!-- Opcion 2 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio82" name="preguntaRadio8"
                                                    class="custom-control-input">
                                                <!-- texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio82">No</label>
                                            </div>
                                            <!-- Opcion 3 -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <!-- Radio button -->
                                                <input type="radio" id="preguntaRadio83" name="preguntaRadio8"
                                                    class="custom-control-input">
                                                <!-- Texto de la opcion -->
                                                <label class="custom-control-label" for="preguntaRadio83">No
                                                    responde</label>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                                <div class="col-md-1 huellas2"></div>
                            </div>
                                                 

                            <div class="form-row boton">
                                <button class="btn btn-primary" type="submit">Enviar formulario</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>


            </div>

        </section>

    </section>

    <footer></footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/util.js"></script>

</body>

</html>