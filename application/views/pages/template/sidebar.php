
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

     <?php foreach ($sidebarBoxs as $key => $value) {?>
        <div class="well accordion">
            <h4><?php echo $value["page_h_header"] ;?></h4>
            <?php echo $value["page_details"] ;?>
        </div>
     <?php }?> 
            
</div>