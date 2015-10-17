{include="templates/head"}
<style type="text/css">
    .image-preview-holder {float: left; position:relative;}
    
    #img-preview-1 {margin-top:3px; border:solid 1px #BDBDBD;}
    #img-preview-2 {margin-top:3px; border:solid 1px #BDBDBD;}
    #img-preview-3 {margin-top:3px; border:solid 1px #BDBDBD;}
    #img-preview-4 {margin-top:3px; border:solid 1px #BDBDBD;}
    #img-preview-5 {margin-top:3px; border:solid 1px #BDBDBD;}
    .image-preview-holder a.button{display:block;text-align:center;}
    .filtros{width: 170px; float: left; border: 1px #ccc solid; margin: 5px; padding: 5px;}
    .check{width: 15px !important;}
</style>
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

                        <h1 class="page-header">Producto</h1>
                        <form role="form">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre del producto</label>
                                    <input class="form-control" name="Producto" id="Producto" value="{$Producto}"  placeholder="Nombre del producto">
                                </div>
                                <div class="form-group">
                                    <label>Marca</label>
                                    <select class="form-control" name="Id_marca" id="Id_marca">
                                    <option value="0">Ingrese una Marca</option>
                                    {loop="marcas"}
                                        <option value="{$value.Id}" {if="$value.Id==$Id_marca"} selected {/if}>{$value.Marca}</option>

                                    {/loop}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <select class="form-control" name="Id_categoria" id="Id_categoria">
                                    <option value="0">Ingrese una categoría</option>
                                    {loop="categorias"}
                                        <option value="{$value.Id}" {if="$value.Id==$Id_categoria"} selected {/if}>{$value.Categoria}</option>

                                    {/loop}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Subcategoria</label>
                                    <select class="form-control" name="Id_subcategoria" id="Id_subcategoria" {if="$Id_categoria<=0"} disabled {/if}>
                                        <option value="0">Ingrese una subcategoría</option>
                                    {loop="subcategorias"}
                                        <option value="{$value.Id}" {if="$value.Id==$Id_subcategoria"} selected {/if}>{$value.Subcategoria}</option>

                                    {/loop}
                                    </select>
                                </div>
                               <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3">{$Descripcion}</textarea>
                                </div>
                               <div class="form-group">
                                    <label>Presentaciones</label>
                                    {loop="presentaciones"}
                                        <li>{$value.Presentacion} <input type="checkbox" name="Presentacion[]" id="Presentacion-{$key}" value="{$value.Id}"  {if="$value.Producto>0"}checked{/if}>
                                    {/loop}
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div id="idp-panel-column-img">
                                    <div class="image-preview-holder">
                                        {if="$img_name_1"}
                                        <img id="img-preview-1" src="../img_products/{$img_name_1}" width="160" alt="">
                                        {else}
                                        <img id="img-preview-1" src="img/img-foto-adicional.jpg" width="160"  alt="">
                                        {/if}
                                        <a href="#" class="button" id="select-img-button">Seleccionar Imagen</a>
                                    </div>

                                    <div class="image-preview-holder">
                                        {if="$img_name_2"}
                                        <img id="img-preview-2" src="../img_products/{$img_name_2}" width="160"  alt="">
                                        {else}
                                        <img id="img-preview-2" src="img/img-foto-adicional.jpg" width="160" alt="">
                                        {/if}
                                        <a href="#" class="button" id="select-img-button-2">Seleccionar Imagen</a>
                                    </div>                      
                                    <div class="image-preview-holder">
                                        {if="$img_name_3"}
                                        <img id="img-preview-3" src="../img_products/{$img_name_3}" width="160"  alt="">
                                        {else}
                                        <img id="img-preview-3" src="img/img-foto-adicional.jpg" width="160" alt="">
                                        {/if}
                                        <a href="#" class="button" id="select-img-button-3">Seleccionar Imagen</a>
                                    </div>
                                    <div class="image-preview-holder">
                                        {if="$img_name_4"}
                                        <img id="img-preview-4" src="../img_products/{$img_name_4}" width="160"  alt="">
                                        {else}
                                        <img id="img-preview-4" src="img/img-foto-adicional.jpg" width="160" alt="">
                                        {/if}
                                        <a href="#" class="button" id="select-img-button-4">Seleccionar Imagen</a>
                                    </div>
                                    <div class="image-preview-holder">
                                        {if="$img_name_5"}
                                        <img id="img-preview-5" src="../img_products/{$img_name_5}" width="160"  alt="">
                                        {else}
                                        <img id="img-preview-5" src="img/img-foto-adicional.jpg" width="160" alt="">
                                        {/if}
                                        <a href="#" class="button" id="select-img-button-5">Seleccionar Imagen</a>
                                    </div>

                                </div>
                            </div>
                        </form>
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

<script type="text/javascript" src="tinymce/tinymce.min.js"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: "#Descripcion",
            language: "es",
            height : 300
        });

        
        function finishUploadingPicture(info,id){
        
            uploading = false,
            uploaded = true;
            $('#msgs').echomsg('Terminando...', 'success');
            
            $('#img-preview-'+id).attr('src', info).fadeIn();

        }

        $(document).ready(function(e) {
            $("#Id_categoria").change(function () {
              var id, valores;

              $.post('getSubcategorias', { id: $("#Id_categoria").val() }, function(data){
                if(data.length>0){

                  $("#Id_subcategoria").removeAttr("disabled");
                  $("#Id_subcategoria").empty();

                  for( i = 0; i <  data.length; i++ ){
                    
                    $('#Id_subcategoria').append('<option value="'+data[i].Id+'" >'+data[i].Subcategoria+'</option>');
                  }
                }else{
                  $("#Id_subcategoria").empty();
                  $("#Id_subcategoria").append('<option selected="selected" value="0">------</option>')
                  $("#Id_subcategoria").prop('disabled', 'disabled');
                }
              }, 'json');
            });

            $('#select-img-button').click(function(e) {
                e.preventDefault();
                $('#num_foto').val(1);
                $('#picture').click();
            });
            $('#select-img-button-2').click(function(e) {
                e.preventDefault();
                $('#num_foto').val(2);
                $('#picture').click();
            });
            $('#select-img-button-3').click(function(e) {
                e.preventDefault();
                $('#num_foto').val(3);
                $('#picture').click();
            });
            $('#select-img-button-4').click(function(e) {
                e.preventDefault();
                $('#num_foto').val(4);
                $('#picture').click();
            });
            $('#select-img-button-5').click(function(e) {
                e.preventDefault();
                $('#num_foto').val(5);
                $('#picture').click();
            });
            $('#picture').change(function(e) {
                uploaded = false;
                uploading = true;           
                $('#msgs').echomsg('Subiendo Imagen...', 'info');
                $('#ajax_upload_from').submit();
            });

        });

    </script>
    <div class="hidden">
        <form action="{$controller}/submit-picture" method="post" enctype="multipart/form-data" id="ajax_upload_from" target="ajax_upload_frame">
            <input type="file" name="picture" id="picture">
            <input type="hidden" id="num_foto" name="num_foto" value="" >
        </form>
        <iframe src="about:blank" frameborder="0" id="ajax_upload_frame" name="ajax_upload_frame" ></iframe>
    </div>
</body>

</html>