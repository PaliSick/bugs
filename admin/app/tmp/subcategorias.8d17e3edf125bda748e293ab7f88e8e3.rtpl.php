<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("templates/head") . ( substr("templates/head",-1,1) != "/" ? "/" : "" ) . basename("templates/head") );?>


<!-- DataTables Responsive CSS -->
<link href="http://bugsalimentos.com/admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("templates/menu") . ( substr("templates/menu",-1,1) != "/" ? "/" : "" ) . basename("templates/menu") );?>

        <!-- Fin menu -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header col-lg-12">Subcategorias</h1>
                        <div class="col-lg-8" id="info">
                        <?php if( $msg ){ ?>

                            <?php echo ( echomsg( $msg, $msgType ) );?>

                        <?php } ?>

                        </div>
                        
                        
                        <div id="nuevo" style="display: none" class="col-lg-12">
                            <div class="col-lg-5">
                                <form action="http://bugsalimentos.com/admin/parametros/submit_subcategoria" name="subcat-nuevo" id="subcat-nuevo" method="get">
                                    <table  class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <th>Categoria</th>
                                            <th>Subcategoria</th>
                                        </tr>
                                        <tr>
                                            <td><select id="Id_categoria" name="Id_categoria">
                                                <option value="0">Selecione una Categoría</option>
                                                <?php $counter1=-1; if( isset($categorias) && is_array($categorias) && sizeof($categorias) ) foreach( $categorias as $key1 => $value1 ){ $counter1++; ?>

                                                <option value="<?php echo $value1["Id"];?>"><?php echo $value1["Categoria"];?></option>
                                                <?php } ?>

                                                </select>
                                            </td>                                        
                                            <td><input type="text" name="Subcategoria" id="Subcategoria" size="30"  class="form-control" value=""></td>
                                            <td><input type="hidden" id="Id" name="Id" value="">           
                                        <input type="submit" id="submit" class="btn btn-success" value="Guardar"></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="button" onclick="$('#nuevo').slideToggle(500); return false;" >Nueva Subcategoría </button>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Listado de Subcategorías
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-categoria">
                                            <thead>
                                                <tr>
                                                    <th>Categoria</th>
                                                    <th>Editar</th>
                                                    <th>Borrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $counter1=-1; if( isset($Subcategorias) && is_array($Subcategorias) && sizeof($Subcategorias) ) foreach( $Subcategorias as $key1 => $value1 ){ $counter1++; ?>

                                                <tr>
                                                    <td><?php echo $value1["Categoria"];?></td>
                                                    <td><?php echo $value1["Subcategoria"];?></td>
                                                    <td><a href="http://bugsalimentos.com/admin/parametros/getSubcategoria/<?php echo $value1["Id"];?>" class="glyphicon glyphicon-pencil edit"></a>
                                                    <td><a href="http://bugsalimentos.com/admin/parametros/deleteSubcategoria/<?php echo $value1["Id"];?>" class="glyphicon glyphicon-trash delete"></a>
                                                </tr>
                                                <?php }else{ ?>

                                                <tr>
                                                    <td  colspan="3">No hay resultados</td>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>


                       
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- js -->
    <?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("templates/js") . ( substr("templates/js",-1,1) != "/" ? "/" : "" ) . basename("templates/js") );?>


    
    <script type="text/javascript">

        $(document).ready(function() {
            $('.edit').click(function(e) {
                e.preventDefault();
                $l = $(this);
                $.get($l.attr('href'), function(data) {
                    if (data.Id > 0) {
                        $('#nuevo').show(500);
                        $('#Id_categoria').val(data.Id_categoria);
                        $('#Subcategoria').val(data.Subcategoria);
                        $('#Id').val(data.Id);
                    } else{ alert(data.info);$('#nuevo').hide(500); }
                }, 'json');

            });
            $('.delete').click(function(e) {
                e.preventDefault();
                $l = $(this);
                if (!confirm('Eliminar una Subcategoría es una acción que no puede deshaserce.\nEstá seguro que desea continuar?')) return false;

                $.get($l.attr('href'), function(data) {
                    if (data.status == 'ok') {
                        $l.parents('tr').fadeOut('slow', function(e) {
                            $(this).remove();
                        });
                    } else $('#info').echomsg(data.info, 'danger').slideDown()
                }, 'json');

            });

            $('#subcat-nuevo').submit(function(e) {
                var $this = $(this);
                e.preventDefault();

                var  params = $this.serialize();

               
                $.post($this.attr('action'), params, function(data){
                    
                    if (data.status == 'ok') {
                        window.location = "<?php echo $base_path;?>/parametros/subcategorias/alert/success/"+data.info;
                        
                        return;
                    } else {
                        $('#info').echomsg(data.info, 'danger').slideDown();
                    }

                }, 'json');
            });


        });

    </script>

</body>

</html>