<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("templates/head") . ( substr("templates/head",-1,1) != "/" ? "/" : "" ) . basename("templates/head") );?>

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
         <?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("templates/menu") . ( substr("templates/menu",-1,1) != "/" ? "/" : "" ) . basename("templates/menu") );?>

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
                                    <input class="form-control" name="Producto" id="Producto" value="<?php echo $Producto;?>"  placeholder="Nombre del producto">
                                </div>
                                <div class="form-group">
                                    <label>Marca</label>
                                    <select class="form-control" name="Id_marca" id="Id_marca">
                                    <option value="0">Ingrese una Marca</option>
                                    <?php $counter1=-1; if( isset($marcas) && is_array($marcas) && sizeof($marcas) ) foreach( $marcas as $key1 => $value1 ){ $counter1++; ?>

                                        <option value="<?php echo $value1["Id"];?>" <?php if( $value1["Id"]==$Id_marca ){ ?> selected <?php } ?>><?php echo $value1["Marca"];?></option>

                                    <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <select class="form-control" name="Id_categoria" id="Id_categoria">
                                    <option value="0">Ingrese una categoría</option>
                                    <?php $counter1=-1; if( isset($categorias) && is_array($categorias) && sizeof($categorias) ) foreach( $categorias as $key1 => $value1 ){ $counter1++; ?>

                                        <option value="<?php echo $value1["Id"];?>" <?php if( $value1["Id"]==$Id_categoria ){ ?> selected <?php } ?>><?php echo $value1["Categoria"];?></option>

                                    <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Subcategoria</label>
                                    <select class="form-control" name="Id_subcategoria" id="Id_subcategoria" <?php if( $Id_categoria<=0 ){ ?> disabled <?php } ?>>
                                        <option value="0">Ingrese una subcategoría</option>
                                    <?php $counter1=-1; if( isset($subcategorias) && is_array($subcategorias) && sizeof($subcategorias) ) foreach( $subcategorias as $key1 => $value1 ){ $counter1++; ?>

                                        <option value="<?php echo $value1["Id"];?>" <?php if( $value1["Id"]==$Id_subcategoria ){ ?> selected <?php } ?>><?php echo $value1["Subcategoria"];?></option>

                                    <?php } ?>

                                    </select>
                                </div>
                               <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3"><?php echo $Descripcion;?></textarea>
                                </div>

                            </div>

                            <div class="col-lg-2">
                                <div id="idp-panel-column-img">
                                    <div class="image-preview-holder">
                                        <?php if( $img_name_1 ){ ?>

                                        <img id="img-preview-1" src="http://bugsalimentos.com/admin/../img_products/<?php echo $img_name_1;?>" width="160" alt="">
                                        <?php }else{ ?>

                                        <img id="img-preview-1" src="http://bugsalimentos.com/admin/img/img-foto-adicional.jpg" width="160"  alt="">
                                        <?php } ?>

                                        <a href="http://bugsalimentos.com/admin/#" class="button" id="select-img-button">Seleccionar Imagen</a>
                                    </div>

                                    <div class="image-preview-holder">
                                        <?php if( $img_name_2 ){ ?>

                                        <img id="img-preview-2" src="http://bugsalimentos.com/admin/../img_products/<?php echo $img_name_2;?>" width="160"  alt="">
                                        <?php }else{ ?>

                                        <img id="img-preview-2" src="http://bugsalimentos.com/admin/img/img-foto-adicional.jpg" width="160" alt="">
                                        <?php } ?>

                                        <a href="http://bugsalimentos.com/admin/#" class="button" id="select-img-button-2">Seleccionar Imagen</a>
                                    </div>                      
                                    <div class="image-preview-holder">
                                        <?php if( $img_name_3 ){ ?>

                                        <img id="img-preview-3" src="http://bugsalimentos.com/admin/../img_products/<?php echo $img_name_3;?>" width="160"  alt="">
                                        <?php }else{ ?>

                                        <img id="img-preview-3" src="http://bugsalimentos.com/admin/img/img-foto-adicional.jpg" width="160" alt="">
                                        <?php } ?>

                                        <a href="http://bugsalimentos.com/admin/#" class="button" id="select-img-button-3">Seleccionar Imagen</a>
                                    </div>
                                    <div class="image-preview-holder">
                                        <?php if( $img_name_4 ){ ?>

                                        <img id="img-preview-4" src="http://bugsalimentos.com/admin/../img_products/<?php echo $img_name_4;?>" width="160"  alt="">
                                        <?php }else{ ?>

                                        <img id="img-preview-4" src="http://bugsalimentos.com/admin/img/img-foto-adicional.jpg" width="160" alt="">
                                        <?php } ?>

                                        <a href="http://bugsalimentos.com/admin/#" class="button" id="select-img-button-4">Seleccionar Imagen</a>
                                    </div>
                                    <div class="image-preview-holder">
                                        <?php if( $img_name_5 ){ ?>

                                        <img id="img-preview-5" src="http://bugsalimentos.com/admin/../img_products/<?php echo $img_name_5;?>" width="160"  alt="">
                                        <?php }else{ ?>

                                        <img id="img-preview-5" src="http://bugsalimentos.com/admin/img/img-foto-adicional.jpg" width="160" alt="">
                                        <?php } ?>

                                        <a href="http://bugsalimentos.com/admin/#" class="button" id="select-img-button-5">Seleccionar Imagen</a>
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
    <?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("templates/js") . ( substr("templates/js",-1,1) != "/" ? "/" : "" ) . basename("templates/js") );?>


<script type="text/javascript" src="http://bugsalimentos.com/admin/tinymce/tinymce.min.js"></script>

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
        <form action="http://bugsalimentos.com/admin/<?php echo $controller;?>/submit-picture" method="post" enctype="multipart/form-data" id="ajax_upload_from" target="ajax_upload_frame">
            <input type="file" name="picture" id="picture">
            <input type="hidden" id="num_foto" name="num_foto" value="" >
        </form>
        <iframe src="about:blank" frameborder="0" id="ajax_upload_frame" name="ajax_upload_frame" ></iframe>
    </div>
</body>

</html>