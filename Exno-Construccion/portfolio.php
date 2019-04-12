<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="consultoria,contabilidad,fiscal,coaching empresarial guadalajara,coach de negocios guadalajara,coaching de negocios,coaching para empresas,negocios,asesoria fiscal guadalajara,contadores en guadalajara,consultores de negocios guadalajara">
  <title>Grupo Exno</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <!-- Bootstrap -->
  <link href="../Exno/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Exno/css/font-awesome.min.css">
  <link rel="stylesheet" href="../Exno/css/animate.css">
  <link href="../Exno/css/prettyPhoto.css" rel="stylesheet">
  <link href="../Exno/css/style.css" rel="stylesheet" />
</head>

<div class="text text1">RESTAURACIÓN Y CONSERVACIÓN</div>

<div class="text text2">VIVIENDA</div>

<div class="text text3">INSTALACIONES</div>

<div class="text text4">IMAGEN URBANA</div>

<div class="text text5">INFRAESTRUCTURA DEPORTIVA</div>

<div class="text text6">EDIFICACIÓN</div>

<div class="text text7">CARRETERAS Y VÍAS TERRESTRES</div>

<div class="text text8">OBRAS HIDRÁULICAS</div>

<div class="text text9">INFRAESTRUCTURA VIAL</div>

<div class="text text10">PROYECTOS EJECUTIVOS</div>

<div class="text text11">PROYECTOS DE EQUIPAMIENTO </div>

<div class="text text12">PROYECTOS DE IMAGEN</div>

<div class="text text13">PROYECTOS DE INFRAESTRUCTURA </div>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <a href="#" class="pull-left">
                <img style=" width: 245px; height: 80px;" src="images/LOGO_EXNO.jpg">
              </a>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php" >Inicio</a></li>
                <li role="presentation"><a href="about.html">Sobre Nostros</a></li>
                    <!--   <li role="presentation">
                  <a href="services.html">Servicios</a>
                </li> -->
                <li role="presentation"><a href="portfolio.php" class="active">Proyectos</a></li>
                <li role="presentation"><a href="contact.html">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.php">Inicio</a></li>
        <li>Proyectos</li>
      </div>
    </div>
  </div>
  
  <div id="myCarousel" class="carousel slide" style="margin-top: 0;" data-ride="carousel">
  

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img  src="images/slider/bg2.jpg" class="item1" alt="New York" style=" height: 640px; width:100%;">
        <div class="carousel-caption">
          <p class="carousel-p">Especializados en </p>
          <h3 class="carousel-h3" >EDIFICACIÓN</h3>
          <a type="submit" href="#portfolio" name="submit" class="btn btn-primary btn-lg" required="required">Ver Proyectos</a>
        <br>
        </div>
      </div>

    </div>


  </div>
  </div>


  <section id="portfolio">
    <div class="container">
      <!-- <div class="center">
        <p>Nuestros Clientes</p>
      </div>
-->
<br>
      <ul class="portfolio-filter text-center">
        <li><a class="btn btn-default active" href="#" data-filter="*">Nuestros Proyectos</a></li>
</div>

    <div class="container">
      
      <div class="">
        <div class="portfolio-items">
        <?php
                $all_files = glob("images/construccion/*.*");
                for ($i=0; $i<count($all_files); $i++)
                    {
                    $image_name = $all_files[$i];
                    $supported_format = array('gif','jpg','jpeg','png','JPG');
                    $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                    if (in_array($ext, $supported_format))
                        {
                            echo   '<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                              <img class="img-responsive" style="height: 150px; width: 250px; margin: 0 auto;" src="'.$image_name .'" alt="'.$image_name.'">
                              <div class="overlay">
                                <div style="margin-right: 14px; "class="recent-work-inner"> 
                               </div>
                              </div>
                            </div>
                          </div>';
                        
                        } else {
                            continue;
                        }
                    }
                        
                    ?>
    
          

    </div>
  </section>


  <footer>
    <div class="footer">
      <div class="container">

       
      
        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy; Todos los derechos reservados a Grupo Exno
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company            
              <a href="https://bootstrapmade.com/bootstrap-business-templates/">Bootstrap Business Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              -->
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../Exno/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../Exno/js/bootstrap.min.js"></script>
  <script src="../Exno/js/jquery.prettyPhoto.js"></script>
  <script src="../Exno/js/jquery.isotope.min.js"></script>
  <script src="../Exno/js/wow.min.js"></script>
  <script src="../Exno/js/functions.js"></script>


</body>

</html>