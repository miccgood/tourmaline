
<div class="col-md-9-5 col-xs-9-5">
    <h2> <font style="color: #5D5D5D;"> {h_header} </font> <span class="small">{s_header}</span></h2>
    <hr/>


    <div class="row">

        <div class="col-sm-12 col-lg-12 col-md-12">
            <?php
            $limitValue = Constant::getLimitValue();
            $maxPage = ceil($countProduct / $limitValue) - 1;
            if ($countProduct > $limitValue) {
                ?>
                <ul class="pagination pagination-right">
                    <li<?php echo ($page == 0 ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/0"); ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li<?php echo ($page == 0 ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/" . ($page - 1)); ?>" aria-label="Previous">
                            <span aria-hidden="true">&lsaquo;</span>
                        </a>
                    </li>

                    <?php for ($i = 0; $i <= $maxPage; $i++) { ?>

                        <li<?php echo ($page == $i ? ' class="disabled" ' : "" ); ?>><a href="<?php echo base_url("index/index/$categoryId/$i"); ?>"><?php echo $i + 1; ?></a></li>
                        <!--                <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>-->

                    <?php } ?>
                    <li<?php echo ($page == $maxPage ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/" . ($page + 1)); ?>" aria-label="Previous">
                            <span aria-hidden="true">&rsaquo;</span>
                        </a>
                    </li>
                    <li<?php echo ($page == $maxPage ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/$maxPage"); ?>" aria-label="Previous">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>

        </div>
    </div>

    <div class="row" id="content">
        <?php foreach ($products as $key => $product) { ?>
            <div class="col-sm-6 col-lg-6 col-md-6">

                <a href="<?php echo base_url("product/index/" . $product["category_id"] . "/" . $product["id"]); ?>">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(Constant::getUploadProductBannerPath() . $product["product_banner_link"]) ?>" alt="">

                        <hr/>
                        <div class="caption">

                                            <!--<h4 class="pull-right"><?php echo number_format($product["product_price"], 0, '.', ','); ?> บาท</h4>-->
                            <h5 class="header">
                                <?php echo $product["product_header"] ?>
                            </h5>
                            <h5 class="price">ราคา <?php echo number_format($product["product_price"], 0, '.', ','); ?> บาท</h5>
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


    <div class="row">

        <div class="col-sm-12 col-lg-12 col-md-12">

            <?php if ($countProduct > $limitValue) {
                ?>
                <ul class="pagination pagination-right">
                    <li<?php echo ($page == 0 ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/0"); ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li<?php echo ($page == 0 ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/" . ($page - 1)); ?>" aria-label="Previous">
                            <span aria-hidden="true">&lsaquo;</span>
                        </a>
                    </li>

                    <?php for ($i = 0; $i <= $maxPage; $i++) { ?>
                        <li<?php echo ($page == $i ? ' class="disabled" ' : "" ); ?>><a href="<?php echo base_url("index/index/$categoryId/$i"); ?>"><?php echo $i + 1; ?></a></li>
                    <?php } ?>
                    <li<?php echo ($page == $maxPage ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/" . ($page + 1)); ?>" aria-label="Previous">
                            <span aria-hidden="true">&rsaquo;</span>
                        </a>
                    </li>
                    <li<?php echo ($page == $maxPage ? ' class="disabled" ' : "" ); ?>>
                        <a href="<?php echo base_url("index/index/$categoryId/$maxPage"); ?>" aria-label="Previous">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>

        </div>
    </div>
</div>