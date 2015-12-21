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