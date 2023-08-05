<?php 
$info = pathinfo("F:\Mizanur_Rahman_1277622\XAMPP\htdocs\wdpf55_php\Mizanur_1277622\ClassPracticeWithSir\upload/test.txt");
echo "<pre>";
print_r($info);

printf("Dir name: %s <br />", $info['dirname']);
printf("Base name: %s <br />", $info['basename']);
printf("Extension: %s <br />", $info['extension']);
printf("Filename: %s <br />", $info['filename']);

//echo $info['basename'];

?>