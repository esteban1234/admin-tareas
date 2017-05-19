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
          <li class="active"><a href="catalago.php"><i class="fa fa-folder-open-o"></i> <span>Catálogo</span></a></li>
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
                <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-address-card" aria-hidden="true"></i> <span>Clientes</span></a></li>
                <li><a href="#roles" data-toggle="tab"><i class="fa fa-user-plus" aria-hidden="true"></i> <span>Nuevo</span></a></li>
              </ul>
            </nav>
              
            <section class="tab-content content">
              <section class="tab-pane active fade in" id="access">
                <div class="row">
                  <div class="col-xs-6 col-sm-3 col-md-9 col-center">
                    <div class="panel panel-default">
                      <div class="panel-heading">Filtrar Clientes</div>
                      <div class="panel-body">
                        <form>
                          <div class="row">
                            <div class="row">
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
                                <label>Email</label>
                              </div>  

                              <div class="group">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>R.F.C</label>
                              </div>  

                              <div class="group">      
                                <input type="text" value="" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>  
                              </div><br><br>
                            </div>

                            <div class="row align-left">
                              <div class="group">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Dirección</label>
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
                      <div class="panel-heading">Resultados Clientes</div>
                      <div class="panel-body">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr class="table-color">
                            <th>#</th>
                            <th><i class="fa fa-user-circle" aria-hidden="true"></i> Nombre Cliente</th>
                            <th><i class="fa fa-id-card-o" aria-hidden="true"></i> RFC</th>
                            <th><i class="fa fa-mobile" aria-hidden="true"></i> Telefono</th>
                            <th><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Email</th>
                            <th><i class="fa fa-map-o" aria-hidden="true"></i> Dirección</th>
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
                              <td><a href="#" class="hover"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" title="Editar"></i></a> 
                              <a href="#" class="hover"><i class="fa fa-window-close fa-2x" aria-hidden="true" title="Eliminar"></i></a>
                              </td>
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
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>RFC</label>
                              </div>
                            </div>
                            <div class="col-md-7">
                              <div class="group group-newancho group-newancho-left">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Colonia</label>
                              </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Código Postal</label>
                                </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Calle/Av/Carretera</label>
                                </div> 
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-5">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre Cliente</label>
                              </div>
                            </div>
                            <div class="col-md-7">
                              <div class="group group-newancho group-newancho-left">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Núm. Interior</label>
                              </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Núm. Exterior</label>
                                </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Cruzamientos</label>
                                </div> 
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-5">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono</label>
                              </div>
                            </div>
                            <div class="col-md-7">
                              <div class="group group-newancho group-newancho-left">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Estado</label>
                              </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Municipio</label>
                                </div>

                                <div class="group group-newancho group-newancho-left">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Ciudad</label>
                                </div> 
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-5">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                              </div>
                            </div>
                            <div class="col-md-7 right">
                              <br>
                              <div class="group b">      
                                <button class="btn btn-primary adicional">Enviar</button>
                              </div>

                              <div class="group b">
                                <a href="#" class="btn btn-primary adicional">Cancelar</a>   
                                <!-- <button class="btn btn-primary adicional">Cancelar</button> -->
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