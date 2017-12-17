<?php
include 'database.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$department = $_POST['department'];
$email = $_POST['email'];

$statement = $conn->prepare("INSERT INTO employees(first_name, last_name, department, email)
    VALUES(:fname, :lname, :department, :email)");
$statement->execute(array(
    "fname" => $firstname,
    "lname" => $lastname,
    "department" => $department,
    "email" => $email
));
