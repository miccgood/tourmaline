<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="resource-type" content="document" />
        <meta name="robots" content="all, index, follow"/>
        <meta name="googlebot" content="all, index, follow" />
        <base href="<?php echo base_url(); ?>" target="_top" id="baseUrl">
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

        <style type="text/css">
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default box-shadow" >
            <div class="container">

                <div class="collapse navbar-collapse col-lg-6 col-md-6">
                    <ul class="nav navbar-nav  navbar-left">
                        <li><img src="<?php echo base_url("assets/themes/default/images/logo-01.png") ?>" width="400px"/></li>
                    </ul>
                </div> 

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#">Project name</a>-->
                </div>



                <div class="collapse navbar-collapse navbar-right col-lg-6 col-md-6">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="disabled">
                                <a href="<?php echo base_url(); ?>">TAT LicenseNo. 11/08118</a>
                            </li>
                            <li><a href="#" class="changeLang" data="th">TH</a></li>
                            <li><a href="#" class="changeLang" data="en">EN</a></li>
                            <!--<li><a href="<?php echo base_url("admin") ?>" >Admin</a></li>-->

                        </ul>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("gallery"); ?>">Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index/about"); ?>">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index/contact"); ?>">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

<!--<img src="<?php echo base_url("assets/themes/default/images/bg-header-02.png") ?>" width="100%"/>-->

        <!-- Page Content -->
        <div class="container body-container box-shadow">

            <div class="row">

                <div class="col-md-3 col-xs-3">
                    <div id="accordion">
                        <?php
                        foreach ($group_category as $value) {
                            echo "<h3>";
                            if ($value->icon) {
                                echo "<img src='" . base_url(Constant::getUploadIconPath() . $value->icon) . "' /> ";
                            }
                            echo $value->name . "</h3>";
                            echo '<div class="list-group">';
                            foreach ($value->arr as $arr) {
                                echo '<a href="' . base_url($value->link) . '" class="list-group-item">' . $arr . '</a>';
//                            <span class="badge">12</span>
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-9 col-xs-9">



                    <div class="row carousel-holder">

                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php
                                    foreach ($banner as $key => $value) {
                                        echo '<li data-target="#carousel-example-generic" data-slide-to="' . $key . '" class="' . ($key === 0 ? "active" : "") . '"></li>';
                                    }
                                    ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php
                                    foreach ($banner as $key => $value) {
                                        echo '<div class="item ' . ($key === 0 ? "active" : "") . '">';
                                        echo '<img class="slide-image" src="' . base_url(Constant::getUploadBannerPath() . $value["link"]) . '">';
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <?php echo $output; ?>

                </div>

            </div>

            <hr>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <?php
                    foreach ($footers as $footer) {
                        echo "<div class='" . $footer["page_s_header"] . "'>";
                        echo $footer["page_details"];
                        echo '</div>';
                    }
                    ?>
                </div>
            </footer>
        </div>
        <!-- /.container -->
    </body>

</html>