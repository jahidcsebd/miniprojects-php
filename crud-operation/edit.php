<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'connect.php';

    $updateid = $_GET['id'];
    $sql = "SELECT * FROM students WHERE sid = '$updateid'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
                    <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <?php
                    include 'config.php';
                    $sql1 = "SELECT * FROM `studentclass`";
                    $result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                    if (mysqli_num_rows($result1)) {
                        echo '<select name="sclass">
                        <option value="" selected disabled>Select Class</option>';
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            if ($row['sclass'] == $row1['cid']) {
                                $selected = "SELECTED";
                            } else {
                                $selected = "";
                            }
                            echo "<option {$selected} value='{$row1['cid']}'>{$row1['cname']}</option>";
                        }
                        echo '</select>';
                    }

                    ?>

                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
                </div>
                <input class="submit" name ="submit" type="submit" value="Update" />
            </form>
    <?php }
    } ?>
</div>
</div>
</body>

</html>