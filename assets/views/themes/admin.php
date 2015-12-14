<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="resource-type" content="document" />
        <meta name="robots" content="all, index, follow"/>
        <meta name="googlebot" content="all, index, follow" />
        <?php
        /** -- Copy from here -- */
        if (!empty($meta))
            foreach ($meta as $name => $content) {
                echo "\n\t\t";
                ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
            }
        echo "\n";

        if (!empty($canonical)) {
            echo "\n\t\t";
            ?><link rel="canonical" href="<?php echo $canonical ?>" /><?php
        }
        echo "\n\t";

        foreach ($css as $file) {
            echo "\n\t\t";
            ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
        } echo "\n\t";

        foreach ($js as $file) {
            echo "\n\t\t";
            ?><script src="<?php echo $file; ?>"></script><?php
        } echo "\n\t";

        /** -- to here -- */
        ?>
        <link href="<?php echo base_url(); ?>assets/homepage/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/homepage/css/shop-homepage.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/homepage/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <!-- Le styles -->

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        <script src="<?php echo base_url(); ?>assets/homepage/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/homepage/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/homepage/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/homepage/js/tourmaline.js"></script>

        <style type="text/css" >

            body {
                background-color: rgba(217, 237, 247, 0.19);
                /*                background-image: url("<?php echo base_url(); ?>assets/themes/default/images/bg-image.png");
                                background-repeat: no-repeat;
                                 background-size:cover;*/
            }
        </style> 
    <body>

        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#">Project name</a>-->
                </div>
                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url("")?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/group")?>">Group</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/category")?>">Category</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/banner")?>">Banner</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/product")?>">Product</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/gallery")?>">Gallery</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/pages")?>">Pages</a>
                        </li>
                    </ul>

<!--                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../navbar/">Default</a></li>
                        <li><a href="../navbar-static-top/">Static top</a></li>
                        <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                    </ul>-->
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container" style="margin-top: 50px">

            <div class="row">

                <div class="col-md-12">
                    <?php echo $output; ?>
                </div>

            </div>

        </div>
        <!-- /.container -->

        <div class="container">

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->


    </body>

</html>
