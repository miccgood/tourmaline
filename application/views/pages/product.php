
<h1> <font style="color: #5D5D5D;"> {h_header} </font> <span class="small">{s_header}</span></h1>
<hr/>
<div class="row" id="content">

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="product">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
                    <img src="<?php echo base_url(Constant::getUploadProductBannerPath() . "{product_banner_link}"); ?>" class="banner"/>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <label class="col-lg-3 col-md-3 col-sm-3">ประเทศ</label>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            {product_country}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-md-3 col-sm-3">Code</label>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            {product_code}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-md-3 col-sm-3">ราคา(เริ่มที่)</label>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <?php echo number_format($product_price, 0, '.', ','); ?> 
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-md-3 col-sm-3">โปรแกรม</label>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            {product_program}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-md-3 col-sm-3">ระยะเวลา</label>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            {product_period}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-md-3 col-sm-3">กำหนดการเดินทาง</label>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            {product_itinerary}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            {product_details}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p>
                                <a href="<?php echo base_url(Constant::getUploadProductPdfPath("/{product_pdf_link}"))?>"  target="_blank">
                                    <img src="<?php echo base_url(Constant::getImagePath("download_btn.png"))?>" alt="download_pdf" border="0">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>