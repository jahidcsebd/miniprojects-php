<?php
if(isset($_POST['submit'])) {
    include 'connect.php';

    $name = $_POST['sname'];
    $address = $_POST['saddress'];
    $class = $_POST['class'];
    $phone = $_POST['sphone'];

    $sql = "INSERT INTO students (sname, saddress, sclass, sphone) VALUES ('$name','$address','$class','$phone')";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result) {
    header('location: index.php');
    } else {
        die("Connection Error");
    }
}
?>