<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
if (isset($_POST['date'], $_POST['phone'])) {

$date=$_POST['date'];
$phone=$_POST['phone'];
// $date='2020-07-20';
// $phone='9988776655';
$query="SELECT cereals,pulses,fruits,vegetables,milk,animal,fats,nuts,spices,sweets FROM FoodGroups WHERE date ='$date' and phone='$phone'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    if (mysqli_num_rows($result) > 0) 
    {
        $response["datalist"] = array();
 
        while ($row = mysqli_fetch_array($result))
        {
            $data = array();
            $data["cereals"] = $row["cereals"];
            $data["pulses"] = $row["pulses"];
            $data["fruits"] = $row["fruits"];
            $data["vegetables"] = $row["vegetables"];
            $data["milk"] = $row["milk"];
            $data["animal"] = $row["animal"];
            $data["fats"] = $row["fats"];
            $data["nuts"] = $row["nuts"];
            $data["spices"] = $row["spices"];
            $data["sweets"] = $row["sweets"];
            array_push($response["datalist"], $data);
        }
        echo json_encode($response);
    } 
    else 
    {
        $response["datalist"] = "";
        echo json_encode($response);
    }
}

?>