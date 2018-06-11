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
$dbname = "brentkla_contact_data";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_affiliation = $_POST['affiliation'];
$users_comment = $_POST['comment'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `brentkla_contact_data`.`contact` (`id`, `name`, `email`, `affiliation`,
        `comment`) VALUES (NULL, '$users_name',
        '$users_email', '$users_affiliation', '$users_comment');";


if ($conn->query($sql) === TRUE) {
    header('Location: ../success.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

