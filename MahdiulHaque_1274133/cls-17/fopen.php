<?php
// Open a text file for reading purposes
$fh = fopen('C:\Users\C-17\Desktop\WDPF_55WDPF\PHP\htdocs\WDPF_55_PHP\MahdiulHaque_1274133\Cls-15\123.docx', 'r');
// While the end-of-file hasn't been reached, retrieve the next line
while (!feof($fh)) echo fgets($fh) . "<br>";
// Close the file
fclose($fh);
?>


<!-- While(!feof($fh)) babohar kora hoi sob line anar jonno,fgets shudo ek line ane -->