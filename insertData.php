<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
if (isset($_POST['animal']))
{
$phone = $_POST['phone'];
$date = $_POST['date'];
$cereals = $_POST['cereals'];
$pulses = $_POST['pulses'];
$fruits = $_POST['fruits'];
$vegetables = $_POST['vegetables'];
$milk = $_POST['milk'];
$animal = $_POST['animal'];
$fats = $_POST['fats'];
$nuts = $_POST['nuts'];
$spices = $_POST['spices'];
$sweets = $_POST['sweets'];
$post_query = "replace into FoodGroups(phone,date,cereals,pulses,fruits,vegetables,milk,animal,fats,nuts,spices,sweets) values
('$phone', '$date','$cereals','$pulses','$fruits','$vegetables','$milk','$animal','$fats','$nuts','$spices','$sweets')";
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
