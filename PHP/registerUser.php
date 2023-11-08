<?php
    require_once 'connect.php';

    $table = 'jobseekers';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $description = $_POST['description'];

    if($password == $confirmpassword){
        $password = md5($password);
        $sql = "INSERT INTO $table (firstname, lastname, email, password, description) VALUES ('$firstname', '$lastname', '$email', '$password', '$description')";
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