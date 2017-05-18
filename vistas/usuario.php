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
          <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Index</span></a></li>
          <li><a href="catalago.php"><i class="fa fa-folder-open-o"></i> <span>Catálogos</span></a></li>
          <li><a href="utileria.php"><i class="fa fa-archive"></i> <span>Utilerias</span></a></li>  <!-- #users -->
          <li><a href="usuario.php"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>  <!-- #utelerias -->
          <li><a href="acercade.php"><i class="fa fa-cogs"></i> <span>Acerca de</span></a></li>   <!-- #acercade -->
        </ul>
      </aside>


      <section class="tab-content content">
        <section class="tab-pane active fade in" id="access">

          <section class="tab-pane fade in content" id="utelerias">
            <div class="row">              
              <div class="col-xs-12 col-sm-9 col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Opciones BD</div>
                  <div class="panel-body">
                    <div class="col-md-3">
                      <a href="#">
                        <div class="thumbnail text-center text-primary">
                          <div class="img-responsive img-redondo icon-size"><i class="fa fa-download" aria-hidden="true"></i></div>
                          <div class="caption profile">
                            <h3>Respaldo BD</h3>
                          </div>
                        </div>
                      </a>
                    </div>
                   
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal2">
                        <div class="thumbnail text-center text-primary">
                          <div class="img-responsive img-redondo icon-size"><i class="fa fa-database" aria-hidden="true"></i></div>
                          <div class="caption profile">
                            <h3>Restaurar BD</h3>
                          </div>
                        </div>
                      </a>
                    </div>

                    <div class="col-md-3">
                      <a href="Opnewusers.php">
                        <div class="thumbnail text-center text-primary">
                          <div class="img-responsive img-redondo icon-size"><i class="fa fa-users" aria-hidden="true"></i></div>
                          <div class="caption profile">
                            <h3>Usuario</h3>
                          </div>
                        </div>
                      </a>
                    </div>

                    <div class="col-md-3">
                      <a href="opconfiguracion.php">
                        <div class="thumbnail text-center text-primary">
                          <div class="img-responsive img-redondo icon-size"><i class="fa fa-cog" aria-hidden="true"></i></div>
                          <div class="caption profile">
                            <h3>Configuraciones</h3>
                          </div>
                        </div>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div> <!-- END row -->
           </section> <!-- END tab-pane -->
          
          <!-- LLAMAR AL MODAL DE RESTAURAR BD -->
          <div class="modal fade" id="myModal2" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <div type="button" class="close" data-dismiss="modal">&times;</div>
                  <h4 class="modal-title">Cargar archivo</h4>
                </div>
                <div class="modal-body">
                  <!-- <form action="#" id="respaldar-form"> -->
                      <!-- <input id="file" type="file" class="filestyle" accept=".sql" required/><br><br> -->
                      <!-- <input type="file" class="filestyle" > -->
                      <!-- <input type="file" class="filestyle" data-buttonText="Buscar Documento"><br><br> -->
                      <div class="form-group">
                        <input id="file-1" type="file" class="file btn-primary" multiple=true data-preview-file-type="any" accept=".sql">
                      </div>
                      <a href="#" class="btn btn-primary btn-color" id="subir">Subir</a>
                      <br>
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </div>

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