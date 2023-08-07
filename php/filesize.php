<?php 
  $size =   filesize("upload/photo.jpg");
  $kb = round($size/1024, 2);
  echo $kb . " KB";

?>