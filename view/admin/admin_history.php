<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, 
  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
  <title>Historial</title>
</head>

<body>
  <?php
     require_once("../../controller/historial_admin_controler.php");                                                       
  ?>
  <header></header>

  <section class="main" id="app">
    
    <section class="historial" >
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <h3 class="titulo-principal">Historial</h3>
          </div>
        </div>

        <div class="col-md-12">
            <form class = "form_search">  
              <input class="input_form" type = "text" name = "busqueda" id = "busqueda" placeholder = "Buscar historial" required size="45">
            </form>
        </div>
        
        <div class="row">

          <div class="table-responsive col-md-12">
            <table class="table">
              <thead>
                <tr class="col-md-3 titulos">        
                  <th scope="col">ID Reporte</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Municipio</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Detalle</th>        
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach($matrizReportes as $registro)
                  {
                ?>
                <tr class="text-center contenido" v-for="register in registers">
                  <th><?php echo $registro[0]?></th>
                  <th><?php echo $registro[1]?></th>
                  <th><?php echo $registro[2]?></th>
                  <th><?php echo $registro[3]?></th>
                  <th><?php echo $registro[4]?></th>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
            <!-- Contenedor de los botones de navegacion -->
            <div class="contenedor-btns">
            <a class="boton detalle" href="detalle.php">Ver detalle</a>
            </div>
          </div>
        </div>
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