<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link  rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
    <form action="fback.php" method="post">
        <center>
        <header class="head">Registration</header>
        <label class="label"> Task Title :</label><input type="text" name="Tasktitle"  required><br><br><br>
       <label class="label"> Task Description :</label><input type="text" name="Taskdetail"  required><br><br><br>
       <!-- <label class="label"> Task Description :</label> <textarea name="taskdetail" id="" cols="30" rows="3"></textarea><br><br><br> -->
       <label class="label"> StartDate    :</label><input type="datetime-local" name="Startdate"   required><br><br><br>
       <label class="label"> EndDate  :</label><input type="datetime-local" name="Enddate"   required><br><br><br>
            <input type="Submit" name="Submit" value="Submit" class="button">
            <input type="reset" value="clear" class="button" >
        </center>
    </form>

</body>
</html>