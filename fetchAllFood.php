<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
$query="SELECT * FROM FoodGroups";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    if (mysqli_num_rows($result) > 0) 
    {
        $response["datalist"] = array();
 
        while ($row = mysqli_fetch_array($result))
        {
            $data = array();
            $data["phone"] = $row["phone"];
            $data["date"] = $row["date"];
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

?>