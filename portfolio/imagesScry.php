<?php
  $images = array( "../ph/Scry.mp4");

  foreach ($images as $image) {
    echo '
    <video autoplay loop class="photoblock" width="600px">
    <source src="'.$image.'" type='."video/mp4".'>
    </video>';
  }
?>