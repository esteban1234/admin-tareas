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

      <section class="main">
        <section class="tab-content">
          <section class="tab-pane active" id="configuration">
           <nav class="subbar">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-address-card" aria-hidden="true"></i> <span>Permiso</span></a></li>
              </ul>
            </nav>
              
            <section class="tab-content content">
              <section class="tab-pane active fade in" id="access">
              <div class="col-md-9 col-center">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>Nombre: "NAME COMPLETO" <span class="badge"> Tipo: Usuario</span>
                      <span class="pull-right">
                        <h4>Usuario: "NAME USUARIO"</h4>
                      </span>
                    </h4>
                  </div>
                </div>
              </div>
              
              <form action="">
                <div class="row">
                  <!-- <div class="col-xs-12 col-sm-9 col-md-12"> -->
                  <div class="panel panel-default">
                    <div class="panel-heading">CATALOGO</div>
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thead>
                          <tr class="table-color">
                          <th>Modulo</th>
                          <th>Ver</th>
                          <th>Crear</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                          <th>Reportes</th>
                          <th>Todos</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr class="text-left">
                            <td>Clientes</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                          <tr class="text-left">
                            <td>Departamentos</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                          <tr class="text-left">
                            <td>Empresas</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                          <tr class="text-left">
                            <td>Tareas</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                <!-- </div> -->
                </div>

                <div class="row">
                  <div class="panel panel-default">
                    <div class="panel-heading">PROYECTOS</div>
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thead>
                          <tr class="table-color">
                          <th>Modulo</th>
                          <th>Ver</th>
                          <th>Crear</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                          <th>Reportes</th>
                          <th>Todos</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr class="text-left">
                            <td>Seguimientos</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="panel panel-default">
                    <div class="panel-heading">UTILERIAS</div>
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thead>
                          <tr class="table-color">
                          <th>Modulo</th>
                          <th>Ver</th>
                          <th>Crear</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                          <th>Reportes</th>
                          <th>Todos</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr class="text-left">
                            <td>Permisos</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                          <tr class="text-left">
                            <td>Respaldos</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                          <tr class="text-left">
                            <td>Restaurar</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                          <tr class="text-left">
                            <td>Usuarios</td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                            <td><input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>


                  <div class="col-md-3 col-center">
                      <button class="btn btn-primary btn-color">Guardar Cambio</button>
                      <a href="#" class="btn btn-primary btn-color">Cancelar</a>
                  </div>
                </form>
              </section>  <!-- END tab-pane -->
              
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

<!-- FALTA EL HACER FUNCIONAR EL BOTON CAMBIAR CLAVE -->