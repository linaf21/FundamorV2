<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <title>Denunciar Maltrato Animal</title>
</head>

<body>
    <?php
     require_once("../../controller/reportes_controlador.php");
                                                       
    ?>
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
                            <img class="img-responsive" src="img/caballo_denuncia.png" alt="">
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
                
                <div class="form-row boton-anonimo">
                    <button class="btn btn-primary" onclick="desactivarCampos()">Reporte anónimo</button> 
                </div>
                <!-- Contenedor general del formulario -->
                <div class="row contenedor-formulario">
                    <div class="col-md-12">                    
                        <!-- Formulario de denuncia animal-->
                        <form name="formularioDenuncia"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"
                         class="needs-validation contenido-formulario" novalidate>
                            
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
                                                    <select  class="form-control" id="select_usuario" name="select_usuario" required>
                                                        <option  value="">Municipio</option>                                                     
                                                        <?php
                                                            foreach($matrizMunicipios as $registro)
                                                            {
                                                                echo '<option value="'.$registro["id_municipio"].'">'.$registro["descripcion"].'</option>';
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
                                                <div class="col-12">
                                                    <label for="message-text" class="col-form-label">Descripción</label>
                                                    <textarea class="form-control" id="message-text" name="descripcion_reporte"
                                                        placeholder="Descripción de lo hechos" required></textarea>
                                                </div>
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
                                                            id="invalidCheck">
                                                        <label class="form-check-label" for="invalidCheck">
                                                            He leído y acepto los términos y condiciones
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="container col-md-9">
                                        <!-- Titulo para la seccion tipo de denuncia -->
                                        <label class="subtitulo" for="tipo-denuncia">Tipo de denuncia</label>
                                        <section class="tipo-denuncia" id="tipo-denuncia">
                                            <!-- Fila del campo de texto nombre(s) -->
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <label for="nombre">Nombre(s)</label>
                                                    <input name="nombres_denunciante" type="text" class="form-control"
                                                        id="nombres"  placeholder="Nombre(s)" required>
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
                                                        id="tipo_documento" name="tipo_documento" required>
                                                        <option selected value="">Tipo de documento</option>
                                                        <?php
                                                            foreach($matrizDocumentos as $registro)
                                                            {
                                                                echo '<option value="'.$registro["id_tipo_documento"].'">'.$registro["descripcion"].'</option>';
                                                            } 
                                                        ?>
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
                                            <div class="container col-md-9">
                                                <label class="subtitulo" for="condiciones-animal">Condiciones del animal</label>
                                                <section class="condiciones-animal" id="condiciones-animal">
                                                    <!-- Enunciado de la pregunta -->
                                                    <label for="pregunta1">1. ¿El animal sufre de hambre o sed, presenta síntomas
                                                        de desnutrición?</label>
                                                        <!-- Opciones de respuesta para la pregunta 1 -->
                                                        <div class="form-row" id="pregunta1">
                                                            <!-- Opcion 1 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio11" name="hambre_sed"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio11">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio12" name="hambre_sed"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio12">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio13" name="hambre_sed"
                                                                    class="custom-control-input" value="No responde" required>
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
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio21" name="malestar_fisico"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio21">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio22" name="malestar_fisico"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio22">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio23" name="malestar_fisico"
                                                                    class="custom-control-input" value="No responde" required>
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
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio31" name="negligencia"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio31">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio32" name="negligencia"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio32">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio33" name="negligencia"
                                                                    class="custom-control-input" value="No responde" required>
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
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio41" name="miedo_estres"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio41">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio42" name="miedo_estres"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio42">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio43" name="miedo_estres"
                                                                    class="custom-control-input" value="No responde" required>
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
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio51" name="comportamiento_natural"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio51">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio52" name="comportamiento_natural"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio52">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio53" name="comportamiento_natural"
                                                                    class="custom-control-input" value="No responde" required>
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
                                                            <!-- Opción 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio61" name="agresion_fisica"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio61">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio62" name="agresion_fisica"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio62">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio63" name="agresion_fisica"
                                                                    class="custom-control-input" value="No responde" required>
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
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio71" name="agresion_verbal"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio71">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio72" name="agresion_verbal"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio72">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio73" name="agresion_verbal"
                                                                    class="custom-control-input" value="No responde" required>
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
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio81" name="bienestar_animal"
                                                                    class="custom-control-input" value="Si" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio81">Si</label>
                                                            </div>

                                                            <!-- Opcion 2 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio82" name="bienestar_animal"
                                                                    class="custom-control-input" value="No" required>
                                                                <!-- texto de la opcion -->
                                                                <label class="custom-control-label" for="preguntaRadio82">No</label>
                                                            </div>
                                                            <!-- Opcion 3 -->
                                                            <div class="wrap custom-control custom-radio custom-control-inline">
                                                                <!-- Radio button -->
                                                                <input type="radio" id="preguntaRadio83" name="bienestar_animal"
                                                                    class="custom-control-input" value="No responde" required>
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
                                    <button class="btn btn-primary" type="submit" name="submit_button">Enviar formulario</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </section>

    </section>

    <footer></footer>
    <script type="text/javascript">
        function desactivarCampos()
        {
            document.getElementById('nombres').disabled=true;
            document.getElementById('apellidos').disabled=true;
            document.getElementById('tipo_documento').disabled=true;
            document.getElementById('numero_documento').disabled=true;
            document.getElementById('correo_electronico').disabled=true;
            document.getElementById('numero_telefonico').disabled=true;
        }
    </script>
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/util.js"></script>    
    <script src="js/validaciones.js"></script>

</body>

</html>