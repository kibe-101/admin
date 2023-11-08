<?php

    session_start();
    
    $servername = "localhost";
    $username = "Mungiria";
    $password = "Neymar01";
    $database = "craftworks";

    $conn = new mysqli($servername, $username, $password, $database);

    $email = $_POST['email'];
    $login_password = $_POST['password'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        $employer_result = mysqli_query($conn, "SELECT * FROM employer WHERE email = '$email' ")->fetch_assoc();

        if(password_verify($login_password, $employer_result['password'])){
            $_SESSION['name'] = $employer_result['firstname'];
            echo '<script>window.location.href = "../HTML/companyHomePage.html";</script>';
        }else{
            echo "Login Failed";
        }
    }

?>