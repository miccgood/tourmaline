
<div class="col-md-3-5 col-xs-3-5">

    <div class="well accordion">
        <h4>Tour Destinations</h4>
        <div id="accordion">
            <?php
            foreach ($group_category as $key => $value) {
                echo "<h3" . (isset($groupCategoryId) && $groupCategoryId == $key ? " class='expand' " : "" ) . ">";
//                                echo "<h3>";
                if ($value->icon) {
                    echo "<img src='" . base_url(Constant::getUploadIconPath() . $value->icon) . "' /> ";
                }
                echo $value->name . "</h3>";
                echo '<div class="list-group">';
                foreach ($value->arr as $arr) {
                    echo '<a href="' . base_url($arr["link"]) . '" class="list-group-item">' . $arr["name"] . '</a>';
//                            <span class="badge">12</span>
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="well accordion">
        <h4>Stats</h4>
        <iframe height=160 width="100%" src="http://www.siamvip.com/ManageFiles/counter/?web=http://tourmalinetravel.com/" frameBorder=1 scrolling=no></iframe>
    </div>
</div>