<?php
if(isset($_POST['submit'])) {
    include 'config.php';

    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $website = ($_POST['website']);
    $message = ($_POST['message']);

    $sql = "INSERT INTO messages(name, email, phone, website, message) VALUES ('$name','$email','$phone','$website', '$message')";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result) {
    header("location: index.php");
    } else {
        die("Connection Error");
    }
    
}
?>