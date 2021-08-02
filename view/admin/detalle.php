<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, 
  initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
  <title>Detalle</title>
</head>

<body>
  <header></header>

    <section class="main" id="app">
    
        <section class="detalle" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="titulo-principal">Detalle</h3>
                    </div>
                </div>

                <section class="formulario" id="formulario">
                    <div class="container">
                        <div class="row">
                            <div class="row contenedor-formulario">
                                <div class="col-md-12">
                                    <!-- Formulario de denuncia animal-->
                                    <form name="formularioDenuncia" method="post" action="conexion.php"class="needs-validation contenido-formulario" novalidate>
                                        <!-- Titulo para la seccion informacion adicional -->
                                        <div class="form-row">
                                                <div class="col-md-1 huellas"></div>
                                                <div class="col-md-9">
                                                    <label class="subtitulo" for="informacion-adicional">Información  acerca de
                                                        los hechos</label>
                                                    <section class="informacion-adicional" id="informacion-adicional">
                                                        
                                                        <!-- Fila municipio y direccion -->
                                                        <div class="form-row">
                                                            <!-- Municipio -->
                                                            <div class="col-md-4">
                                                            <label for="message-text" id="col-municipio"class="col-form-label">Municipio</label>
                                                            <label for="message-text" name="municipio" id="municipio" class="form-control">Municipio</label>
                                                            </div>

                                                            <!-- Campo direccion de los hechos -->
                                                            <div class="col-8">
                                                            <label for="message-text" class="col-form-label">Dirección</label>
                                                            <label for="message-text" name="direccion" id="direccion" class="form-control">Dirección</label>
                                                            </div>
                                                        </div>

                                                        <!-- Fila del campo de texto descripcion de los hechos -->
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label for="message-text" class="col-form-label">Descripción</label>
                                                                <label for="message-text" name="descipcion" id="descipcion" class="form-control">Descripción</label>

                                                            </div>
                                                        </div>

                                                        <!-- Fila del campo adjuntar evidencias -->
                                                        <div class="form-row">
                                                        <div class="col-12">
                                                            <label for="message-text" class="col-form-label">Adjuntar evidencias del
                                                                maltrato</label>                                            
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
                                                                <label for="message-text" name="nombres" id="nombres" class="form-control">Nombres</label>

                                                            </div>
                                                        </div>

                                                        <!-- Fila del campo de texto apellidos -->
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label for="apellidos">Apellidos</label>
                                                                <label for="message-text" name="apellidos" id="apellidos" class="form-control">Apellidos</label>

                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-10">
                                                                <label for="update_tipo_documento">Documento de identidad</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <!-- Tipo documento -->
                                                            <div class="col-md-4">
                                                            <label for="message-text" id="col-tipoDocumento"class="col-form-label">Tipo de Documento</label>
                                                            <label for="message-text" name="tipoDoc" id="tipoDoc" class="form-control">Municipio</label>
                                                            </div>

                                                            <!-- Campo Documento -->
                                                            <div class="col-8">
                                                            <label for="message-text" class="col-form-label">Documento</label>
                                                            <label for="message-text" name="documento" id="documento" class="form-control">Documento</label>
                                                            </div>
                                                        </div>                                        

                                                        <!-- Fila del campo de texto correo electronico -->
                                                        <div class="form-row">
                                                            <div class="col-12">                                                
                                                            <label for="message-text" class="col-form-label">Correo electrónico</label>
                                                            <label for="message-text" name="email" id="email" class="form-control">email</label>
                                                            </div>

                                                        </div>

                                                        <!-- Fila del campo de texto numero telefonico -->
                                                        <div class="form-row">
                                                            <div class="col-12">                                                
                                                            <label for="message-text" class="col-form-label">Número telefónico</label>
                                                            <label for="message-text" name="num_telefonico" id="num_telefonico" class="form-control">Número</label>
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
                                                                    de
                                                                desnutrición?</label>
                                                                    <!-- Opciones de respuesta para la pregunta 1 -->
                                                                    <div class="form-row" id="pregunta1">
                                                                        <!-- Opcion 1 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio11" name="preguntaRadio1"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio11">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio12" name="preguntaRadio1"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio12">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio21" name="preguntaRadio2"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio21">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio22" name="preguntaRadio2"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio22">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio31" name="preguntaRadio3"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio31">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio32" name="preguntaRadio3"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio32">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio41" name="preguntaRadio4"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio41">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio42" name="preguntaRadio4"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio42">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio51" name="preguntaRadio5"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio51">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio52" name="preguntaRadio5"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio52">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio61" name="preguntaRadio6"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio61">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio62" name="preguntaRadio6"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio62">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio71" name="preguntaRadio7"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio71">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio72" name="preguntaRadio7"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio72">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio81" name="preguntaRadio8"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio81">Si</label>
                                                                        </div>

                                                                        <!-- Opcion 2 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
                                                                            <!-- Radio button -->
                                                                            <input type="radio" id="preguntaRadio82" name="preguntaRadio8"
                                                                                class="custom-control-input">
                                                                            <!-- texto de la opcion -->
                                                                            <label class="custom-control-label" for="preguntaRadio82">No</label>
                                                                        </div>
                                                                        <!-- Opcion 3 -->
                                                                        <div class="wrap custom-control custom-radio custom-control-inline">
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
                                                    </div>
                                                <div class="col-md-1 huellas2"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>  
                            </div>
                        </div>                    
                    </div>
                    <!-- Contenedor de los botones de navegacion -->
                    <div class="contenedor-btns">
                        <a class="boton detalle" href="#" data-toggle="modal" data-target="#ModalCreate">Asignar reporte</a>
                    </div>

                    <section class="registrar_usuario">
                            <div class="modal fade" id="ModalCreate" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="container">
                                            <!-- Header del recuadro Asignar Agente -->
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalCreateLabel">Asignar agente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form name="formularioUsuario"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"
                                                    class="needs-validation contenido-formulario" novalidate>
                                                        <!-- Fila del campo de nombres de los agentes -->
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                            <label for="nombre">Agentes</label>
                                                            <input name = "nombres" type="text" class="form-control" id="nombres"
                                                                placeholder="Nombre(s)" required>
                                                            </div>
                                                        </div>                              

                                                        <!-- Fila de botones -->
                                                        <div class="form-row botones">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <button class="btn btn-primary" type="submit" name="submit_button" @click="createUser()">Asignar</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>  

                </section>

                <section>
                    <div class="container progress-bar1">
                        <div class="paso">
                            <p>Radicado</p>
                            <div class="num">
                            <span>1</span>
                            </div>  
                            <div class="check fas fa-check"></div>
                        </div>      
                        <div class="paso">
                            <p>Recibido</p>
                            <div class="num">
                            <span>2</span>
                            </div>  
                            <div class="check fas fa-check"></div>
                        </div>         
                        <div class="paso">
                            <p>Atendido</p>
                            <div class="num">
                            <span>3</span>
                            </div>  
                            <div class="check fas fa-check"></div>
                        </div>  
                        <div class="paso">
                            <p>Solucionado/Descartado</p>
                            <div class="num">
                            <span>4</span>
                            </div>  
                            <div class="check fas fa-check"></div>
                        </div>  
                        <div class="paso">
                            <p>Escalado a otro ente</p>
                            <div class="num">
                            <span>5</span>
                            </div>  
                            <div class="check fas fa-check"></div>
                        </div>                          
                    </div>
                </section>

            </div>
        </section>

    </section>

    <footer></footer>

<!-- Vue.js 2.5.16 -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

<!-- Axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>

<script src="../../controller/admin_history.js"></script>

<script src="js/util.js"></script>


</body>

</html>