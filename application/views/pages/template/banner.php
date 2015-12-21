
<div class="row carousel-holder">

    <!--                <div class="col-md-3-5 col-xs-3-5">
                        
                    </div>-->
    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
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