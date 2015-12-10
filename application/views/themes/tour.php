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
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
            
<!--          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>-->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        
<!--        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                 Brand and toggle get grouped for better mobile display 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() . "index.php/tourmaline/#"; ?>">
                        <img src="<?php echo base_url("assets/themes/default/images/logo-01.png") ?>" width="200px"/>
                    </a>
                </div>
                 Collect the nav links, forms, and other content for toggling 
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                 /.navbar-collapse 
            </div>
             /.container 
        </nav>-->

        <?php
//    var_dump($group_category);
        ?>
        <img src="<?php echo base_url("assets/themes/default/images/bg-header-02.png") ?>" width="100%"/>

        <!-- Page Content -->
        <div class="container" style="margin-top: 20px">

            <div class="row">
                
                <div class="col-md-3 col-xs-3">
                    <div id="accordion">
                        <?php
                        foreach ($group_category as $value) {
                            echo "<h3>";
                            if($value->icon){
                                echo "<img src='" . base_url(Constant::getUploadIconPath() . $value->icon) . "' /> ";
                            }
                            echo $value->name . "</h3>";
                            echo '<div class="list-group">';
                            foreach ($value->arr as $arr) {
                                echo '<a href="' . base_url("index/thai1") . '" class="list-group-item"> <span class="badge">12</span>' . $arr . '</a>';
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

                    <div class="row">
                        <?php echo $output; ?>
                    </div>

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
