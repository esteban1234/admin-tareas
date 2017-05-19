<?php include 'encabezado2.php' ?>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top topbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand">
            <span class="hidden-xs"><b class="text-success">QUANTTO</b>consultores</span>
          </a> <!-- END navbar-brand -->

          <p class="navbar-text">
            <a href="#" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
            </a> <!-- END sidebar-toggle -->
          </p>
        </div> <!-- END navbar-header -->

        <div class="navbar-collapse collapse" id="navbar-collapse-main">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <button class="navbar-btn">aqui va el nombre&nbsp;&nbsp;</button>
            </li>

            <li class="dropdown">
              <button class="navbar-btn" data-toggle="dropdown"><img src="../img/user.png" class="img-circle img-responsive"></button>
              <ul class="dropdown-menu">
                <li><a href="#">Mi cuenta</a></li>
                <li class="nav-divider"></li>
                <li><a href="../login.php">Salir</a></li>
              </ul>
            </li>
          </ul> <!-- END nav -->
        </div>  <!-- END navbar-collapse -->
      </div>  <!-- END container-fluid -->
    </nav>  <!-- END navbar -->
      
    <article class="wrapper">
      <aside class="sidebar">
        <ul class="sidebar-nav">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Index</span></a></li>
          <li><a href="catalago.php"><i class="fa fa-folder-open-o"></i> <span>Catálogo</span></a></li>
          <li><a href="utileria.php"><i class="fa fa-archive"></i> <span>Proyecto</span></a></li>  <!-- #users -->
          <li><a href="usuario.php"><i class="fa fa-users"></i> <span>Utilerias</span></a></li>  <!-- #utelerias -->
          <li><a href="acercade.php"><i class="fa fa-cogs"></i> <span>Acerca de</span></a></li>   <!-- #acercade -->
        </ul>
      </aside>

      <section class="tab-content content">
        <section class="tab-pane active fade in" id="access">
           <section class="tab-pane fade in content" id="acercade">
            <div class="row">              
              <div class="col-xs-12 col-sm-9 col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Equipo de Desarrollo
                    <div class="pull-right">
                      Nombre del Software <span class="version">versión 1.0</span>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-4">
                      <div class="card">
                        <img src="../img/font-login.jpg" alt="John" style="width:100%; height: 200px">
                        <h3>ISC. Noel Aguilar</h3>
                        <p class="title">Lider de Proyecto</p>
                        <p><i class="fa fa-envelope-open" aria-hidden="true"></i> naguilar@quantto.com.mx</p>
                       <!--  <a class="icon-perfil" href="#"><i class="fa fa-dribbble"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-twitter"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-linkedin"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-facebook"></i></a>  -->
                        <p><button><br></button></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card">
                        <img src="../img/font-login.jpg" alt="John" style="width:100%; height: 200px">
                        <h3>ISC. César Couoh</h3>
                        <p class="title">Desarrollador</p>
                        <p><i class="fa fa-envelope-open" aria-hidden="true"></i> cesar.couoh@quantto.com.mx</p>
                        <!-- <a class="icon-perfil" href="#"><i class="fa fa-dribbble"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-twitter"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-linkedin"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-facebook"></i></a>  -->
                        <p><button><br></button></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card">
                        <img src="../img/font-login.jpg" alt="John" style="width:100%; height: 200px">
                        <h3>ISC. Armando Espinosa</h3>
                        <p class="title">Desarrollador</p>
                        <p><i class="fa fa-envelope-open" aria-hidden="true"></i> armando.espinosa@quantto.com.mx</p>
                        <!-- <a class="icon-perfil" href="#"><i class="fa fa-dribbble"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-twitter"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-linkedin"></i></a> 
                        <a class="icon-perfil" href="#"><i class="fa fa-facebook"></i></a>  -->
                        <p><button><br></button></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- END row -->
           </section> <!-- END tab-pane -->
        </section>  <!-- END tab-content -->
      </section>  <!-- END main -->
    </article>  <!-- END wrapper -->

    
    <script src="../js/general.js"></script>

    <script type="text/javascript">
      // When the document is ready
      $(document).ready(function () {
          $('#example1').datepicker({
              format: "dd/mm/yyyy"
          });  
      });
    </script>
  </body>
</html>