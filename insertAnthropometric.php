<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
    
$phone = $_POST['phone'];
$month = $_POST['month'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$body_fat=$_POST['body_fat'];
$mid_arm=$_POST['mid_arm'];
$bmi=$_POST['bmi'];
$bmr=$_POST['bmr'];
$post_query = "replace INTO AnthropometricParameters(phone, month, gender, age, height, weight, body_fat, mid_arm, bmi, bmr) VALUES ('$phone', '$month', '$gender', '$age', '$height', '$weight', '$body_fat', '$mid_arm', '$bmi', '$bmr')";
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
