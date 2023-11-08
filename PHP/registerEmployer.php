<?php
    require_once 'connect.php';

    $table = 'employer';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $companyname = $_POST['companyname'];

    if($password == $confirmpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO $table (firstname, lastname, email, password, company_name) VALUES ('$firstname', '$lastname', '$email', '$password', '$companyname')";
        if($conn->query($sql) === TRUE){
            echo '<script>alert("User registered successfully.");</script>';
            echo '<script>window.location.href = "../HTML/loginPage.html";</script>';
            exit;
        }
        else{
            echo '<script>alert("Error: ");</script>';
            echo '<script>window.location.href = "../HTML/registerPage.html";</script>';
            exit;
        }
    }
    else{
        echo '<script>alert("Password and confirm password do not match.");</script>';
        echo '<script>window.location.href = "../HTML/registerPage.html";</script>';
        exit; 
    }

?>