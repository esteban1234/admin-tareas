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
                        <!-- </div> -->
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