<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
$query="SELECT * FROM ClinicalParameters";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    if (mysqli_num_rows($result) > 0) 
    {
        $response["datalist"] = array();
 
        while ($row = mysqli_fetch_array($result))
        {
            $data = array();

          $data["phone"]=$row['phone'];
          $data["month"]=$row['month'];
            $data["patches_around_the_neck"]=$row['patches_around_the_neck'];
$data["pale_skin"]=$row['pale_skin'];
$data["pellagra"]=$row['pellagra'];
$data["wrinkled_skin"]=$row['wrinkled_skin'];
$data["teeth_discolouration"]=$row['teeth_discolouration'];
$data["bleeding_gums"]=$row['bleeding_gums'];
$data["cavity"]=$row['cavity'];
$data["weak_gums"]=$row['weak_gums'];
$data["angular_cuts"]=$row['angular_cuts'];
$data["inflammed_tongue"]=$row['inflammed_tongue'];
$data["cuts_in_the_lips"]=$row['cuts_in_the_lips'];
$data["mouth_ulcers"]=$row['mouth_ulcers'];
$data["bitot_spot"]=$row['bitot_spot'];
$data["xeropthalmia"]=$row['xeropthalmia'];
$data["redness_in_eyes"]=$row['redness_in_eyes'];
$data["catract"]=$row['catract'];
$data["hair_fall"]=$row['hair_fall'];
$data["damaged_hair"]=$row['damaged_hair'];
$data["split_ends"]=$row['split_ends'];
$data["discolouration"]=$row['discolouration'];
$data["dark_lines"]=$row['dark_lines'];
$data["spoon_shaped_nails"]=$row['spoon_shaped_nails'];
$data["broken_nails"]=$row['broken_nails'];
$data["pale_coloured_nails"]=$row['pale_coloured_nails'];

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