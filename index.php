<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>  <script src="assets/js/lib/html5.js"></script>  <![endif]-->
<html>
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta http-equiv="content-language" content="es" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Agendamiento de citas - Universidad EAN</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="copyright" content="" />
  <meta name="date" content="2016" />
  <meta name="author" content="" />
  <meta name="robots" content="All" />
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link rel="author" type="text/plain" href="humans.txt" />
  <!--Style's-->
  <link href="assets/css/syscoin.css" rel="stylesheet" type="text/css" />
</head>


<!-- Inicio Body -->
<body class="bg_login">

<section class="preload">
  <div class="progress"> <div class="indeterminate"></div></div>
  <div class="loading waves-button waves-effect waves-light">
    <div class="logo_load"><img src="assets/img/logo.png"></div>
  </div>
</section>

<section class="content_all">
  
  <!--Contenidos Sitio-->
  <section class="cont_home">  
    
    <section class="cont_login wow fadeInUp">
      <form id="" class="form_login formweb" action="tablero.php" method="">
          <div class="logo_login wow flipInDown" data-wow-delay="0.2s">
            <img src="assets/img/logo.png" alt="">
          </div>
        <fieldset class="relative">
          <i class="fa fa-user iconLogin"></i>
          <input type="text" class="validate" placeholder="Email">          
        </fieldset>        
        <fieldset class="relative">
          <i class="fa fa-unlock-alt iconLogin"></i>
          <input type="text" class="validate" placeholder="Contraseña">
        </fieldset>
        <section class="p_t_20 p_b_20">
          <button type="submit" class="btnb waves-effect waves-light">Iniciar sesión</button><div class="clear"></div>
          <div class="large-12 medium-6 small-6 columns"><a class="link2 link_recup_pass modal_clic" href="#modal1">¿Recuperar contraseña?</a></div>  
        </section>

         <div class="clear"></div>
                
      </form>             
    </section>

      <div class="clear"></div>
  </section>
  <!--Fin Contenidos Sitio-->

    <div class="clear"></div>

  <section class="fotterlogin wow fadeInUp">
   <div class="large-12 medium-6 small-12 columns">
     <p>© 2017 <span>UNIVERSIDAD EAN</span> Todos los derechos reservados. - Prohíbida su reproducción parcial o total</p>
   </div>
    <div class="clear"></div>  
  </section>


  <?php include("footer.php"); ?> 

</section><!--Content_all-->

  
<!-- Modal Contraseña -->
<section id="modal1" class="modal modal-s">
  <div class="modal-content">
    <div class="form_recuperar wow zoomIn">   
      <p class="txt_center">Para recuperar su contraseña por favor ingresa el correo con el que fuiste registrado y te enviaremos una nueva contraseña.</p>
      <fieldset class="input-field">
        <input type="text" class="validate">
        <label for="icon_prefix">Ingrese su email</label>
      </fieldset>         
      <section class="txt_center">
        <button type="submit" class="btnb waves-effect waves-light" name="btnLogin">Restaurar contraseña</button>
        <a href="#!" class="link2 link_ingreso modal-action modal-close"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar al inicio de sesión</a>
      </section>
    </div>
  </div>
</section>
<!-- Fin Modal Contraseña -->

</body>
</html>
