<?php ?>

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
        width: calc(100% / 2 - 30px);
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
                    <h1><strong>Seller</strong> Registration</h1>
                    <div class="description">
<!--                        <p>
                            This is a free responsive multi-step registration form made with Bootstrap. 
                            Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                        </p>-->
                    </div>
                    
                    <?php if(isset($msg)&&$msg!=''){?>
                    <div style="background-color: #006600; color: azure;"><strong> <?php echo $msg;?></strong></div>
                    <?php } ?>
                </div>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-body">How Would you like to proceed
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 work" style="height: 250px;float: left">
                                <figure class="white">
                                    <a href="<?php echo site_url()?>/user/listing_register"><h2>Listing only</h2></a>
                                    <div id="wrapper-part-info">
                                        <!--<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>-->
                                        <div id="part-info"></div>
                                    </div>
                                </figure>
                                <figure class="white">
                                    <a href="<?php echo site_url()?>/user/product_register"><h2>Product Sale</h2></a>
                                    <div id="wrapper-part-info">
                                        <!--<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>-->
                                        <div id="part-info"></div>
                                    </div>
                                </figure>
                            </div>
<!--                            <div class="col-sm-6" style=" height: 500px; float: right">

                            </div>-->

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<script>

</script>


