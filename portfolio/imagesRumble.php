<?php
  $images = array("../ph/Rumble.mp4");

  foreach ($images as $image) {
    echo '
    <video autoplay loop class="photoblock" width="400px">
    <source src="'.$image.'" type='."video/mp4".'>
    </video>';
  }
?>