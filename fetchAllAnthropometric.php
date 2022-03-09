<?php
$response = array();
$con = mysqli_connect("localhost", "fdc", "fdc@amrita", "seed") or die(mysqli_error($con));
$query="SELECT * FROM AnthropometricParameters";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    if (mysqli_num_rows($result) > 0) 
    {
        $response["datalist"] = array();
 
        while ($row = mysqli_fetch_array($result))
        {
            $data = array();
$data["phone"]=$row['phone'];
$data["month"]=$row['month'];
$data["gender"]=$row['gender'];
$data["age"]=$row['age'];
$data["height"]=$row['height'];
$data["weight"]=$row['weight'];
$data["body_fat"]=$row['body_fat'];
$data["mid_arm"]=$row['mid_arm'];
$data["bmi"]=$row['bmi'];
$data["bmr"]=$row['bmr'];

            array_push($response["datalist"], $data);
        }
        echo json_encode($response);
    } 
    else 
    {
        $response["datalist"] = "";
        echo json_encode($response);
    }

?>