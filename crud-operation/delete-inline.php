<?php
include 'connect.php';

$dltid = $_GET['id'];
$sql = "DELETE FROM students WHERE sid = '$dltid'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($result) {
    header('location: index.php');
} else {
    die(mysqli_error($conn));
}
?>