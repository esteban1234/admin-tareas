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
          <li class="active"><a href="utileria.php"><i class="fa fa-archive"></i> <span>Proyecto</span></a></li>  <!-- #users -->
          <li><a href="usuario.php"><i class="fa fa-users"></i> <span>Utilerias</span></a></li>  <!-- #utelerias -->
          <li><a href="acercade.php"><i class="fa fa-cogs"></i> <span>Acerca de</span></a></li>   <!-- #acercade -->
        </ul>
      </aside>

      <section class="main">
        <section class="tab-content">
          <section class="tab-pane active" id="configuration">
           <nav class="subbar">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#todos" data-toggle="tab"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <span>Todos</span></a></li>
                <li><a href="#prointernos" data-toggle="tab"><i class="fa fa-reply" aria-hidden="true"></i> <span>+ Proyecto Internos</span></a></li>
                <li><a href="#proexternos" data-toggle="tab"><i class="fa fa-share" aria-hidden="true"></i> <span>+ Proyecto Externos</span></a></li>
                <li><a href="#mistareas" data-toggle="tab"><i class="fa fa-sticky-note" aria-hidden="true"></i> <span>Mis Tareas</span></a></li>
              </ul>
            </nav>
              
            <section class="tab-content content">
              <section class="tab-pane active fade in" id="todos">
                <div class="panel">
                  <div class="panel-heading">
                    <h3>Proyectos <span class="badge">Cant:0</span>
                      <button data-toggle="collapse" data-target="#collapse1" class="btn btn-large btn-primary pull-right">
                        <span class="caret"></span>
                      </button>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="col-md-12">
                      <div class="input-group">
                        <input type="text">
                        <span class="input-group-btn">
                          <button class="btn btn-primary adicional btn-width" type="button">Buscar</button>
                        </span>
                      </div>
                    </div> <br><br><br>
                    <div class="panel-body">
                        <table class="table table-striped">
                          <thead>
                            <tr class="table-color">
                              <th>Fecha</th>
                              <th>Titulo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="text-left">
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr class="text-left">
                              <td>Mostrando: 0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </section>  <!-- END tab-pane -->

              <section class="tab-pane  fade in" id="prointernos">
                <div class="panel">
                  <div class="panel-heading">
                    <h3>Proyectos <span class="badge">Cant:0</span>
                      <button data-toggle="collapse" data-target="#collapse1" class="btn btn-large btn-primary pull-right">
                        <span class="caret"></span>
                      </button>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="col-md-12">
                      <div class="input-group">
                        <input type="text">
                        <span class="input-group-btn">
                          <button class="btn btn-primary adicional btn-width" type="button">Buscar</button>
                        </span>
                      </div>
                    </div> <br><br><br>
                    <div class="panel-body">
                        <table class="table table-striped">
                          <thead>
                            <tr class="table-color">
                              <th>Fecha</th>
                              <th>Titulo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="text-left">
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr class="text-left">
                              <td>Mostrando: 0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </section>  <!-- END tab-pane -->

              <section class="tab-pane  fade in" id="proexternos">
               <div class="panel">
                  <div class="panel-heading">
                    <h3>Proyectos <span class="badge">Cant:0</span>
                      <button data-toggle="collapse" data-target="#collapse1" class="btn btn-large btn-primary pull-right">
                        <span class="caret"></span>
                      </button>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="col-md-12">
                      <div class="input-group">
                        <input type="text">
                        <span class="input-group-btn">
                          <button class="btn btn-primary adicional btn-width" type="button">Buscar</button>
                        </span>
                      </div>
                    </div> <br><br><br>
                    <div class="panel-body">
                        <table class="table table-striped">
                          <thead>
                            <tr class="table-color">
                              <th>Fecha</th>
                              <th>Titulo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="text-left">
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr class="text-left">
                              <td>Mostrando: 0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </section>  <!-- END tab-pane -->

              <section class="tab-pane  fade in" id="mistareas">
                 <div class="row">
                  <div class="col-xs-12 col-sm-9 col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading">Proyectos Responsable</div>
                      <div class="panel-body">
                        <table class="table table-striped">
                          <thead>
                            <tr class="table-color">
                              <th>Fecha</th>
                              <th>Titulo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="text-left">
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr class="text-left">
                              <td>Mostrando: 0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-9 col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading">Tareas Asignadas</div>
                      <div class="panel-body">
                        <table class="table table-striped">
                          <thead>
                            <tr class="table-color">
                              <th>Fecha</th>
                              <th>Titulo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="text-left">
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr class="text-left">
                              <td>Mostrando: 0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div> <!-- END row -->
              </section>  <!-- END tab-pane -->
              
             
            </section>  <!-- END tab-content -->
          </section> <!-- END tab-pane -->
        </section>  <!-- END tab-content -->
      </section>  <!-- END main -->
    </article>  <!-- END wrapper -->

    <script src="../js/general.js"></script>
  </body>
</html>