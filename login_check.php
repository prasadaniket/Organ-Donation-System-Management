<?php
include "connection.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password are not empty
    if(!empty($email) && !empty($password)) {

        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        // Query to check if the email and password match
        $query = "SELECT * FROM donationhistory WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if ($row['password'] == $password) { 

                echo "<script>window.open('index.php','_self')</script>";
                exit();
            } else {
                // Incorrect password
                echo "<script>window.open('passerror.php','_self')</script>";
                exit(); 
                        }
        } else {
            // Email not found
            echo "<script>window.open('passerror.php','_self')</script>";
            exit(); 
        }
    } else {
        // Email or password is empty
        echo "<script>alert('Email and password are required');</script>";
    }
}

$conn->close(); 
?>

