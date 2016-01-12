<div class="col-md-9-5 col-xs-9-5">
    <div class="row">

        <div class="col-lg-12">
            <!--<h1 class="page-header">Gallery</h1>-->
            <h2> 

                <?php if (isset($gallerys)) { ?>
                    <a class="gallery-header" href="<?php echo base_url("gallery"); ?>" >
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        Gallery
                        <span class="small"><?php echo "($galleryGroupName)"; ?></span>
                    </a>
                <?php
                } else {
                    echo "Gallery";
                }
                ?>
                </h2>
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
                $pathImg = base_url(Constant::getUploadGalleryPath("/" . $gallery["gallery_link"]));
                ?>

                <div class="col-lg-4 col-md-4 col-xs-6 disabled">
                    <!--                    <a class="thumbnail-group-gallery" href="#">
                                            <img class="img-responsive" src="<?php echo $pathImg; ?>" alt="">
                                        </a>-->

                    <a class="thumbnail-group-gallery group1" href="<?php echo $pathImg; ?>" >
                        <img class="img-responsive" src="<?php echo $pathImg; ?>" alt="">
                    </a>


                </div>
                <?php
            }
        }
        ?>

        <!--<body>-->
        <!--		<h1>Colorbox Demonstration</h1>
                        <h2>Elastic Transition</h2>
                        <p><a class="group1" href="assets/colorbox-master/content/ohoopee1.jpg" title="Me and my grandfather on the Ohoopee.">Grouped Photo 1</a></p>
                        <p><a class="group1" href="../content/ohoopee2.jpg" title="On the Ohoopee as a child">Grouped Photo 2</a></p>
                        <p><a class="group1" href="../content/ohoopee3.jpg" title="On the Ohoopee as an adult">Grouped Photo 3</a></p>
                        
                        <h2>Fade Transition</h2>
                        <p><a class="group2" href="../content/ohoopee1.jpg" title="Me and my grandfather on the Ohoopee">Grouped Photo 1</a></p>
                        <p><a class="group2" href="../content/ohoopee2.jpg" title="On the Ohoopee as a child">Grouped Photo 2</a></p>
                        <p><a class="group2" href="../content/ohoopee3.jpg" title="On the Ohoopee as an adult">Grouped Photo 3</a></p>
                        
                        <h2>No Transition + fixed width and height (75% of screen size)</h2>
                        <p><a class="group3" href="../content/ohoopee1.jpg" title="Me and my grandfather on the Ohoopee.">Grouped Photo 1</a></p>
                        <p><a class="group3" href="../content/ohoopee2.jpg" title="On the Ohoopee as a child">Grouped Photo 2</a></p>
                        <p><a class="group3" href="../content/ohoopee3.jpg" title="On the Ohoopee as an adult">Grouped Photo 3</a></p>
                        
                        <h2>Slideshow</h2>
                        <p><a class="group4"  href="../content/ohoopee1.jpg" title="Me and my grandfather on the Ohoopee.">Grouped Photo 1</a></p>
                        <p><a class="group4"  href="../content/ohoopee2.jpg" title="On the Ohoopee as a child">Grouped Photo 2</a></p>
                        <p><a class="group4"  href="../content/ohoopee3.jpg" title="On the Ohoopee as an adult">Grouped Photo 3</a></p>
                        
                        <h2>Other Content Types</h2>
                        <p><a class='ajax' href="../content/ajax.html" title="Homer Defined">Outside HTML (Ajax)</a></p>
                        <p><a class='youtube' href="http://www.youtube.com/embed/VOJyrQa_WR4?rel=0&amp;wmode=transparent">Flash / Video (Iframe/Direct Link To YouTube)</a></p>
                        <p><a class='vimeo' href="http://player.vimeo.com/video/2285902" title="R&ouml;yksopp: Remind Me">Flash / Video (Iframe/Direct Link To Vimeo)</a></p>
                        <p><a class='iframe' href="http://wikipedia.com">Outside Webpage (Iframe)</a></p>
                        <p><a class='inline' href="#inline_content">Inline HTML</a></p>
                        
                        <h2>Demonstration of using callbacks</h2>
                        <p><a class='callbacks' href="../content/marylou.jpg" title="Marylou on Cumberland Island">Example with alerts</a>. Callbacks and event-hooks allow users to extend functionality without having to rewrite parts of the plugin.</p>
                        
        
                        <h2>Retina Images</h2>
                        <p><a class="retina" href="../content/daisy.jpg" title="Retina">Retina</a></p>
                        <p><a class="non-retina" href="../content/daisy.jpg" title="Non-Retina">Non-Retina</a></p>
        
                         This contains the hidden content for inline calls 
                        <div style='display:none'>
                                <div id='inline_content' style='padding:10px; background:#fff;'>
                                <p><strong>This content comes from a hidden element on this page.</strong></p>
                                <p>The inline option preserves bound JavaScript events and changes, and it puts the content back where it came from when it is closed.</p>
                                <p><a id="click" href="#" style='padding:5px; background:#ccc;'>Click me, it will be preserved!</a></p>
                                
                                <p><strong>If you try to open a new Colorbox while it is already open, it will update itself with the new content.</strong></p>
                                <p>Updating Content Example:<br />
                                <a class="ajax" href="../content/ajax.html">Click here to load new content</a></p>
                                </div>
                        </div>-->
        <!--</body>-->

<!--        <section>
    <h3>Two Individual Images</h3>
    <div>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-1.jpg" data-lightbox="example-1"><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" /></a>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-2.jpg" data-lightbox="example-2" data-title="Optional caption."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-2.jpg" alt="image-1"/></a>
    </div>

    <hr />

    <h3>A Four Image Set</h3>
    <div>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-3.jpg" alt=""/></a>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-4.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-4.jpg" alt="" /></a>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-5.jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-5.jpg" alt="" /></a>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-6.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-6.jpg" alt="" /></a>
    </div>
</section>-->
    </div>
</div>