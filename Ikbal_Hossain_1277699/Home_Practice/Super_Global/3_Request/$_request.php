<!-- GET method -->

<!-- <div class="container" style="display: inline; padding: 100px;">
    <form action="action.php" method="">
        Name: <input type="text" name="ename" placeholder="Enter your name"> <br> <br>
        Mobile: <input type="text" name="mobile" placeholder="Enter your phone number"> <br> <br>
        <input type="submit" name="submit" value="Submit" style="margin-left: 80px;">
    </form>
</div> -->



<!-- POST method -->

<!-- <div class="container" style="display: inline; padding: 100px;">
    <form action="action.php" method="POST">
        Name: <input type="text" name="ename" placeholder="Enter your name"> <br> <br>
        Mobile: <input type="text" name="mobile" placeholder="Enter your phone number"> <br> <br>
        <input type="submit" name="submit" value="Submit" style="margin-left: 80px;">
    </form>
</div> -->



<!-- Passing id a query string -->

<!-- sometime we require to send additional parameters/values like (?id=5=>query string passing) at the time of form submission to update or to delete this record from the database -->

<div class="container" style="display: inline; padding: 100px;">
    <form action="action.php?id=5" method="POST">
        Name: <input type="text" name="ename" placeholder="Enter your name"> <br> <br>
        Mobile: <input type="text" name="mobile" placeholder="Enter your phone number"> <br> <br>
        <input type="submit" name="submit" value="Submit" style="margin-left: 80px;">
    </form>
</div>\
<!-- so I want to access these (?id=5) values on action.php page -->