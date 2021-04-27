<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>EvidenciaFinal</title>
  </head>
  <body style="background-color:#353a40;">

<?php
  $host = "localhost";
  $username = "app";
  $password = "app";

  $database = "heroica_database";

  $conn = new  mysqli($host, $username, $password, $database); //creamos un objeto $conn

  if ($conn->connect_error) {//hay errores?
    //mysql_fatal_error();//si los hay  ejecuta esta funcion!
    die($conn->connect_error);  //si los hay terminemos este asunto :(
  }
?>




    <button id="back-to-top-btn" type='button'><span style='font-family: Montserrat'>↑</span></button>

    <nav class="navbar navbar-fixed-top navbar-light navbar-expand-sm navbar-template navbar navbar-dark bg-dark">
      <a class="navbar-brand">
        <img id='inicio' src="img/LogoMain.png" width="119.6352" height="55.552" alt="">
      </a>
      <div class="d-flex felx-row order-2 order-sm-3">
        <ul class="navbar-nav flex-row">
          <li class="nav-item"><a class="nav-link px-2" href="https://www.facebook.com/heroica.beer/" width=100px height=100px><i class="	fa fa-facebook-f"></i></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.instagram.com/heroica.beer/"><i class="fa fa-instagram"></i></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20el%20catalogo%20y%20precios"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse order-3 order-sm-2" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav=item active"><a class="nav-link">Historia</a></li>
          <li class="nav=item"><a class="nav-link" href="#catalogo">Catálogo</a></li>
          <li class="nav=item"><a class="nav-link" href="#map">Visítanos</a></li>
        </ul>
      </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            
            <?php

              $_query = "SELECT texto FROM historia WHERE id = 2";//query de SQL
              $result = $conn->query($_query); //objeto nuevo

              if (!$result){//revisamos errores
                die($conn->error);
              }

              $rows = $result->num_rows; //checamos los rows de informacion

              for ($j = 0 ; $j < $rows ; ++$j) //un loop, lo recuerdas?
              {
                $result->data_seek($j);//buscamos la informacion del renglon
                $row = $result->fetch_array(MYSQLI_ASSOC);//regresa la información foramateada
                  //codigo que repetimos

                echo '<h6 class="text-light bg-dark">' . $row['texto'] . '</h6>';
              }

              $result->close();
            ?>
            
            <img  src="img/HeroicaNBG.png" width="119.6352" height="55.552" alt="">
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <?php

              $_query = "SELECT texto FROM historia WHERE id = 3";//query de SQL
              $result = $conn->query($_query); //objeto nuevo

              if (!$result){//revisamos errores
                die($conn->error);
              }

              $rows = $result->num_rows; //checamos los rows de informacion

              for ($j = 0 ; $j < $rows ; ++$j) //un loop, lo recuerdas?
              {
                $result->data_seek($j);//buscamos la informacion del renglon
                $row = $result->fetch_array(MYSQLI_ASSOC);//regresa la información foramateada
                  //codigo que repetimos

                echo '<h6>' . $row['texto'] . '</h6>';
              }

              $result->close();

            ?>
            <img  src="img/HeroicaNBG.png" width="119.6352" height="55.552" alt="">
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <?php

              $_query = "SELECT texto FROM historia WHERE id = 4";//query de SQL
              $result = $conn->query($_query); //objeto nuevo

              if (!$result){//revisamos errores
                die($conn->error);
              }

              $rows = $result->num_rows; //checamos los rows de informacion

              for ($j = 0 ; $j < $rows ; ++$j) //un loop, lo recuerdas?
              {
                $result->data_seek($j);//buscamos la informacion del renglon
                $row = $result->fetch_array(MYSQLI_ASSOC);//regresa la información foramateada
                  //codigo que repetimos

                echo '<h6>' . $row['texto'] . '</h6>';
              }

              $result->close();
              $conn->close();

            ?>
            <img  src="img/HeroicaNBG.png" width="119.6352" height="55.552" alt="">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div id="catalogo" class="row" style="background-image: url('img/bg.jpg');background-size: cover;">
    			<!-- Producto 1  -->
    			<div class="col-md-4 product-grid">
    				<div class="image">
    					<a href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20si%20tienen%20Cream%20Ale%20y%20el%20precio">
    						<img src="img/producto1.1.png" class="rounded mx-auto d-block" width="151.5" height="572.5">
    						<div class="overlay">
    							<div class="detail" style="font-family: Montserrat;">Cerveza clara, cremosa y brillante; fácil de tomar y muy refrescante. Similar a una lager clara, con mucho más carácter y cuerpo.</div>
    						</div>
    					</a>
    				</div>
            <br></br>
    				<h5 class="text-center" style="font-size: 40px">Cream Ale</h5>
    				<h5 class="text-center" style="font-family: Helvetica-Normal; font-size: 15px">ABV 3.8% - SRM 3.5 – IBU 8.43</h5>
    				<a href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20si%20tienen%20Cream%20Ale%20y%20el%20precio" class="btn buy" style="color: #fff; font-family: 'Helvetica-Normal';">COMPRAR</a>
    			</div>
    			<!-- ./Producto 1 -->

    			<!-- Producto 2  -->
    			<div class="col-md-4 product-grid">
    				<div class="image">
    					<a href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20si%20tienen%20Amber%20Ale%20y%20el%20precio">
    						<img src="img/producto2.1.png" class="rounded mx-auto d-block" width="151.5" height="572.5">
    						<div class="overlay">
    							<div class="detail" style="font-family: Montserrat;">Cerveza color ámbar. levemente amarga y con un perfil a malta muy marcado. Estilo clásico de la costa Oeste de Norteamérica. Especial para disfrutarse en climas templados y no calurosos.</div>
    						</div>
    					</a>
    				</div>
            <br></br>
    				<h5 class="text-center" style="font-size: 40px">Amber Ale</h5>
    				<h5 class="text-center" style="font-family: Helvetica-Normal; font-size: 15px">ABV 6% - SRM 17 – IBU 25</h5>
    				<a href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20si%20tienen%20Amber%20Ale%20y%20el%20precio" class="btn buy" style="color: #fff; font-family: 'Helvetica-Normal';">COMPRAR</a>
    			</div>
    			<!-- ./Producto 2 -->

    			<!-- Producto 3  -->
    			<div class="col-md-4 product-grid">
    				<div class="image">
    					<a href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20si%20tienen%20Mexican%20Stout%20y%20el%20precio">
    						<img src="img/producto3.1.png" class="rounded mx-auto d-block" width="151.5" height="572.5">
    						<div class="overlay">
    							<div class="detail" style="font-family: Montserrat;">Con aromas intensos a café y chocolate, esta cerveza te garantiza una experiencia diferente. En paladar notas sutiles a avena, canela, nuez y piloncillo muy clásicos de la repostería mexicana combinados perfectamente con chiles secos. </div>
    						</div>
    					</a>
    				</div>
            <br></br>
    				<h5 class="text-center" style="font-size: 40px">Mexican Stout</h5>
    				<h5 class="text-center" style="font-family: Helvetica-Normal; font-size: 15px;">ABV 7% - SRM 40 – IBU 35</h5>
    				<a href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20si%20tienen%20Mexican%20Stout%20y%20el%20precio" class="btn buy" style="color: #fff; font-family: 'Helvetica-Normal';">COMPRAR</a>
    			</div>
    			<!-- ./Producto 3 -->
  </div>

  <div id="map">
    <div>
      <h3 style="font-size: 100px;font-family: 'Pirata One'; color: #aea04b;">Visitanos</h3>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d448.6945643990912!2d-97.5082292!3d25.8840698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866f948ddd786ef1%3A0x844847772d7cb9fd!2sCalle%209%2076%2C%20Zona%20Centro%2C%2087300%20Heroica%20Matamoros%2C%20Tamps.!5e0!3m2!1ses-419!2smx!4v1606333593056!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

  <!--footer-->
  <div class="footer">



    <div class="row">
      <div class="col"><h7 class=" d-flex align-items-center justify-content-center"><img src="img/LogoMain.png" width="208.5" height="104.25" alt=""></h7>
      <div class='row'>
            <a class="nav-link px-2" href="https://www.facebook.com/heroica.beer/" style='width: 33.33%; color: #3B59598'><i class="	fa fa-facebook-f"></i></a>
            <a class="nav-link px-2" href="https://www.instagram.com/heroica.beer/" style='width: 33.33%; color: #DD2A7B'><i class="fa fa-instagram"></i></a>
            <a class="nav-link px-2" href="https://wa.me/+5218681537152/?text=Me%20gustaria%20saber%20el%20catalogo%20y%20precios" style='width: 33.33%; color: green'><i class="fa fa-whatsapp"></i></a>
          </div>
      </div>
        <div><h7 class=" d-flex align-items-center justify-content-center"><a href="#inicio"><img src='img/Flecha.png' width='70px'></img></a></span></div>
        <div class="col" style="padding-top: 60px;">
          <div class='row' style>
            <a class='center' href='https://wa.me/+5218681537152/?text=Me%20interesaria%20vender%20su%20producto%20en%20mi%20local' style="font-family: Montserrat; width: 100%; color: #fff">¿Tienes local y buscas vender nuestro producto?</a>
          </div>
        </div>
        
    </div>

    <div class="footer-bottom">
      &copy; heroica.beer | Diseñada por Luis Raul Ariceaga
    </div>
  </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbua1rK5ZZ0IjavWRViEH1Edk40Aw2hY4&callback=initMap"type="text/javascript"></script>
  </body>
</html>
