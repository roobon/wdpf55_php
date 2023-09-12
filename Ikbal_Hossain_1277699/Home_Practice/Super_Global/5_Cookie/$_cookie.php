<!-- cookie is nothing but the small files which is stored into the client server/memory/browsers memory and which stored the basic information like site preferences some credentials or something sessions values. these kinds of things we are storing to the cookies -->

<!-- Cookies can be two types.
1=> memory cookies means=> till that your browser is open the cookie will reside into your browser. when as soon as you are closing your browser the cookie will destroy

2=> system cookies means=> you can set the time for that when the cookies get destroy link for one day, one minute or one hour. you can set the time -->



<!-- Example of memory cookies -->
<?php
//if(setcookie('name', 'Ikbal Hossain')){ // expire on after one hour
// echo "Cookie is created";
//}
?>



<!-- we can access the cookie on the same page or into the another page -->

<?php // Example of system cookies
// if(setcookie('name', 'Ikbal Hossain', time()+60*60)){ // expire on after one hour
// echo "Cookie is created" . "<br>";
// }
// echo $_COOKIE['name']; // COOKIE is super global variables which accept the parameter means which cookie you want to access
?>

<!-- I am going to access the cookies into another page -->

<?php
if (setcookie('name', 'Ikbal Hossain', time() + 60 * 60)) {
    echo "Cookie is created" . ", ";
}
if(setcookie('education', 'BSS in Economics, Diploma in IT', time()+60*60)){
    echo "Cookie is created";
}
?>