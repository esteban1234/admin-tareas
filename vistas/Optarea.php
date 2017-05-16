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
          <li class="active"><a href="#configuration" data-toggle="tab"><i class="fa fa-folder-open-o"></i> <span>Catálogos</span></a></li>
          <li><a href="#users" data-toggle="tab"><i class="fa fa-archive"></i> <span>Proyectos</span></a></li>
          <li><a href="#mail" data-toggle="tab"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
          <li><a href="#mail" data-toggle="tab"><i class="fa fa-cogs"></i> <span>Acerca de</span></a></li>
        </ul>
      </aside>

      <section class="main">
        <section class="tab-content">
          <section class="tab-pane active" id="configuration">
           <nav class="subbar">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i> <span>Tarea</span></a></li>
                <li><a href="#roles" data-toggle="tab"><span>+ <i class="fa fa-book" aria-hidden="true"></i> Nueva</span></a></li>
              </ul>
            </nav>
              
            <section class="tab-content content">
              <section class="tab-pane active fade in" id="access">
                <div class="row">
                  <div class="col-xs-6 col-sm-3 col-md-9 col-center">
                    <div class="panel panel-default">
                      <div class="panel-heading">Filtrar Tarea</div>
                      <div class="panel-body">
                        <form>
                            <div class="group">      
                              <input type="text" required>
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label>Nombre</label>
                            </div>

                            <div class="group">      
                              <input type="text" required>
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label>Descripcion</label>
                            </div>  

                            <div class="group">      
                              <input type="text" required>
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label>Empresa</label>
                            </div>  

                            <div class="group left">      
                              <button class="btn btn-primary adicional">Buscar</button>
                            </div>  
                          </div>  
                        </form>
                      </div>
                    </div>
                  </div>
              
                  <div class="col-xs-12 col-sm-9 col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">Resultado Tareas</div>
                      <div class="panel-body">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr class="table-color">
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th><i class="fa fa-bar-chart" aria-hidden="true"></i> Empresa</th>
                            <th><i class="fa fa-usd" aria-hidden="true"></i> Costo</th>
                            <th>Duración</th>
                            <th>Rehusable</th>
                            <th><i class="fa fa-wrench" aria-hidden="true"></i> Opciones</th>
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
                              <td>Calle 16, Col. Yucatan</td>
                              <td><a href="#" class="hover"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" title="Editar"></i></a> 
                              <a href="#" class="hover"><i class="fa fa-window-close fa-2x" aria-hidden="true" title="Eliminar"></i></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div> <!-- END row -->
              </section>  <!-- END tab-pane -->
              
              <section class="tab-pane fade in content" id="roles">
                    <div class="panel panel-default">
                      <div class="panel-heading">Ingresar Clientes</div>
                      <div class="panel-body">
                        <form>
                          <div class="row">
                            <div class="col-md-5">
                              <div class="group group-newancho">
                                <select name="" id="">
                                  <option value="0">Elige una empresa</option>
                                  <option value="1">1</option>
                                  <option value="1">2</option>
                                </select>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa</label>
                              </div>
                            </div>
                            <div class="col-md-7">
                              <div class="group group-newancho group-newancho-left">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre</label>
                              </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Costo</label>
                                </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Duración</label>
                                </div> 
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-5">
                              <div class="group group-newancho">      
                                  <!-- <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Descripción</label> -->
                                <div class="col-md-3">
                                  <label for="descripcion" class="control-label">Descripcion</label>
                                </div>
                                <div class="col-md-9">
                                  <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                </div>
                                </div>
                            </div>
                          </div><br>

                          <div class="row">
                            <div class="col-md-5 design-reusable">
                                <label for="esInterno" class="reusable">Es Reusable</label>
                                <input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'>
                            </div>
                            <div class="col-md-7 right">
                              <br>
                              <div class="group b">      
                                <button class="btn btn-primary adicional">Guardar</button>
                              </div>

                              <div class="group b">
                                <a href="#" class="btn btn-primary adicional">Cancelar</a>      
                                <!-- <button >Cancelar</button> -->
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
              </section>
            </section>  <!-- END tab-content -->
          </section> <!-- END tab-pane -->
        </section>  <!-- END tab-content -->
      </section>  <!-- END main -->
    </article>  <!-- END wrapper -->

    <script src="../js/jquery.js"></script>
    <script src="../js/general.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>