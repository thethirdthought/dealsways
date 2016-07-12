<?php
//echo '<pre>';
//print_r(json_decode($products[3]['product_image']));
//
//exit;
?>

<style>
    .work figure {
        min-height: 225px;
        overflow: hidden;
    }
    .work figure {
        background-color: #a3a2ad;
        color: #fff;
        font-weight: bolder;
        box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.2);
        float: left;
        height: auto;
        margin: 15px;
        padding: 0 !important;
        position: relative;
        transition: all 0.3s ease-in-out 0s;
        width: calc(100% / 4 - 30px);
        /*background-color: #a3a2ad*/
    }
    .work figure h2{color: #fff;
                    font-weight: bolder;}

</style>
<div class="top-content">

    <div class="inner-bg" style="background-color:#606066">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1>Add<strong> Products</strong></h1>
                    <div class="description">
                        <p>
                           Please add Your products to complete the registration process
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-body">
                    <button type="button" class="btn btn-primary" id="add_product"> Add Product</button>
                    <div class="col-sm-12 work">
                        <?php
                        $i = 1;
                        
                        
                        
                        if(isset($products)){
                        foreach ($products as $product) {
                            $prod=json_decode($product['txt_image']);
                                    ?>
                                    <figure class="white">
                                        <div><img src="<?php echo $prod[0] ?>" alt="Product Image" style="width: 100% ;" height="200"></div>
                                        <div id="wrapper-part-info">
                                            <div id="part-info"> <?php echo $product['txt_product_name'] ?></div>
                                        </div>
                                    </figure>
                                   
                        <?php $i++; }
                        }?>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Products</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="form_modal" action="<?php echo site_url(); ?>/user/save_product" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="product_name">Product Name<span style="color:#f00;">*</span></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="hidden" name="int_seller_id" id="int_seller_id" value="<?php echo $sup_id; ?>">
                                <input type="text" id="product_name" name="txt_product_name" value="" class="form-control">
                            </div><!-- /.form-group -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="product_brand">Brand<span style="color:#f00;">*</span></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" id="product_brand" name="int_brand_id" value="" class="form-control">
                            </div><!-- /.form-group -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="product_price">Price<span style="color:#f00;">*</span></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" id="product_price" name="int_price" value="" class="form-control">
                            </div><!-- /.form-group -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="product_description">Product Description<span style="color:#f00;">*</span></label>
                        <div class="col-sm-8">
                            <div class="input-group clockpicker">
                                <textarea type="text" id="product_description" name="txt_description" value="" class="form-control"></textarea>
                                <!--                                <div class="input-group-addon">
                                                                    <i class="fa fa-clock-o"></i>
                                                                </div>-->
                            </div><!-- /.form-group -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="product_image">Product Image<span style="color:#f00;">*</span></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="file" id="product_image" name="txt_image[]" value="" class="form-control" multiple>
                            </div><!-- /.form-group -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="product_video">Product Video<span style="color:#f00;">*</span></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="file" id="product_video" name="txt_video" value="" class="form-control">
                            </div><!-- /.form-group -->
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save_product" >Save</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#add_product').click(function() {
        $('form input[type = text]').val('');
        $('#suplier_id').val('<?php echo $sup_id; ?>')
        $('#myModal').modal('show');
    });
    $('#save_product').click(function() {
        $('#form_modal').submit();
    });
</script>
