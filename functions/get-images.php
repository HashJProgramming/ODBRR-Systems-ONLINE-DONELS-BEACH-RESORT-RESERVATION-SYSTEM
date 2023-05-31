
<?php
function get_image(){
    // get all images in functions/images and echo each one as a swiper slide
    $images = scandir('functions/images');
    foreach ($images as $image) {
        if ($image === '.' || $image === '..') {
            continue;
        }
        echo '<div class="swiper-slide" style="background: url(&quot;functions/images/' . $image . '&quot;) center center / cover no-repeat;"></div>';
    }
}