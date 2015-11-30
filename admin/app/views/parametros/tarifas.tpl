{include="templates/head"}

<!-- DataTables Responsive CSS -->
<link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         {include="templates/menu"}
        <!-- Fin menu -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header col-lg-12">Tarifas</h1>
                        <div class="col-lg-8" id="info">
                        {if="$msg"}
                            {$msg|echomsg:$msgType}
                        {/if}
                        </div>
                        

                        <div id="nuevo" style="display: none" class="col-lg-12">
                            <div class="col-lg-5">
                                <form action="parametros/submit_tarifa" name="cat-nuevo" id="cat-nuevo" method="get">
                                    <table  class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <th>Tarifa</th>
                                            <th>Default</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Tarifa" id="Tarifa" size="30"  class="form-control" value=""></td>
                                            <td><input type="text" name="Normal" id="Normal" size="30"  class="form-control" value=""></td>
                                            <td><input type="hidden" id="Id" name="Id" value="">           
                                        <input type="submit" id="submit" class="btn btn-success" value="Guardar"></td>
                                        </tr>
                                    </table>
                                    <div class="center">            

                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="button" onclick="$('#nuevo').slideToggle(500); return false;" >Nueva Tarifa </button>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Listado de Tarifas
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-categoria">
                                            <thead>
                                                <tr>
                                                    <th>Tarifa</th>
                                                    <th>Default</th>
                                                    <th>Editar</th>
                                                    <th>Borrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {loop="tarifas"}
                                                <tr>
                                                    <td>{$value.Tarifa}</td>
                                                    <td>{$value.Normal} %</td>
                                                    <td><a href="parametros/getTarifa/{$value.Id}" class="glyphicon glyphicon-pencil edit"></a>
                                                    <td><a href="parametros/deleteTarifa/{$value.Id}" class="glyphicon glyphicon-trash delete"></a>
                                                </tr>
                                                {else}
                                                <tr>
                                                    <td  colspan="3">No hay resultados</td>
                                                </tr>
                                                {/loop}
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
    {include="templates/js"}

    
    <script type="text/javascript">

        $(document).ready(function() {
            $('.edit').click(function(e) {
                e.preventDefault();
                $l = $(this);
                $.get($l.attr('href'), function(data) {
                    if (data.Id > 0) {
                        $('#nuevo').show(500);
                        $('#Tarifa').val(data.Tarifa);
                         $('#Normal').val(data.Normal);
                        $('#Id').val(data.Id);
                    } else{ alert(data.info);$('#nuevo').hide(500); }
                }, 'json');

            });
            $('.delete').click(function(e) {
                e.preventDefault();
                $l = $(this);
                if (!confirm('Eliminar una Tarifa es una acción que no puede deshaserce.\nEstá seguro que desea continuar?')) return false;

                $.get($l.attr('href'), function(data) {
                    if (data.status == 'ok') {
                        $l.parents('tr').fadeOut('slow', function(e) {
                            $(this).remove();
                        });
                    } else $('#info').echomsg(data.info, 'danger').slideDown()
                }, 'json');

            });

            $('#cat-nuevo').submit(function(e) {
                var $this = $(this);
                e.preventDefault();

                var  params = $this.serialize();

               
                $.post($this.attr('action'), params, function(data){
                    
                    if (data.status == 'ok') {
                        window.location = "{$base_path}/parametros/tarifas/alert/success/"+data.info;
                        
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