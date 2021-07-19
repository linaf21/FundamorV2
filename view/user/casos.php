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
        <section class="casos" id="casos">
            <div class="contenedor-datos">
                <div class="row texto">
                    <!-- Contenedor del titulo -->
                    <div class="col-12 col-md-12">
                        <h2 class="titulo-casos">Consultar casos</h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <!-- Fila del campo de ID reporte -->
                    <div class="form-row">
                        <div class="col-md-1 huellas"></div>
                            <div class="col-md-9 reporte">
                            <label for="id_reporte">ID de Reporte</label>
                                <input name="id_Reporte" type="text" class="form-control"
                                    id="id_Reporte" placeholder="Ingrese el ID del Reporte" required>
                            </div>
                    </div>

                    <!-- Fila del campo de ID reporte -->
                    <div class="form-row">
                        <div class="col-md-1 huellas"></div>
                        <div class="col-md-9 pass">
                            <label for="pass_report">Contraseña del Reporte</label>
                                <input name="pass_report" type="text" class="form-control"
                                    id="pass_report" placeholder="Ingrese la contraseña del reporte" required>
                        </div>
                    </div>
                </div>

                <!-- Contenedor de los botones de navegacion -->
                <div class="contenedor-btns">
                    <a class="boton consultar" id="btn-consultar" href="#">Consultar</a>
                </div>
            </div>

            <div class="progress-bar1">
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
    </section>  

    <!-- Seccion  footer de la pagina web -->
    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/efectos.js"></script>
    <script src="js/util.js"></script>
</body>

</html>