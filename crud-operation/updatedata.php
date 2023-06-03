<?php
 include 'connect.php';

    $id = $_POST['sid'];
    $name = $_POST['sname'];
    $address = $_POST['saddress'];
    $class = $_POST['sclass'];
    $phone = $_POST['sphone'];

    $sql = "UPDATE students SET sname = '$name', saddress = '$address', sclass = '$class', sphone = '$phone' WHERE sid = '$id'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result) {
        header('location: index.php');
    } else {
        die(mysqli_error($conn));
    }

?>