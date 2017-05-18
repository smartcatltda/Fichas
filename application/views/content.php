<!--*****************MENSAJES********************-->
<!--<div class="container-fluid">
    <br>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12" style="position: fixed;">-->
<div class="alert alert-success text-center" id="msg_success" hidden></div>
<div class="alert alert-danger text-center" id="msg_error" hidden></div>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--*****************LOGIN********************-->
<div class="container-fluid">  
    <div class="row" id="login" hidden>
        <div class="col-lg-4 col-lg-offset-4">
            <section class="login">
                <img src="css/images/SmartCat.png" class="img-responsive img-circle center-block" alt="Responsive image">
                <div class="input-group separador">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" id="user_login" placeholder="Usuario" required class="form-control input-lg"/>
                </div>
                <div class="input-group separador">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="password" class="form-control input-lg" id="pass_login" placeholder="Contraseña" required />
                </div>
                <button type="button" id="bt_conectar" class="btn btn-lg btn-primary btn-block separador">Conectar</button>
                <br>
            </section>  
        </div>
    </div>
</div>
<!--**********************************************Menu*************************************-->
<div class="container-fluid" id="contenido" hidden>
    <div class="row" id="Menu_Admin">
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Clinica San Jose</a>
                </div>
                <!--MENU -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i id="nombre_login" class="fa fa-user"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="salir"><i class="fa fa-fw fa-power-off"></i>Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Menu Lateral -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a id="menu_ficha" href="#"><i class="fa fa-fw fa-file"></i> Ficha</a>
                        </li>
                        <li>
                            <a id="menu_usuario" href="#"><i class="fa fa-fw fa-users"></i> Usuarios</a>
                        </li>
                        <li>
                            <a id="menu_reportes" href="a"><i class="fa fa-fw fa-bar-chart-o"></i> Reportes</a>
                        </li>

                    </ul>
                </div>
                <!-- /.Menu Lateral -->
            </nav>

            <div id="page-wrapper">
                <!--***************************MANTENEDOR FICHA********************************************************-->
                <div id="mantenedor_ficha" class="container-fluid" hidden="">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Dashboard <small>Statistics Overview</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> Dashboard
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>New Comments!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>New Tasks!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">124</div>
                                            <div>New Orders!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">13</div>
                                            <div>Support Tickets!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-area-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-donut-chart"></div>
                                    <div class="text-right">
                                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <span class="badge">just now</span>
                                            <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">4 minutes ago</span>
                                            <i class="fa fa-fw fa-comment"></i> Commented on a post
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">23 minutes ago</span>
                                            <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">46 minutes ago</span>
                                            <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">1 hour ago</span>
                                            <i class="fa fa-fw fa-user"></i> A new user has been added
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">2 hours ago</span>
                                            <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">yesterday</span>
                                            <i class="fa fa-fw fa-globe"></i> Saved the world
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">two days ago</span>
                                            <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                        </a>
                                    </div>
                                    <div class="text-right">
                                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Order Date</th>
                                                    <th>Order Time</th>
                                                    <th>Amount (USD)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-right">
                                        <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!--***************************MANTENEDOR USUARIO********************************************************-->
                <div id="mantenedor_usuario" class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header text-center">Mantenedor Usuarios</h1>
                        </div>
                    </div>
                    <!-- MENSAJES -->
                    <div class="alert alert-success text-center" id="msg_success_user" hidden>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                    <div class="alert alert-danger text-center" id="msg_error_user" hidden>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                    <!-- /* -->
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="user" class="col-sm-2 control-label">Usuario</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user" placeholder="Usuario">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="pass" class="col-sm-2 control-label">Contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="nombre_user" class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre_user" placeholder="Nombre">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="apellido_user" class="col-sm-2 control-label">Apellido</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="apellido_user" placeholder="Apellido">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="tipo_user" class="col-sm-2 control-label">Tipo</label>
                                <div class="col-sm-10">
                                    <select id="tipo_user" class="form-control">
                                        <option value="0">Administrador</option>
                                        <option value="1">Usuario</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-3 col-md-12 separador">
                            <button type="button" id="bt_limpiar_user" class="btn btn-lg btn-warning btn-block"><span class="fa fa-fw fa-refresh"></span> Limpiar</button>
                        </div>
                        <div class="col-lg-3 col-lg-offset-6 col-md-12 separador">
                            <button type="button" id="bt_guardar_user" class="btn btn-lg btn-primary btn-block"><span class="fa fa-fw fa-save"></span> Guardar</button>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="page-header text-center">Lista de Usuarios</h2>
                        <div class="col-lg-12">
                            <div id="lista_usuarios" class="table-responsive"></div>
                        </div>
                    </div>
                    <!-- FIN MANTENEDOR USUARIO -->
                </div>
                <!-- /#page-wrapper -->
            </div>
            <!-- /#wrapper -->
        </div>
    </div>
</div>
