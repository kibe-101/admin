<?php
    require_once 'connect.php';

    $jobName = $_POST['jobName'];
    $jobDescription = $_POST['jobDesc'];
    $jobPay = $_POST['jobPay'];
    $jobReq = $_POST['jobReq'];

    $sql = "INSERT INTO jobs (company_id, job_name, job_description, job_pay, job_requirements) VALUES (1, '$jobName', '$jobDescription', '$jobPay', '$jobReq')";

    $sql_create = "CREATE TABLE 1_$jobName (
        applicant_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        applicant_status VARCHAR(30) NOT NULL
    )";

    if($conn->query($sql) === TRUE && $conn->query($sql_create) === TRUE){
        echo '<script>alert("Job created successfully.");</script>';
        echo '<script>window.location.href = "../HTML/companyHomePage.html";</script>';
        exit;
    }
    else{
        echo '<script>alert("Error: ");</script>';
        echo '<script>window.location.href = "../HTML/companyHomePage.html";</script>';
        exit;
    }
?>