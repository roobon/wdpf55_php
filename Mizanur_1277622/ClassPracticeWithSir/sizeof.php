<?php
$summary = <<<summary
The most up to date source for PHP documentation is the PHP manual.
It contins many examples and user contributed code and comments.
It is available on the main PHP web 
<a href="http://www.php.net">PHP’s</a>.
summary;
$words = sizeof(explode(' ',strip_tags($summary))); //sizeof makes array of a string
echo "<pre>";
echo "Total words in summary: $words";
//print_r($words);
?>