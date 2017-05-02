<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<nav class="navbar navbar-default navbar-fixed-top topbar">
        <div class="container-fluid">

            <div class="navbar-header">

                <a href="#" class="navbar-brand">
                    <!-- <span class="visible-xs">QUANTTO</span> -->
                    <span class="hidden-xs"><b class="text-success">QUANTTO</b>consultores</span>
                    <!-- <span class="hidden-xs">consultores</span> -->
                </a>

                <p class="navbar-text">
                    <a href="#" class="sidebar-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </p>

            </div>

            <div class="navbar-collapse collapse" id="navbar-collapse-main">

                <ul class="nav navbar-nav navbar-right">
                    
                    <li>

                        <button class="navbar-btn">
                            <!-- <i class="fa fa-bell"></i> -->
                            aqui va el nombre&nbsp;&nbsp;
                        </button>
                    </li>
                    
                    <li class="dropdown">
                        <button class="navbar-btn" data-toggle="dropdown">
                            <img src="../img/user.png" class="img-circle img-responsive">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mi cuenta</a></li>
                            <!-- <li><a href="#">Dashboard</a></li> -->
                            <li class="nav-divider"></li>
                            <li><a href="../login.php">Salir</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    
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
                       
                        <div class="col-xs-6 col-sm-3">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <br/><br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-sm-3">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <br/><br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-sm-3">
                            <div class="panel panel-danger">
                                <div class="panel-body">
                                    <br/><br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-sm-3">
                            <div class="panel panel-warning">
                                <div class="panel-body">
                                    <br/><br/><br/><br/>
                                </div>
                            </div>
                        </div>
                       
                       <div class="col-xs-12 col-sm-9">
                           <div class="panel panel-default">
                               <div class="panel-heading">
                                   Something
                               </div>
                               <div class="panel-body">
                                   This layout uses tabs to demonstrate what you could do with it. It probably makes more sense to use individual pages/templates in a production app.
                                   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                               </div>
                           </div>
                       </div>
                       
                       <div class="col-xs-12 col-sm-3">
                           <div class="panel panel-default">
                               <div class="panel-heading">
                                   Something
                               </div>
                               <div class="panel-body">
                                   The sidebar is naturally responsive according to screen width. You can toggle it using the menu button in the topbar. Test it out by increasing/decreasing your screen width and watch it respond.
                               </div>
                           </div>
                           
                           <div class="panel panel-default">
                               <div class="panel-heading">
                                   Kaitani Labs
                               </div>
                               <div class="panel-body">
                                   Designed by <a href="#" target="_blank">Esteban Y Santiago</a></a>
                               </div>
                           </div>
                       </div>
                       
                   </div>
                   
               </section>
               
               <section class="tab-pane fade" id="configuration">
                   <nav class="subbar">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>System</span></a></li>
                            <li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>Roles</span></a></li>
                        </ul>
                    </nav>
                    
                    <section class="tab-content content">
                        
                        <section class="tab-pane active fade in" id="access">
                            
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </section>
                        
                        <section class="tab-pane fade" id="roles">
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hidden-xs col-sm-4 col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </section>
                        
                    </section>
                    
               </section>
               
               <section class="tab-pane fade" id="users">
                   
               </section>
               
               <section class="tab-pane fade" id="mail">
                   
               </section>
               
            </section>
            
            
                    
            
        </section>
        
    </article>


<script src="../js/jquery.js"></script>
<script src="../js/general.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>