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
          <li><a href="catalago.php"><i class="fa fa-folder-open-o"></i> <span>Catálogo</span></a></li>
          <li><a href="utileria.php"><i class="fa fa-archive"></i> <span>Proyecto</span></a></li>  <!-- #users -->
          <li><a href="usuario.php"><i class="fa fa-users"></i> <span>Utilerias</span></a></li>  <!-- #utelerias -->
          <li><a href="acercade.php"><i class="fa fa-cogs"></i> <span>Acerca de</span></a></li>   <!-- #acercade -->
        </ul>
      </aside>
              
      <section class="tab-content content">
        <section class="tab-pane active fade in" id="access">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">Opciones</div>
                <div class="panel-body">
                  <div class="col-md-3">
                    <div class="circle-tile">
                      <a href="#">
                        <div class="circle-tile-heading dark-blue">
                          <i class="fa fa-users fa-fw fa-3x"></i>
                        </div>
                      </a>
                      <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">Clientes</div><br>
                        <!-- <div class="circle-tile-number text-faded">265<span id="sparklineA"></span></div> -->
                        <a href="Opcliente.php" class="circle-tile-footer">Entrar <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="circle-tile">
                      <a href="#">
                        <div class="circle-tile-heading green">
                          <i class="fa fa-line-chart fa-fw fa-3x"></i>
                        </div>
                      </a>
                      <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">Departamentos</div><br>
                        <!-- <div class="circle-tile-number text-faded">265<span id="sparklineA"></span></div> -->
                        <a href="Opdepartamento.php" class="circle-tile-footer">Entrar <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="circle-tile">
                      <a href="#">
                        <div class="circle-tile-heading orange">
                          <i class="fa fa-building-o fa-fw fa-3x"></i>
                        </div>
                      </a>
                      <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded">Empresas</div><br>
                        <!-- <div class="circle-tile-number text-faded">265<span id="sparklineA"></span></div> -->
                        <a href="Opempresa.php" class="circle-tile-footer">Entrar <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="circle-tile">
                      <a href="#">
                        <div class="circle-tile-heading blue">
                          <i class="fa fa-address-book-o fa-fw fa-3x"></i>
                        </div>
                      </a>
                      <div class="circle-tile-content blue">
                        <div class="circle-tile-description text-faded">Tareas</div><br>
                        <!-- <div class="circle-tile-number text-faded">265<span id="sparklineA"></span></div> -->
                        <a href="Optarea.php" class="circle-tile-footer">Entrar <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>  <!-- END tab-pane -->
        
        <section class="tab-pane fade" id="roles">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading">Something</div>
                <div class="panel-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
              </div>
            </div>
              
            <div class="hidden-xs col-sm-4 col-md-3">
              <div class="panel panel-default">
                  <div class="panel-heading">Something</div>
                  <div class="panel-body"><br/><br/><br/></div>
              </div>
              
              <div class="panel panel-default">
                  <div class="panel-heading">Something</div>
                  <div class="panel-body"><br/><br/><br/></div>
              </div>
            </div>
          </div>
        </section>
      </section>  <!-- END tab-content -->

          
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