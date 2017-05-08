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
                                <!-- <div class='input-group date' id='datetimepicker1'>
                                  <input type='text' class="form-control">
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                                </div> -->
                                
                                  <input type='text' class="form-control" id='datetimepicker4' />
                                  <span class="highlight"></span>
                                  <span class="bar"></span><br>
                                  <label>Elige Empresa</label>
                              </div>  

                              <div class="group">      
                                <div class='input-group date' id='datetimepicker1'>
                                  <input type='text' class="form-control">
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
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
                          </div>

                          <div class="row">
                             <div class="group">      
                                <input type="date" value="<?php echo date("d/m/Y"); ?>" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha</label>  
                              </div><br><br>

                              <div class="group">      
                                <label class="checkbox-inline">
                                  <input type="checkbox" checked data-toggle="toggle" id="toggle-one"> First
                                </label>
                              </div><br><br>
                          </div>
                                  
                          <div class="row">
                            <div class="col-md-7 right">
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
    <div class="panel-heading"><h3>Cotización/Proyecto<button data-toggle="collapse" data-target="#collapse1" class="btn btn-large btn-primary pull-right"><span class="caret"></span></button></h3></div>
    <div id="collapse1" class="panel-collapse collapse in">
    <div class="panel-body">
      <div id="crear_cotizacion">
        <div class="form-horizontal">
  <div class="col-md-6">
    <div class="form-group">
      <label for="titulo" class="control-label col-sm-2">Titulo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="titulo" name="titulo" value="">
              </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="control-label col-sm-2">Descripcion</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
              </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group " id="clienteToggle">
      <label for="cliente" class="control-label col-sm-2">Cliente</label>
      <div class="col-sm-10">
        <select name="cliente" id="cliente" class="form-control">
    <option value="">Elige un cliente</option>
    <option value="3" >JUAN MANUEL</option>   </select>              </div>
    </div>

    <div class="form-group">
      <label for="fechaVencimiento" class="control-label col-sm-2">Fecha Vencimiento</label>
      <div class="col-md-6">
        <div class="input-group col-md-10">
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          <input type="text" class="form-control datepicker" name="fechaVencimiento" id="fechaVencimiento">
        </div>
              </div>
    </div>
        <div class="form-group">
      <label for="empresa" class="control-label col-sm-2">Empresa</label>
      <div class="col-sm-10">
          <select name="empresa" id="empresa" class="form-control">
    <option value="">Elige una empresa</option>
    <option value="6" >sandra</option>  </select>              </div>
    </div>
    <div class="form-group">
            <label for="esInterno" class="control-label col-sm-2">Es Interno</label>
            <div class="col-sm-6">
              <input type="checkbox" name="esInterno" id="esInterno" data-toggle="toggle" data-on="<i class='glyphicon glyphicon-ok'></i></span>" data-off="<i class='glyphicon glyphicon-remove'></i>"  data-onstyle="primary" value='1'>
            </div>
          </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $( ".datepicker" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      minDate: 0
    });
    $( ".datepicker" ).datepicker( "option", "dateFormat", 'dd/mm/yy');    // Le pasamos el formato de la fecha
    });
