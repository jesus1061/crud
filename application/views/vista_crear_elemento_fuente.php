 <?php
 include_once "application/controllers/admin/banners/listar_banners.php";


 ?>
 <!DOCTYPE html>
 <html lang="es">

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>plantilla/front_page/css/panel/personalizado.css" rel="stylesheet">
  <link href="<?php echo base_url();?>plantilla/front_page/css/panel/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url();?>plantilla/front_page/css/panel/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plantilla/front_page/css/panel/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plantilla/front_page/css/panel/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>plantilla/front_page/css/panel/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>plantilla/front_page/css/panel/style-responsive.css" rel="stylesheet">
  <script src="<?php echo base_url();?>plantilla/front_page/css/panel/chart-master/Chart.js"></script>

  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  <style>
    .img-responsive{height: 200px; width: 100%;}
    .project{margin-top: 5px; margin-bottom: 5px; text-align: center; color: black; font-weight: 900;}
    .title-seccion{width: 100%; text-align: center; padding-top: 5px; padding-bottom: 5px; color: white; background-color: #5c9347;}
    .img-responsive{width: 200px; height: 120px;}
  </style>

</head>

<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>COOPADMIN<span></span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
            </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                    <span class="from">Zac Snider</span>
                    <span class="time">Just now</span>
                  </span>
                  <span class="message">
                    Hi mate, how is everything?
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                    <span class="from">Divya Manian</span>
                    <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                    Hi, I need your help with this.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                    <span class="from">Dan Rogers</span>
                    <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                    Love your new Dashboard.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                    <span class="from">Dj Sherman</span>
                    <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                    Please, answer asap.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <li class="mt">
            <a class="active" href="index.html">
              <!--  <i class="fa fa-tasks"></i>-->
              <span>Dashboard</span>
            </a>
          </li>


          <li class="sub-menu">
            <a href="javascript:;">
              <!--  <i class="fa fa-tasks"></i>-->
              <span>Modulo Multimedia</span>
            </a>
            <ul class="sub">
              <li id="ver_archivos"><a href="#">Ver elementos</a></li>
              <li id="crear_archivos"><a href="#">Subir elementos</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <!--  <i class="fa fa-tasks"></i>-->
              <span>Modulo Slider</span>
            </a>
            <ul class="sub">
              <li id="ver_banners"><a href="#">Ver banners</a></li>
              <li id="crear_banner"><a href="#">Crear banner</a></li>

            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <!--  <i class="fa fa-tasks"></i>-->
              <span>Modulo funcionarios</span>
            </a>
            <ul class="sub">
              <li><a href="form_component.html">Ver funcionarios</a></li>
              <li id="crear_funcionario"><a href="#">Crear funcionario</a></li>

            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <!--  <i class="fa fa-tasks"></i>-->
              <span>Modulo Programas</span>
            </a>
            <ul class="sub">
              <li><a href="form_component.html">Ver programas</a></li>
              <li><a href="advanced_form_components.html">Crear programa</a></li>

            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <!--  <i class="fa fa-tasks"></i>-->
              <span>Modulo blog</span>
            </a>
            <ul class="sub">
              <li><a href="form_component.html">Ver publicaciones</a></li>
              <li><a href="advanced_form_components.html">Crear publicación</a></li>

            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <!--  <i class="fa fa-tasks"></i>-->
              <span>Modulo contactos</span>
            </a>
            <ul class="sub">
              <li><a href="form_component.html">Ver contactos</a></li>


            </ul>
          </li>





        </ul>

      </div>
    </aside>

    <section id="main-content">
      <section class="wrapper">
        <div class="row mt" id="formulario1">
          <div class="col-lg-12 col-md-12 col-sm-12">

            <div id="message"></div>
            <form class="contact-form php-mail-form formulario_carga" role="form" action="../controlador_archivo/crear_archivo" method="POST" enctype="multipart/form-data" id="formulario_original">

              <div class="form-group" >

                <input type="name" name="nombre_archivo" class="form-control" id="nombre_archivo" placeholder="Nombre del archivo a subir al servidor" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required >
                <div class="validate"></div>
              </div>
              <div class="form-group">
               <select class="form-control" id="tipo_archivo">
                <option value="0">Seleccione Tipo de archivo</option>
                <option value="1" >Imagen interna</option>
                <option value="2">Imagen externa</option>
                <option value="3">Video externo</option>

              </select>
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <input type="text" name="archivo" required class="form-control"  id="btn-abrir-archivos-a-cargar" value="Seleccione su archivo aqui" data-rule="email" data-msg="Please enter a valid email" readonly>
              <div class="validate"></div>
            </div>
            <div class="form-group" >
              <input type="file" name="fileToUpload" required class="form-control" id="btn-file"  onchange="var ruta_imagen= $(this).val(); detectar_archivo(ruta_imagen);" style="display:none">
              <div class="validate"></div>
            </div>













            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Has Subido un archivo con exito!</div>

            <div class="form-send">
              <button type="button"  id="btn_subir_archivo" class="btn btn-large btn-primary">Subir archivo</button>
            </div>

          </form>
        </div>


      </div>





    </section>
  </section>
  <!--main content end-->
  <!--footer start-->

  <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>plantilla/front_page/js/panel/jquery/jquery.min.js"></script>

<script src="<?php echo base_url();?>plantilla/front_page/js/panel/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url();?>plantilla/front_page/js/panel/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url();?>plantilla/front_page/js/panel/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url();?>plantilla/front_page/js/panel/query.nicescroll.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>plantilla/front_page/js/panel/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="<?php echo base_url();?>plantilla/front_page/js/panel/common-scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>plantilla/front_page/js/panel/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>plantilla/front_page/js/panel/gritter-conf.js"></script>
<!--script for this page-->
<script src="<?php echo base_url();?>plantilla/front_page/js/panel/sparkline-chart.js"></script>
<script src="<?php echo base_url();?>plantilla/front_page/js/panel/zabuto_calendar.js"></script>


<script>


  $(document).ready(function(){

    /*Navegacón */

    $("#crear_archivos").click(function(){
     window.location.href = '../controlador_archivo/crear_vista_crear_archivo';
   });

    $("#ver_archivos").click(function(){
      window.location.href = '../controlador_archivo/cargar_vista_archivos';
    });



    $("#ver_banners").click(function(){
      window.location.href = '../controlador_banner/vista_listar_banner';
    });

    $("#crear_banner").click(function(){
      window.location.href = '../controlador_banner/cargar_vista_crear_banner';
    });


    var estado_tipo_de_archivo;
    $("#btn-abrir-archivos-a-cargar , #btn_subir_archivo").hide();
    $("#tipo_archivo").change(function(){
      var valor=  $(this).val();
      if(valor == 0){
       $("#btn-abrir-archivos-a-cargar , #btn_subir_archivo").hide();
       estado_tipo_de_archivo = 0;

     }
     if(valor == 1){


       $("#btn-abrir-archivos-a-cargar , #btn_subir_archivo").show();
       $("#btn-abrir-archivos-a-cargar").attr("type","text");
       $("#btn-abrir-archivos-a-cargar").val("Seleccione su archivo aqui");
       $("#btn-abrir-archivos-a-cargar").attr("placeholder","");
       $("#btn-abrir-archivos-a-cargar").attr("readonly","true");

       estado_tipo_de_archivo = 1;

     }

     if(valor == 2){

      var formulario_nuevo = '<form class="contact-form php-mail-form formulario_carga" role="form" action="../controlador_archivo/crear_url" method="post">  <div class="form-group" > <input type="name" name="nombre_archivo" class="form-control" id="nombre_archivo" placeholder="Nombre del archivo a subir al servidor" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required > <div> <br> <div class="form-group" > <input type="name" name="archivo" class="form-control" id="nombre_archivo" placeholder="Diligencie aqui la url del archivo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required > <div>                     <div class="form-send"> <br> <button type="submit"  class="btn btn-large btn-primary">Subir Url</button> <button type="button" id="volver"  class="btn btn-large btn-danger" style="background-color:red"><a href="crear_vista_crear_archivo" style="color:white">Cancelar</a></button> </div>                    </form>';

      $("#formulario_original").replaceWith(formulario_nuevo);


      $("#btn-abrir-archivos-a-cargar , #btn_subir_archivo").show();
      $("#btn-abrir-archivos-a-cargar").attr("type","text");
      $("#btn-abrir-archivos-a-cargar").val("Ponga su Url aqui");
      $("#btn-abrir-archivos-a-cargar").attr("placeholder","Ponga su Url aqui");
      $("#btn-abrir-archivos-a-cargar").removeAttr("readonly");

      estado_tipo_de_archivo = 2;
    }

    if(valor == 3){

      var formulario_nuevo = '<form class="contact-form php-mail-form formulario_carga" role="form" action="../controlador_archivo/crear_url_video" method="post">  <div class="form-group" > <input type="name" name="nombre_archivo" class="form-control" id="nombre_archivo" placeholder="Nombre del archivo a subir al servidor" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required > <div> <br> <div class="form-group" > <input type="name" name="archivo" class="form-control" id="nombre_archivo" placeholder="Diligencie aqui la url del video" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required > <div>                     <div class="form-send"> <br> <button type="submit"  class="btn btn-large btn-primary">Subir Url de video</button> <button type="button" id="volver"  class="btn btn-large btn-danger" style="background-color:red"><a href="panel" style="color:white">Cancelar</a></button> </div>                    </form>';

      $("#formulario_original").replaceWith(formulario_nuevo);


      $("#btn-abrir-archivos-a-cargar , #btn_subir_archivo").show();
      $("#btn-abrir-archivos-a-cargar").attr("type","text");
      $("#btn-abrir-archivos-a-cargar").val("Ponga su Url aqui");
      $("#btn-abrir-archivos-a-cargar").attr("placeholder","Ponga su Url aqui");
      $("#btn-abrir-archivos-a-cargar").removeAttr("readonly");

      estado_tipo_de_archivo = 2;
    }

    /*Modo para cargar imagenes externas por medio de una url compatible*/

  });
    /*Abre los archivos a cargar activa el input tipy file*/
    $("#btn-abrir-archivos-a-cargar").click(function(){
      if(  estado_tipo_de_archivo == 1){
       $("#btn-file").click();
     }

   });


    /*Detectar archivo a subir*/

    $('input[type="file"]').change(function(){
      var ruta = $(this).val();
     $("#btn-abrir-archivos-a-cargar").val(ruta);
    });

    /*Detecta si un archivo se subio y obtiene la ruta de la imagen o video*/

    /*Valida que el campo imagen este lleno y activa el formulario*/

    $("#btn_subir_archivo").click(function(){
      if($("#nombre_archivo").val().length > 0){

        if( estado_tipo_de_archivo == 1 || estado_tipo_de_archivo == 2  ){

          var archivo = $("#btn-abrir-archivos-a-cargar").val();
          if(archivo == "Seleccione su archivo aqui"  || archivo == "Ponga su Url aqui" || archivo == "" ){
            alertify.minimalDialog || alertify.dialog('minimalDialog',function(){
              return {
                main:function(content){
                  this.setContent(content); 
                }
              };
            });
            alertify.minimalDialog("Diligencie los datos");
          } else{
            alertify.minimalDialog || alertify.dialog('minimalDialog',function(){
              return {
                main:function(content){
                  this.setContent(content); 
                }
              };
            });
            alertify.minimalDialog("Archivo subido con exito");
            $("#btn_subir_archivo").attr("type","submit");

          }


        } else{
          alertify.minimalDialog || alertify.dialog('minimalDialog',function(){
            return {
              main:function(content){
                this.setContent(content); 
              }
            };
          });
          alertify.minimalDialog("Diligencie el tipo de archivo");
        }

      } else{
        alertify.minimalDialog || alertify.dialog('minimalDialog',function(){
          return {
            main:function(content){
              this.setContent(content); 
            }
          };
        });
        alertify.minimalDialog("Por favor diligenciar los datos");    }
      });
  });





</script>



</body>

</html>