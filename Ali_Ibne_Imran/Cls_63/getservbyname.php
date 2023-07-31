<?php
     echo "HTTP's default port number is: ".getservbyname("http", "tcp")."<br>";
     echo "HTTP's default port number is: ".getservbyname("https", "tcp")."<br>";
     
     echo "Port 80's default service is: ".getservbyport(80, "tcp")."<br>";
     echo "Port 80's default service is: ".getservbyport(443, "tcp")."<br>";
 ?>