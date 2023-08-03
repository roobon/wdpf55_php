<?php
   $photos = ["photo1.jpg", "photo2.jpg", "photo10.jpg", "photo22.jpg", "photo23.jpg", "photo100.jpg"];

    sort($photos);
    echo("<pre>");
    print_r($photos);
    echo("<br>");

    natsort($photos);
    echo("<pre>");
    print_r($photos);
