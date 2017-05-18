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

      <section class="main">
        <section class="tab-content">
          <section class="tab-pane active fade in content" id="dashboard">
            <div class="row">
              <div class="col-xs-6 col-sm-3 col-md-9 col-center">
                <div class="panel panel-default">
                  <div class="panel-heading">Filtrar Logs</div>
                  <div class="panel-body">
                    <form>
                      <!-- <div class="row"> -->
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
                            <input  type="text" id="example1">
                            <span class="highlight"></span>
                            <span class="bar"></span><br>
                            <label>Fecha</label>
                          </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                              <div class="group new-ancho">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Sentencia</label>
                              </div>
                            </div>

                            <div class="col-md-5 design-radio">
                                <div class="row label-radio">
                                   <p>Resultado</p>
                                </div>
                                <div class="row">
                                  <div class="content-radio">
                                    <input type="radio" name="sexo" id="hombre" checked="selected">
                                    <p class="input-op">Todos</p>
                                 </div>
                                  
                                  <div class="content-radio">
                                    <input type="radio" name="sexo" id="mujer">
                                    <p class="input-op"><i class="fa fa-check" aria-hidden="true"></i></p> 
                                  </div>

                                  <div class="content-radio">
                                    <input type="radio" name="sexo" id="alien">
                                    <p class="input-op"><i class="fa fa-times" aria-hidden="true"></i></p>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                              <button class="btn btn-primary adicional">Buscar</button>
                            </div> 
                          </div>
                        </div>
                      <!-- </div>   -->
                    </form>
                  </div>
                </div>
              </div>
              
              <div class="col-xs-12 col-sm-9 col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Resultados Logs</div>
                  <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr class="table-color">
                        <th>#</th>
                        <th>Tabla</th>
                        <th>Id</th>
                        <th>Acción</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Sentencia</th>
                        <th>Resultado</th>
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
                          <td>Opción</td>
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
                              <i class="fa fa-check-square-o fa-fw fa-3x" aria-hidden="true"></i>
                                <!-- <i class="fa fa-users "></i> -->
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
                                <i class="fa fa-line-chart fa-fw fa-3x" aria-hidden="true"></i>
                                <!-- <i class="fa fa-line-chart "></i> -->
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