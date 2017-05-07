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
          <li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> <span>Index</span></a></li>
          <li><a href="#configuration" data-toggle="tab"><i class="fa fa-folder-open-o"></i> <span>Catálogos</span></a></li>
          <li><a href="#users" data-toggle="tab"><i class="fa fa-archive"></i> <span>Proyectos</span></a></li>
          <li><a href="#mail" data-toggle="tab"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
          <li><a href="#mail" data-toggle="tab"><i class="fa fa-cogs"></i> <span>Acerca de</span></a></li>
        </ul>
      </aside>

      <section class="main">
        <section class="tab-content">
          <section class="tab-pane active fade in content" id="dashboard">
            <div class="row">
              <div class="col-xs-6 col-sm-3 col-md-9 col-center">
                <div class="panel panel-default">
                  <div class="panel-heading">Tabla de Resultados</div>
                  <div class="panel-body">
                    <form>
                      <div class="row">
                        <div class="row">
                          <div class="group">      
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Tabla</label>
                          </div>

                          <div class="group">      
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Acción</label>
                          </div>  

                          <div class="group">      
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Usuario</label>
                          </div>  

                          <div class="group">      
                            <input type="date" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Fecha</label>  
                          </div><br><br>
                        </div>

                        <div class="row">
                          <div class="group">      
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Sentencia</label>
                          </div>  

                          <div class="group">      
                              <div class="radio">
                                
                               <div>
                                  <input type="radio" name="sexo" id="hombre" checked="selected"><br>
                                  <label for="hombre" class="input-radio">Todos</label>
                               </div>
                                
                                <div>
                                  <label for="mujer" class="input-radio">M</label>
                                  <input type="radio" name="sexo" id="mujer"> <br>  
                                </div>

                                <div>
                                  <label for="alien" class="input-radio">X</label>
                                  <input type="radio" name="sexo" id="alien">
                                </div>
                                
                              </div>
                          </div>  

                          <div class="group left">      
                            <button class="btn btn-primary adicional">Buscar</button>
                          </div>  
                        </div>
                      </div>  
                    </form>
                  </div>
                </div>
              </div>
              
              <div class="col-xs-12 col-sm-9 col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Tabla de Resultados</div>
                  <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr class="table-color">
                        <th>#</th>
                        <th>Nombre Cliente</th>
                        <th>RFC</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Opciones</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr class="text-left">
                          <td>1</td>
                          <td>Jhon Doe</td>
                          <td>12312312312</td>
                          <td>9992786534</td>
                          <td>rh@hotmail.com</td>
                          <td>Calle 16, Col. Yucatan</td>
                          <td>Eliminar</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> <!-- END row -->
           </section> <!-- END tab-pane -->
           
          <section class="tab-pane fade" id="configuration">
           <!-- <nav class="subbar">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>System</span></a></li>
                <li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>Roles</span></a></li>
              </ul>
            </nav> -->
              
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
          </section> <!-- END tab-pane -->

           
          <section class="tab-pane" id="users">
            <!-- <nav class="subbar">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>System</span></a></li>
                <li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>Roles</span></a></li>
              </ul>
            </nav> -->
              
            <section class="tab-content content">
              <section class="tab-pane active fade in" id="access">
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">Opciones</div>
                      <div class="panel-body">

                        <div class="col-md-6">
                          <div class="circle-tile">
                            <a href="#">
                              <div class="circle-tile-heading dark-blue">
                                <i class="fa fa-users fa-fw fa-3x"></i>
                              </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                              <div class="circle-tile-description text-faded">Cotizaciones</div><br>
                              <!-- <div class="circle-tile-number text-faded">265<span id="sparklineA"></span></div> -->
                              <a href="Opcotizacion.php" class="circle-tile-footer">Entrar <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="circle-tile">
                            <a href="#">
                              <div class="circle-tile-heading green">
                                <i class="fa fa-line-chart fa-fw fa-3x"></i>
                              </div>
                            </a>
                            <div class="circle-tile-content green">
                              <div class="circle-tile-description text-faded">Seguimientos</div><br>
                              <!-- <div class="circle-tile-number text-faded">265<span id="sparklineA"></span></div> -->
                              <a href="Opseguimiento.php" class="circle-tile-footer">Entrar <i class="fa fa-chevron-circle-right"></i></a>
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
          </section>
           
          <section class="tab-pane fade" id="mail">  </section>
        </section>  <!-- END tab-content -->
      </section>  <!-- END main -->
    </article>  <!-- END wrapper -->

    <script src="../js/jquery.js"></script>
    <script src="../js/general.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>