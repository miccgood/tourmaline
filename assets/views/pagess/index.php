
<h1> <font style="color: #5D5D5D;"> {h_header} </font> <span class="small">{s_header}</span></h1>
<hr/>
<div class="row" id="content">
    <?php foreach ($products as $key => $product) { ?>
        <div class="col-sm-6 col-lg-6 col-md-6">

            <a href="<?php echo base_url("product/index/" . $product["category_id"]."/" . $product["id"]); ?>">
                <div class="thumbnail">
                    <img src="<?php echo base_url(Constant::getUploadProductBannerPath() . $product["product_banner_link"]) ?>" alt="">

                    <hr/>
                    <div class="caption">

                        <h4 class="pull-right"><?php echo number_format($product["product_price"], 0, '.', ','); ?> บาท</h4>
                        <h4>
                            <?php echo $product["product_header"] ?>
                        </h4>
                        <div class="subHeader">
                            <?php echo $product["product_sub_header"] ?>
                        </div>

                    </div>
                    <div class="ratings">
                        <!--<p class="pull-right">15 reviews</p>-->
                        <p>

                            <?php
                            for ($i = 0; $i < $product["star"]; $i++) {
                                echo '<span class="glyphicon glyphicon-star"></span>';
                            }

                            for ($i = 0; $i < 5 - $product["star"]; $i++) {
                                echo '<span class="glyphicon glyphicon-star-empty"></span>';
                            }
                            ?>

        <!--                <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>-->
                        </p>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>