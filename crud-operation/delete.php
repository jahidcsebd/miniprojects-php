<?php
include 'header.php';
if (isset($_POST['deletebtn'])) {
    include 'connect.php';
    $dltid = $_POST['sid'];
    $sql = "DELETE FROM students WHERE sid = '$dltid'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        header('location: index.php');
    } else {
        echo "<h2>Opps, Something went wrong! Please try again letter.</h2>";
    }
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>