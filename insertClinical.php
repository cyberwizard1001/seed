<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
if (isset($_POST['phone'], $_POST['month'],$_POST['patches_around_the_neck'],$_POST['pale_skin'],$_POST['pellagra'],$_POST['wrinkled_skin'],$_POST['teeth_discolouration'],$_POST['bleeding_gums'],$_POST['cavity'],$_POST['weak_gums'],$_POST['angular_cuts'],$_POST['inflammed_tongue'],$_POST['cuts_in_the_lips'],$_POST['mouth_ulcers'],$_POST['bitot_spot'],$_POST['xeropthalmia'],$_POST['redness_in_eyes'],$_POST['catract'],$_POST['hair_fall'],$_POST['damaged_hair'],$_POST['split_ends'],$_POST['discolouration'],$_POST['dark_lines'],$_POST['spoon_shaped_nails'],$_POST['broken_nails'],$_POST['pale_coloured_nails']
))
{
$phone = $_POST['phone'];
$month = $_POST['month'];
$patches_around_the_neck=$_POST['patches_around_the_neck'];
$pale_skin=$_POST['pale_skin'];
$pellagra=$_POST['pellagra'];
$wrinkled_skin=$_POST['wrinkled_skin'];
$teeth_discolouration=$_POST['teeth_discolouration'];
$bleeding_gums=$_POST['bleeding_gums'];
$cavity=$_POST['cavity'];
$weak_gums=$_POST['weak_gums'];
$angular_cuts=$_POST['angular_cuts'];
$inflammed_tongue=$_POST['inflammed_tongue'];
$cuts_in_the_lips=$_POST['cuts_in_the_lips'];
$mouth_ulcers=$_POST['mouth_ulcers'];
$bitot_spot=$_POST['bitot_spot'];
$xeropthalmia=$_POST['xeropthalmia'];
$redness_in_eyes=$_POST['redness_in_eyes'];
$catract=$_POST['catract'];
$hair_fall=$_POST['hair_fall'];
$damaged_hair=$_POST['damaged_hair'];
$split_ends=$_POST['split_ends'];
$discolouration=$_POST['discolouration'];
$dark_lines=$_POST['dark_lines'];
$spoon_shaped_nails=$_POST['spoon_shaped_nails'];
$broken_nails=$_POST['broken_nails'];
$pale_coloured_nails=$_POST['pale_coloured_nails'];
$post_query = "replace INTO ClinicalParameters(phone, month, patches_around_the_neck, pale_skin,  pellagra ,  wrinkled_skin ,  teeth_discolouration ,  bleeding_gums ,  cavity ,  weak_gums ,  angular_cuts ,  inflammed_tongue ,  cuts_in_the_lips ,  mouth_ulcers ,  bitot_spot ,  xeropthalmia ,  redness_in_eyes ,  catract ,  hair_fall ,  damaged_hair ,  split_ends ,  discolouration ,  dark_lines ,  spoon_shaped_nails ,  broken_nails ,  pale_coloured_nails) VALUES
 ('$phone', '$month', '$patches_around_the_neck', '$pale_skin', '$pellagra', '$wrinkled_skin', '$teeth_discolouration', '$bleeding_gums', '$cavity', '$weak_gums', '$angular_cuts', '$inflammed_tongue', '$cuts_in_the_lips', '$mouth_ulcers', '$bitot_spot', '$xeropthalmia', '$redness_in_eyes','$catract','$hair_fall', '$damaged_hair', '$split_ends', '$discolouration', '$dark_lines', '$spoon_shaped_nails', '$broken_nails', '$pale_coloured_nails')";
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
