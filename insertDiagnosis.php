<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));

$phone = $_POST['phone'];
$month = $_POST['month'];
$risk = $_POST['risk'];
$reason = $_POST['reason'];
$diagnosis = $_POST['diagnosis'];
$hb7 = $_POST['hb7'];
$dd3 = $_POST['dd3'];
$clinical2 = $_POST['clinical2'];
$bmi30 = $_POST['bmi30'];
$bmi17 = $_POST['bmi17'];

$post_query = "replace into Diagnosis(phone,month,risk,reason,diagnosis,hb7,dd3,clinical2,bmi30,bmi17) values 
('$phone', '$month','$risk','$reason','$diagnosis','$hb7','$dd3','$clinical2','$bmi30','$bmi17')";

$post_submit = mysqli_query($con, $post_query) or die(mysqli_error($con));
if ($post_submit) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Data successfully Stored.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An Error occurred.";
 
        // echoing JSON response
        echo json_encode($response);
    }
?>