
<!-- only for GET & POST method -->

<?php
    //if (isset($_REQUEST['submit'])) {
       // echo "Name: " . $_REQUEST['ename'];
      //  echo "<br> Mobile: " . $_REQUEST['mobile'];
    //}
?>



<!-- Accessing ?id=5 as a query string -->
<?php
    if (isset($_REQUEST['submit'])) {
        echo "Name: " . $_REQUEST['ename'];
        echo "<br> Mobile: " . $_REQUEST['mobile'];
        echo "<br> ID: " . $_REQUEST['id'];
    }
?>