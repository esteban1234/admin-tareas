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
                <li class="active"><a href="#access" data-toggle="tab"><span>Cotización/Proyecto</span></a></li>
                <li><a href="#roles" data-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i><span> Nueva Cotización/Proyecto</span></a></li>
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
                                  <option value="0">Todos</option>
                                  <option value="1">1</option>
                                  <option value="1">2</option>
                                </select>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipo</label>
                              </div>
                            </div> <br>

                            <div class="row">
                              <div class="group">      
                                <input  type="text" id="example1">
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Fecha Desde</label>
                              </div> 
                              
                              <div class="group">      
                                <input  type="text" id="example2">
                                <span class="highlight"></span>
                                <span class="bar"></span><br>
                                <label>Fecha Hasta</label>
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
                                  <option value="0">Elige un cliente</option>
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
                                  <option value="0">Elige una empresa</option>
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
                             <div class="col-md-4">
                               <div class="group group-newancho">      
                                  <input  type="text" id="example4">
                                  <span class="highlight"></span>
                                  <span class="bar"></span><br>
                                  <label>Fecha</label>
                                </div> 
                             </div>

                              <div class="col-md-4">
                                <div class="group design-interno">      
                                  <label for="esInterno" class="">Es Interno</label>
                                  <input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'>
                                </div>
                              </div>
                              
                              <div class="col-md-4">
                                <div class="group group-newancho">
                                  <button class="btn btn-primary adicional">Guardar Cambio</button>
                                </div>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>

              
    <div class="panel">
      <div class="panel-heading">
        <h3>
          Detalles<button data-toggle="collapse" data-target="#collapse2" class="btn btn-large btn-info pull-right"><span class="caret"></span></button>
        </h3>
      </div>
    <div class="panel-collapse collapse in" id="collapse2">
      <div class="panel-body">
      <div id="subtareas_proyecto">
        <!-- Aqui van a ir todos las tareas -->

        <div class="panel panel-primary design-panel" id="panel-149492323789">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-10">
                <big class="pull-left">
                  <span aria-haspopup="true" aria-expanded="true" data-toggle="collapse" data-target="#detalle_149492323789" style="cursor:pointer;">
                    <i id="btn-collapse_149492323789" class="fa fa-arrows" aria-hidden="true"></i>&nbsp;
                    <strong id="titulo_149492323789">Nombre de la Tarea</strong>
                  </span>
                </big>
              </div>
              <div class="col-md-2">
                <big>
                  <span class="label label-default hidden" aria-haspopup="true" aria-expanded="true" data-toggle="collapse" id="subtareasstr_149492323789" data-target="#detalle_149492323789" style="cursor:pointer;">0 subtareas
                  </span>
                </big>
                <div class="dropdown pull-right">
                  <big>
                    <span class="text-default"><strong>$ <span id="total_149492323789">0.00</span></strong></span>
                  </big>
                  <button class="btn btn-primary btn-color dropdown-toggle btn-sm" type="button" id="opciones_149492323789" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#" id="eliminar_149492323789">Eliminar</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        <div id="detalle_149492323789" class="panel-collapse collapse in">
        <div class="panel-body form-horizontal">
        <form action="#detalle_149492323789" id="form_detalle_149492323789" method="post">
        <div class="panel-body">
        <div id="crear_cotizacion">
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
              <input type="text" value="" disabled required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Unidad de Tiempo: HORAS</label>
            </div>
          </div>

          <div class="row">
            <div class="group group-newancho">
              <input type='number'>
              <span class="highlight"></span>
              <span class="bar"></span><br>
              <label>Costo</label>
            </div>
          </div>

          <div class="row">
            <div class="group group-newancho">
              <input type='number'>
              <span class="highlight"></span>
              <span class="bar"></span><br>
              <label>Duracción</label>
            </div>
          </div><br>
          <div class="row">
             <div class="col-sm-12 col-md-12 col-lg-10">
                <div class="group design-interno">      
                  <label for="esInterno" class="">Tiene Subtarea</label>
                  <input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='fa fa-check-square-o'></i>" data-off="<i class='glyphicon fa fa-times'></i>"  data-onstyle="primary" value='1'>
                </div>
              </div>
          </div>
        </div>
        </div>
        </div>
        </div>
        </form>
        <!-- <div id="subtareas_149492323789" class="hidden"></div> -->
        </div>
          
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-4">
              <div class="group pull-left">
                <button class="btn btn-primary btn-color">Guardar Cambio</button>
              </div>
            </div> 
          </div>
        </div>

        </div>
        </div>

      </div>
      </div>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h3>Total Cotización/Proyecto<span class="label label-info pull-right" id="costo_proyecto">$ 0.00</span></h3>
    </div>
  </div>
<form action="http://athlon.mx/proyecto/cotizacion/cotizar" method="POST" accept-charset="utf-8">
  <div class="panel panel-back-color">
    <div class="panel-heading">
      <h3>Precio de Venta
        <span class="col-sm-4 col-md-3 col-lg-2 pull-right">
          <!-- <label for="basic-url">Your vanity URL</label> -->
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">$</span>
            <!-- <input type="text" class="input-sm" name="precioventa" id="precio_venta" value=""> -->
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
          </div>
        </span>
      </h3>
    </div>
  </div>

  <div class="btn-group">
    <button type="submit" class="btn btn-success" id="btnGuardar"><i class="fa fa-sign-in" aria-hidden="true"></i>
  Guardar
    </button>
    <input type="hidden" name="aprueba"  id="aprueba" value="0">
    <button type="submit" class="btn btn-warning" id="btnGuardarAprobar"><i class="fa fa-check-square-o" aria-hidden="true"></i>
Guardar y aprobar
    </button>
    <a class="btn btn-danger" id="btnSalir" href="http://athlon.mx/proyecto/cotizacion">Salir</a>
  </div>
        </form>
<div id="msg"></div>
    <div class="modal fade" id="myModal" role="dialog">
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

            $('#example4').datepicker({
              format: "dd/mm/yyyy"
          });
      });
    </script>
  </body>
</html>