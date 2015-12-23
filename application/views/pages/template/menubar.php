<nav class="navbar navbar-default box-shadow" >
    <div class="container container-nav">
        <div class="collapse navbar-collapse col-lg-6 col-md-6">
            <ul class="nav navbar-nav  navbar-left">
                <li><img src="<?php echo base_url("assets/themes/default/images/logo-01.png") ?>" width="450px" /></li>
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
                        <a href="<?php echo base_url(); ?>">TAT License No. 11/08118</a>
                    </li>
                    <li>
                        <a href="#" class="changeLang" data="th">
                            <img src="<?php echo base_url("assets/themes/default/images/icon-menu/334c9-flag-thai.png"); ?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="changeLang" data="en">
                            <img src="<?php echo base_url("assets/themes/default/images/icon-menu/a55a9-flag-united-states.png"); ?>"/>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li<?php echo ($menu_header == "home" ? " class='active'" : ""); ?>>
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li<?php echo ($menu_header == "gallery" ? " class='active'" : ""); ?>>
                        <a href="<?php echo base_url("gallery"); ?>">Gallery</a>
                    </li>
                    <li<?php echo ($menu_header == "about" ? " class='active'" : ""); ?>>
                        <a href="<?php echo base_url("index/about"); ?>">About Us</a>
                    </li>
                    <li<?php echo ($menu_header == "contact" ? " class='active'" : ""); ?>>
                        <a href="<?php echo base_url("index/contact"); ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>