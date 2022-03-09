<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
if (isset($_POST['phone'], $_POST['month'],$_POST['haemoglobin']))
{
    $phone = $_POST['phone'];
    $month = $_POST['month'];
    $haemoglobin = $_POST['haemoglobin'];
    
    $post_query = "replace INTO BiochemicalParameters(phone, month, haemoglobin) VALUES ('$phone', '$month', '$haemoglobin')";
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
}
?>
