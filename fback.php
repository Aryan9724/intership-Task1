<?php
if ($_POST['Submit']) {
$conn = mysqli_connect("localhost", "root", "", "task");
$tt = $_POST['Tasktitle'];
$td = $_POST['Taskdetail'];
$st = $_POST['Startdate'];
$et = $_POST['Enddate'];
$query = "INSERT INTO `taskinfo`(`Tasktitle`, `Taskdetail`, `Startdate`, `Enddate`) VALUES ('$tt','$td','$st','$et')";
$ex = mysqli_query($conn, $query);
if($ex){
    echo "
    <html>
        <body>
        <script>
            alert('Data inserted');
            location.href = 'main.php'
         </script>
        <body>
    <html> ";
}
}
?>