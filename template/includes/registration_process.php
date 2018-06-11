<?php
/**
 * Created by PhpStorm.
 * User: shine
 * Date: 5/24/2018
 * Time: 5:13 PM
 */

$servername = "localhost";
$username = "brentkla";
$password = "Shiner32$!";
$dbname = "brentkla_registration_data";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_affiliation = $_POST['affiliation'];
$users_sex = $_POST['sex'];
$users_saturday = $_POST['saturday'];
$users_sunday = $_POST['sunday'];
$users_tshirt = $_POST['tshirt'];
$users_emergency_n = $_POST['emergency_n'];
$users_emergency_p = $_POST['emergency_p'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `brentkla_registration_data`.`registration` (`id`, `name`, `email`, `affiliation`, `sex`, `saturday`, `sunday`, `tshirt`, `emergency_n`, `emergency_p`) VALUES (NULL, '$users_name','$users_email', '$users_affiliation', '$users_sex', '$users_saturday', '$users_sunday', '$users_tshirt', '$users_emergency_n', '$users_emergency_p');";

if ($conn->query($sql) === TRUE) {
    header('Location: ../success.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