</script>      </div>
    </div>
    <div class="panel-footer">
        <input type="button" class="btn" value="Guardar Cambios" id="btncrear">
    </div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading"><h3>Detalles<button data-toggle="collapse" data-target="#collapse2" class="btn btn-large btn-info pull-right"><span class="caret"></span></button></h3></div>
    <div class="panel-collapse collapse in" id="collapse2">
      <div class="panel-body">
      <div id="subtareas_proyecto">
        <!-- Aqui van a ir todos las tareas -->

        <div class="panel panel-primary" id="panel-14942866585">
  <div class="panel-heading">
    <div class="row">
      <div class="col-sm-10">
        <big><span aria-haspopup="true" aria-expanded="true" data-toggle="collapse" data-target="#detalle_14942866585" style="cursor:pointer;">
        <span id="btn-collapse_14942866585" class="glyphicon glyphicon-chevron-right"></span>&nbsp;<strong id="titulo_14942866585">Nombre de la Tarea</strong>
        </span></big>
  </div>
  <div class="col-md-2 col-sm-10">
      <big><span class="label label-default col-md-offset-6 col-md-6 hidden" aria-haspopup="true" aria-expanded="true" data-toggle="collapse" id="subtareasstr_14942866585" data-target="#detalle_14942866585" style="cursor:pointer;">0 subtareas</span></big>
      <div class="dropdown pull-right">
          <big><span class="text-default"><strong>$ <span id="total_14942866585">0.00</span></strong></span></big>
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="opciones_14942866585" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="glyphicon glyphicon-option-vertical"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#" id="eliminar_14942866585">Eliminar</a></li>
            </ul>
      </div>
  </div>
    </div>
  </div>
  <div id="detalle_14942866585" class="panel-collapse collapse in">
  <div class="panel-body form-horizontal">
    <form action="#detalle_14942866585" id="form_detalle_14942866585" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
                  <label for="tarea_titulo_14942866585" class="control-label col-sm-2">Tarea</label>
                  <div class="col-sm-8">
                        <input type="text" name="titulo" id="tarea_titulo_14942866585" class="form-control" value="">
                  </div>
               </div>
              <div class="form-group">
                <label for="tarea_descripcion_14942866585" class="control-label col-sm-2">Descripción</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="tarea_descripcion_14942866585" name="descripcion" rows="3"></textarea>
                </div>
              </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">
            <label for="tarea[unidadTiempo]14942866585" class="control-label col-sm-4">Unidad de Tiempo</label>
            <div class="col-sm-8">
              <input type="text" name="unidadTiempo" id="tarea[unidadTiempo]14942866585" class="form-control" value="Horas" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="tarea_espadre_14942866585" class="control-label col-sm-4">Tiene Subtareas</label>
            <div class="col-sm-6">
              <input type="checkbox" name="espadre" id="tarea_espadre_14942866585" data-toggle="toggle" data-on="<span class='badge'><span id='tarea_espadre_num14942866585'>0</span><i class='glyphicon glyphicon-ok'></i></span>" data-off="<i class='glyphicon glyphicon-remove'></i>"  data-onstyle="primary" data-size='large' value='1'>
            </div>
          </div>

        </div>
      <div class="col-md-3 " id="classpadre14942866585">
        <div class="form-group">
          <label for="tarea[costo]14942866585" class="control-label col-sm-4">Costo</label>
          <div class="col-sm-8">
            <input type="number" name="costo" id="tarea_costo_14942866585" class="form-control" value="">
          </div>
        </div>
        <div class="form-group">
            <label for="tarea[duracion]14942866585" class="control-label col-sm-4">Duración</label>
            <div class="col-sm-6">
              <input type="number" name="duracion" id="tarea_duracion_14942866585" class="form-control" value="">
            </div>
        </div>
      </div>
      <div id="tarea_campos14942866585">
        
        <input type="hidden" name="idTarea" value="0">
      </div>

    </div>
    </form>
      <div id="subtareas_14942866585" class="hidden">
           </div>
  </div>
  <div class="panel-footer">
    <div class="btn-group">
      <button type="submit" class="btn btn-success" id="btnGuardar_14942866585" title="Guardar"><i class="glyphicon glyphicon-saved"></i></button>
      <a class="btn btn-primary hidden" id="btnAgregar_14942866585" title="Agregar Subtarea"><i class="glyphicon glyphicon-tasks"></i> <i class="glyphicon glyphicon-plus"></i></a>
    </div>
   </div>
  </div>
</div>
      </div>
      </div>
      <div class="panel-footer">
        <div class="btn-group">
          <a class="btn btn-primary hidden" id="btnAgregar_tarea" title="Agregar Subtarea"><i class="glyphicon glyphicon-tasks"></i> <i class="glyphicon glyphicon-plus"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading"><h3>Total Cotización/Proyecto<span class="label label-info pull-right" id="costo_proyecto">$ 0.00</span></h3></div>
</div>
<form action="http://athlon.mx/proyecto/cotizacion/cotizar" method="POST" accept-charset="utf-8">
<div class="panel panel-success">
    <div class="panel-heading"><h3>Precio de Venta<span class="pull-right">$ <input type="text" class="input-sm" name="precioventa" id="precio_venta" value=""></span></h3></div>
</div>
</div>
<div class="btn-group">

                    <button type="submit" class="btn btn-success" id="btnGuardar"><i class="bg-default glyphicon glyphicon-floppy-disk"></i>Guardar</button>
                <input type="hidden" name="aprueba"  id="aprueba" value="0">
            <button type="submit" class="btn btn-warning" id="btnGuardarAprobar"><i class="bg-default glyphicon glyphicon-floppy-disk"></i>Guardar y aprobar</button>
            <a class="btn btn-danger" id="btnSalir" href="http://athlon.mx/proyecto/cotizacion">Salir</a>

        </div>
        </form>
<div id="msg"></div>
    <div class="modal fade" id="myModal" role="dialog">
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
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <script src="../js/bootstrap-datetimepicker.es.js"></script>
     <script type="text/javascript">
        $(function () {
            $('#datetimepicker4').datetimepicker();
        });

         $(function() {
          $('#toggle-one').bootstrapToggle();
        })
    </script>
  </body>
</html>