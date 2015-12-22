<div class="col-md-9-5 col-xs-9-5">
    <div class="row">

        <div class="col-lg-12">
            <!--<h1 class="page-header">Gallery</h1>-->
            <h2> <font style="color: #5D5D5D;"> Gallery </font> <span class="small"></span></h2>
        </div>
        <div class="col-lg-12">
            <hr/>
        </div>

        <?php
        if (isset($group_gallerys)) {
            foreach ($group_gallerys as $group_gallery) {
                ?>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail-group-gallery" href="<?php echo base_url("gallery/group/" . $group_gallery["id"]); ?>">
                        <h6><?php echo $group_gallery["group_gallery_name"]; ?></h6>
                        <hr/>
                        <img class="img-responsive" src="<?php
                             echo base_url(Constant::getUploadGalleryPath("/" . $group_gallery["gallery_link"]));
                             ?>" alt="">
                    </a>
                </div>
            <?php
            }
        }
        ?>
        
          <?php
        if (isset($gallerys)) {
            foreach ($gallerys as $gallery) {
                ?>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail-group-gallery" href="#">
                        <img class="img-responsive" src="<?php
                             echo base_url(Constant::getUploadGalleryPath("/" . $gallery["gallery_link"]));
                             ?>" alt="">
                    </a>
                </div>
            <?php
            }
        }
        ?>
        
    </div>
</div>