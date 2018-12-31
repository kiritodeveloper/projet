<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@c - @yield('title')</title>
        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <p class="bold text-left">
                        <script>
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                            var f=new Date();
                            document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                        </script>
                   </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="inicio">INICIO</a></li>

                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            nuestros trabajos y areas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="trabajo">desarrollo de software</a></li>
                                 
                            </ul>
                      
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contacnos</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <p class="bold text-left">
                        <script>
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                            var f=new Date();
                            document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                        </script>
                   </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="inicio">INICIO</a></li>

                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            nuestros trabajos y areas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="trabajo">desarrollo de software</a></li>
                                 <li class="nav-item"><a class="nav-link" href="camaras">area de instalacion</a></li>
                            </ul>
                      
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contacnos</a></li>
                    </ul>
                </div>
            </nav>
        </header>


       <style type="text/css">
            .col-lg-4{ padding: 0 !important;}
            .blocks{ border:1px solid #EEEEEE;}
            .blocks:hover{box-shadow:0px 0px 10px #D9E0DB;}
            .block-header{ height: 95px; text-align: center; width: 100%; padding: 8%; background: #F8F8F8; color: #333333;}
            .block-container p:hover{background:#F8F8F8;}
            .block-header h4{ font-weight: bold; vertical-align: center;}
            .block-container{ text-align: center;}
            .block-container p{ border-bottom:1px solid #F4F7F8; margin: 0; padding: 2%; }
            .block-container p:last-child{ border-bottom:none;}
            .price{font-size: 50px; font-family: PT Serif; color: #FF592D; font-weight: bold;}
            .renew-price{font-size: 12px; color: #333333; font-style: italic; font-weight: normal;}
            .block-footer{text-align: center; padding: 10%;}
            .order-now{border: 1px solid #FF592D; padding: 15px; border-radius: 4%; color:#333333; font-weight: bold; }
            .order-now:hover{text-decoration: none; background: #FF592D; color: #fff;}
            .active-block { box-shadow:0px 0px 10px #D9E0DB;}
            .active-block .block-header{ background: #45BA76; color: #fff;}
            .active-block .price{ color:#45BA76;}
            .active-block .block-footer a{ background: #45BA76; color: #fff; border:none;}
            .active-block .block-footer a:hover{ background: #EEEEEE; color: #333333; border:1px solid #45BA76;}

       </style>


<section class="service_solution_area p_100">
 <div class="container">
    <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="blocks">
                      <div class="block-header">
                          <h4>PLAN ECONOMICO</h4>
                      </div>
                      <div class="block-container">
                          <p><span  class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>500 MB Espacio En Disco</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>bando de ancha ilimitado</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>3 correos coorporativos</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>24 de soporte y Proteccion De Datos</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>respaldo de datos de sus sistemas</p>
                         
                          <p class="price"><i style="font-size: 40px;">Bs</i>800<sub><small class="renew-price">Per/Anual</small></sub></p>
                          <p class="price"><i style="font-size: 40px;">$</i>115<sub><small class="renew-price">Per/Anual</small></sub></p>
                      </div>
                      <div class="block-footer">
                          <a class="order-now" target="_blank" href="https://api.whatsapp.com/send?phone=59167916774">Consigalo </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="blocks active-block">
                      <div class="block-header">
                          <h4>STANDAR</h4>
                      </div>
                      <div class="block-container">
                          <p><span  class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>1 GB Espacio En Disco</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>bando de ancha ilimitado</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>6 correos coorporativos</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>24 de soporte y Proteccion De Datos</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>respaldo de datos de sus sistemas</p>
                         
                          <p class="price"><i style="font-size: 40px;">Bs</i>2000<sub><small class="renew-price">Per/Anual</small></sub></p>
                          <p class="price"><i style="font-size: 40px;">$</i>287<sub><small class="renew-price">Per/Anual</small></sub></p>
                      </div>
                      <div class="block-footer">
                          <a class="order-now" target="_blank" href="https://api.whatsapp.com/send?phone=59167916774">Consigalo </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="blocks">
                      <div class="block-header">
                          <h4>PROFESIONAL</h4>
                      </div>
                      <div class="block-container">
                          <p><span  class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>5GB Espacio En Disco</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>bando de ancha ilimitado</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>12 correos coorporativos</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>24 de soporte y Proteccion De Datos</p>
                          <p><span class="fa fa-handshake-o" aria-hidden="true" data-unicode="e013" style="color:#45BA76;"> </span>respaldo de datos de sus sistemas</p>
                         
                          <p class="price"><i style="font-size: 40px;">Bs</i>3000<sub><small class="renew-price">Per/Anual</small></sub></p>
                          <p class="price"><i style="font-size: 40px;">$</i>434<sub><small class="renew-price">Per/Anual</small></sub></p>
                      </div>
                      <div class="block-footer">
                          <a class="order-now" target="_blank" href="https://api.whatsapp.com/send?phone=59167916774">Consigalo </a>
                      </div>
                  </div>
              </div>
          </div>
</section>


        


        <footer class="footr_area">

            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
                            Empresa &copy;<script>document.write(new Date().getFullYear());</script> Todos Los Derechos Reservados <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://macsoftins.com" target="_blank">M@c-Softins</a>
                        </h5>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
            <script type="text/javascript">
                  jQuery(document).ready(function($) {
 
                        $('#myCarousel').carousel({
                                interval: 5000
                        });
                 
                        //Handles the carousel thumbnails
                        $('[id^=carousel-selector-]').click(function () {
                        var id_selector = $(this).attr("id");
                        try {
                            var id = /-(\d+)$/.exec(id_selector)[1];
                            console.log(id_selector, id);
                            jQuery('#myCarousel').carousel(parseInt(id));
                        } catch (e) {
                            console.log('Regex failed!', e);
                        }
                    });
                        // When the carousel slides, auto update the text
                        $('#myCarousel').on('slid.bs.carousel', function (e) {
                                 var id = $('.item.active').data('slide-number');
                                $('#carousel-text').html($('#slide-content-'+id).html());
                        });
                });
            </script>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </body>
</html>