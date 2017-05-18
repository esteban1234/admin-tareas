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
          <section class="tab-pane active" id="configuration">
           <nav class="subbar">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-address-card" aria-hidden="true"></i> <span>Edita</span></a></li>
              </ul>
            </nav>
              
            <section class="tab-content content">
              <section class="tab-pane active fade in" id="access">
                <div class="panel panel-default">
                      <div class="panel-heading">Edita Usuario</div>
                      <div class="panel-body">
                        <form>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="group group-newancho">      
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Usuario</label>
                              </div>
                            </div>
                          </div><br>

                          <div class="row">
                            <div class="col-md-4">
                              <a href="#info1" class="btn btn-primary btn-color pull-left inf">Cambiar Clave</a>
                            </div> 

                            <div id="info1" class="col-md-8 oculto">
                              <div class="col-md-6">
                                <div class="group group-newancho">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Clave Nueva</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="group group-newancho">      
                                  <input type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Confirmar Clave Nueva</label>
                                </div>
                              </div>
                            </div>                       
                          </div><br><br>

                          <div class="row">
                            <div class="group">      
                                <button class="btn btn-primary adicional">Edita</button>
                              </div>

                              <div class="group">
                                <a href="#" class="btn btn-primary adicional">Cancelar</a>   
                                <!-- <button class="btn btn-primary adicional">Cancelar</button> -->
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
              </section>  <!-- END tab-pane -->
              
            </section>  <!-- END tab-content -->
          </section> <!-- END tab-pane -->
        </section>  <!-- END tab-content -->
      </section>  <!-- END main -->
    </article>  <!-- END wrapper -->

    <!-- <script src="../js/jquery.js"></script> -->
    <script src="../js/general.js"></script>
    <script>
      jQuery(document).ready(function(){
        $(".oculto").hide();              
          $(".inf").click(function(){
                var nodo = $(this).attr("href");  
       
                if ($(nodo).is(":visible")){
                     $(nodo).hide();
                     return false;
                }else{
              $(".oculto").hide("slow");                             
              $(nodo).fadeToggle("fast");
              return false;
                }
          });
      }); 
    </script>
  </body>
</html>

<!-- FALTA EL HACER FUNCIONAR EL BOTON CAMBIAR CLAVE -->