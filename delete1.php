<?php
$con = mysqli_connect("localhost", "root", "", "task");
$d = $_POST['dtask'];
$query = "DELETE FROM `taskinfo` WHERE Tasktitle='$d';";
$delete = mysqli_query($con, $query);
if ($delete) {
    echo "
<html>
<body>
<script>
    alert('Task deleted');
    location.href = 'main.php';
 </script>
<body>
<html> ";
}
else{
    echo"unsucess";
}
?>