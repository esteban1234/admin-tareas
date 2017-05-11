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
          <li><a href="#configuration" data-toggle="tab"><i class="fa fa-folder-open-o"></i> <span>Catálogos</span></a></li>
          <li class="active"><a href="#users" data-toggle="tab"><i class="fa fa-archive"></i> <span>Proyectos</span></a></li>
          <li><a href="#mail" data-toggle="tab"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
          <li><a href="#mail" data-toggle="tab"><i class="fa fa-cogs"></i> <span>Acerca de</span></a></li>
        </ul>
      </aside>

      <section class="main">
        <section class="tab-content">
          <section class="tab-pane active" id="configuration">
           <nav class="subbar">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>Cotización/Proyecto</span></a></li>
                <li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>+ Nueva Cotización/Proyecto</span></a></li>
              </ul>
            </nav>
              
            <section class="tab-content content">
              <section class="tab-pane active fade in" id="access">
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
                                <label>Titulo</label>
                              </div>

                              <div class="group">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cliente</label>
                              </div>  

                              <div class="group">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa</label>
                              </div>  

                              <div class="group">
                                <select name="" id="">
                                  <option value="1">1</option>
                                  <option value="1">2</option>
                                </select>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Elige Empresa</label>
                              </div>
                            </div> <br>

                            <div class="row">
                              <div class="group">      
                                <input  type="text" id="example1">
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Fecha</label>
                              </div> 
                              
                              <div class="group">      
                                <input  type="text" id="example2">
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Fecha</label>
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
                            <th>Titulo/Descripción</th>
                            <th>Monto</th>
                            <th>Cliente</th>
                            <th>Empresa</th>
                            <th>Tipo</th>
                            <th>Fechas</th>
                            <th>Estatus</th>
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
                              <td>Calle 16, Col. Yucatan</td>
                              <td>Calle 16, Col. Yucatan</td>
                              <td>Eliminar</td>
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
                      <div class="panel-heading">Nueva Cotización/Proyecto</div>
                      <div class="panel-body">
                        <form>                        
                          <div class="row">
                            <div class="col-md-4">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Titulo</label>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="group group-newancho">
                                <select name="" id="">
                                  <option value="1">1</option>
                                  <option value="1">2</option>
                                </select>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cliente</label>
                              </div>
                            </div>

                            <div class="col-md-4">
                             <div class="group group-newancho">
                                <select name="" id="">
                                  <option value="1">1</option>
                                  <option value="1">2</option>
                                </select>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa</label>
                              </div>
                            </div>
                          </div><br>

                          <div class="row">
                             <div class="group">      
                                <input  type="text" id="example1">
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Fecha</label>
                              </div> 

                              <div class="group">      
                                <!-- <div class="form-group"> -->
                                  <label for="esInterno" class="control-label col-sm-2">Es Interno</label>
                                  <div class="col-sm-6">
                                    <input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'>
                                  </div>
                                <!-- </div> -->
                              </div>
                                  
                          <!-- <div class="row"> -->
                            <div class="group">
                              <br>
                              <div class="group b">      
                                <button class="btn btn-primary adicional">Enviar</button>
                              </div>

                              <div class="group b">      
                                <button class="btn btn-primary adicional">Cancelar</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>

                <div class="panel">
                  <div class="panel-heading">
                    <h3>Cotización/Proyecto
                        <button data-toggle="collapse" data-target="#collapse1" class="btn btn-large btn-primary pull-right">
                        <span class="caret"></span>
                      </button>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <div id="crear_cotizacion">
                        <div class="form-horizontal">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>RFC</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-2">
                                <label for="descripcion" class="control-label">Descripcion</label>
                              </div>
                              <div class="col-md-10">
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="group group-newancho">
                                <select name="" id="">
                                  <option value="1">1</option>
                                  <option value="1">2</option>
                                </select>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Elige Empresa</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="group group-newancho">
                                <input type='text'  id='datetimepicker4' />
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Fecha Inicial</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="group group-newancho">
                                <select name="" id="">
                                  <option value="1">1</option>
                                  <option value="1">2</option>
                                </select>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Elige Empresa</label>
                              </div>
                            </div>
                            <div class="row">
                              <label for="esInterno" class="control-label col-sm-2">Es Interno</label>
                              <div class="col-sm-6">
                                <!-- <input id="toggle-one" checked type="checkbox">
                                  <script>
                                    $(function() {
                                      $('#toggle-one').bootstrapToggle();
                                    })
                                  </script> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-3">
                          <input type="button" class="btn btn-primary adicional" value="Guardar Cambios" id="btncrear">    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                 <div class="panel">
                  <div class="panel-heading">
                    <h3>Detalle
                      <button data-toggle="collapse" data-target="#collapse2" class="btn btn-large btn-primary pull-right">
                        <span class="caret"></span>
                      </button>
                    </h3>
                  </div>

                  <div id="collapse2" class="panel-collapse fade in">
                   <div class="panel-body">
                     <div class="form-horizontal">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tarea</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-2">
                                <label for="descripcion" class="control-label">Descripcion</label>
                              </div>
                              <div class="col-md-10">
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="group group-newancho">
                                <div class="group group-newancho">
                                  <input name="unidadTiempo" id="" class="" value="Horas" disabled="" type="text">
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="group group-newancho">
                                <!-- <input type='text'  id='datetimepicker4' /> -->
                                <input name="costo" id="tarea_costo_149435397562" class="" value="" type="number">
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Costo</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="group group-newancho">
                                <!-- <input type='text'  id='datetimepicker4' /> -->
                                <input name="costo" id="tarea_costo_149435397562" class="" value="" type="number">
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Duración</label>
                              </div>
                            </div>
                            <div class="row">
                              <label for="esInterno" class="control-label col-sm-2">Tiene Subtareas</label>
                              <div class="col-sm-6">
                                <input id="toggle-one" checked type="checkbox">
                                  <!-- <script>
                                    $(function() {
                                      $('#toggle-one').bootstrapToggle();
                                    })
                                  </script> -->
                              </div>
                            </div>
                          </div>
                        </div>
                   </div>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3>Total Cotización/Proyecto
                      <span class="label label-info pull-right" id="costo_proyecto">$ 0.00</span>
                    </h3>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3>Precio de Venta
                    <span class="pull-right">$<input type="text" class="input-sm" name="precioventa" id="precio_venta" value=""></span>
                    </h3>
                  </div>
                </div>
              </section>  <!-- END tab-pane -->
            </section>  <!-- END tab-content -->
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

          $('#example2').datepicker({
              format: "dd/mm/yyyy"
          });

           $('#example3').datepicker({
              format: "dd/mm/yyyy"
          });
      });
    </script>
  </body>
</html>