<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {    
    $firstname = $crud->escape_string($_POST['firstname']);
    $lastname = $crud->escape_string($_POST['lastname']);
    $address = $crud->escape_string($_POST['address']);
        
    //insert data to database
    $sql = "INSERT INTO members (firstname, lastname, address) VALUES ('$firstname','$lastname','$address')";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add member';
    }
        
    header('location: index.php');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: index.php');
}
?>