<?php

include "bootstrap/init.php";

if (!Login::is_user_logged_in()) {
    redirect(BASE_URL);
}

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $status = $_POST['status'];
    $company = $_POST['company'];
    $website = $_POST['website'];
    $location = $_POST['location'];
    $skills = $_POST['skills'];
    $github = $_POST['github'];
    if (isset($status)) {
        FetchData::set_status($status);
    }

    if (($company)!==""||!empty($company)) {
        FetchData::set_company($company);
    }
    if ($website!=="" ||!empty($website)) {
        FetchData::set_website($website);
    }
    if ($location!=="" || !empty($location)) {
        FetchData::set_location($location);
    }
    if ($skills!=="" || !empty($skills)) {
        FetchData::set_skills($skills);
    }
    if (($github)!=="" || !empty($github)) {
        FetchData::set_github_username($github);
    }
    redirect(BASE_URL);
}



include "views/create-profile.php";
