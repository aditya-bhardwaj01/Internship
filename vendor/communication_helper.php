<?php

include "config/connection.php";
include "config/cloudinaryConfig.php";

$vendor_id = 1;
$type = $_POST['type'];

if ($vendor_id == -1) {
    echo 2;
} else {
    if ($type == 'rfi') {

        $information = $_POST['information'];
        $purpose = $_POST['purpose'];
        $sql = "INSERT INTO communication (vendor_id, type, information_asked_for, purpose_of_information) VALUES
            ($vendor_id, '$type', '$information', '$purpose')";
        $res = mysqli_query($conn, $sql);
        if ($res) echo 1;
        else echo 0;
    }
    else if ($type == 'rfq') {

        $projectTitle = $_POST['projectTitle'];
        $projectGoals = $_POST['projectGoals'];
        $description = $_POST['description'];
        $expectation = $_POST['expectation'];
        $projectTimeline = $_POST['projectTimeline'];
        $budgetRange = $_POST['budgetRange'];

        $sql = "INSERT INTO communication (vendor_id, type, project_title, project_goals, project_description, project_expectation,
                project_timeline, budget_range) VALUES
            ($vendor_id, '$type', '$projectTitle', '$projectGoals', '$description', '$expectation', '$projectTimeline', '$budgetRange')";
        $res = mysqli_query($conn, $sql);
        if ($res) echo 1;
        else echo 0;
    }
    else if($type == 'rfq-m'){
        $projectTitle = $_POST['projectTitle'];
        $projectGoals = $_POST['projectGoals'];
        $description = $_POST['description'];
        $expectation = $_POST['expectation'];
        $projectTimeline = $_POST['projectTimeline'];
        $budgetRange = $_POST['budgetRange'];
        //Target Audience to be included
        //Mode of marketing to be included

        $sql = "INSERT INTO communication (vendor_id, type, project_title, project_goals, project_description, project_expectation,
                project_timeline, budget_range) VALUES
            ($vendor_id, '$type', '$projectTitle', '$projectGoals', '$description', '$expectation', '$projectTimeline', '$budgetRange')";
        $res = mysqli_query($conn, $sql);
        if ($res) echo 1;
        else echo 0;
    }
    else if($type == 'rfv'){
        $companyName = $_POST['companyName'];
        $aboutCompany = $_POST['aboutCompany'];
        $service = $_POST['service'];
        $experience = $_POST['experience'];
        $industry = $_POST['industry'];
        $client = $_POST['client'];
        $profile = getURL($_FILES['profile']['tmp_name']);
        

        $sql = "INSERT INTO communication (vendor_id, type, company_name, about_company, company_services, experience,
                industry, client, profile_file) VALUES
            ($vendor_id, '$type', '$companyName', '$aboutCompany', '$service', '$experience', '$industry', '$client', 
            '$profile')";
        $res = mysqli_query($conn, $sql);
        if ($res) echo 1;
        else echo 0;
    }
}

?>