<?php

include("../database/config.php");


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];

$statement = $db->prepare("INSERT INTO customers (first_name, last_name, phone_number, email) VALUES (?,?,?,?)");
$statement->bind_param('ssss', $firstName, $lastName, $phoneNumber, $email);
$statement->execute();

if ($statement->affected_rows == -1) {
    echo "
        <div class='alert alert-danger'>
            <strong>Failure! </strong>Class could not be added to the database, please try again.
        </div>";
} else {
    echo "
        <div class='alert alert-success'>
            <strong>Success! </strong>Class has been successfully added to the database.
        </div>";
    $statement->close();
}


?>