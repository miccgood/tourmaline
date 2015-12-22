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
        <?php echo $this->load->get_section('menubar'); ?>

<!--<img src="<?php echo base_url("assets/themes/default/images/bg-header-02.png") ?>" width="100%"/>-->

        <!-- Page Content -->
        <div class="container body-container box-shadow">

            <?php echo $this->load->get_section('banner'); ?>

            <div class="row">

                <?php echo $this->load->get_section('sidebar'); ?>
                
                <?php echo $output; ?>

            </div>

            <!--<hr>-->
            <!-- Footer -->
            <?php echo $this->load->get_section('footer'); ?>
        </div>
        <!-- /.container -->
        
        
        <?php
        foreach ($js as $file) {
            echo "\n\t\t";
            ?><script src="<?php echo $file; ?>"></script><?php
        } echo "\n\t";

        /** -- to here -- */
        ?>
                
            
    </body>

</html>