<?php
$f = $_POST['fname'];
$l = $_POST['lname'];
$s = $_POST['subject'];
$m = $_POST['message'];
$con = mysqli_connect("localhost", "root", "", "resume");
$sql = "INSERT INTO contactme (ffname, llname, ssubject, mmessage) VALUES ('$f', '$l', '$s', '$m')";
$r = mysqli_query($con, $sql);
if ($r) {
    echo "ADDED SUCCESSFULLY";
} else {
    echo "NOT ADDED";
}
?>
