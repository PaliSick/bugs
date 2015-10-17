<?php if(!class_exists('raintpl')){exit;}?>        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://bugsalimentos.com/admin/index.html">Bugs Alimentos Panel de Administración</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

        
 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="http://bugsalimentos.com/admin/#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">

                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="http://bugsalimentos.com/admin/#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="http://bugsalimentos.com/admin/#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="http://bugsalimentos.com/admin/#"><i class="fa fa-gear fa-fw"></i> Configurar</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="http://bugsalimentos.com/admin/login.html"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="http://bugsalimentos.com/admin/#"><i class="fa fa-fw"></i> Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://bugsalimentos.com/admin/productos/listado" <?php echo $menu["1"];?>>Listado</a>
                                </li>
                                <li>
                                    <a href="http://bugsalimentos.com/admin/productos/nuevo" <?php echo $menu["2"];?>>Nuevo</a>
                                </li> 
                            </ul>                            
                        </li>

                        <li>
                            <a href="http://bugsalimentos.com/admin/#"><i class="fa fa-fw"></i> Parametros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://bugsalimentos.com/admin/parametros/categorias" <?php echo $menu["3"];?>>Categorias</a>
                                </li>
                                <li>
                                    <a href="http://bugsalimentos.com/admin/parametros/subcategorias" <?php echo $menu["4"];?>>SubCategorias</a>
                                </li>
                                <li>
                                    <a href="http://bugsalimentos.com/admin/parametros/marcas" <?php echo $menu["5"];?>>Marcas</a>
                                </li>
                                <li>
                                    <a href="http://bugsalimentos.com/admin/parametros/presentaciones" <?php echo $menu["6"];?>>Presentaciones</a>
                                </li>
                            </ul>                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>