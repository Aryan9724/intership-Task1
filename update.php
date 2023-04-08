<html>
<head>
<link  rel="stylesheet" href="form.css" type="text/css">
</head>
<body class="b">
    <!-- <h1>update page</h1> -->
    <form action="update1.php" method="POST">
        <center>
    <header class="head">Wanna update your task?</header>
    <label class="label">Note :Fill all the infromation.</label><br><br>

        <label class="label"> New Tasktitle :</label>  <input type="text" name="newtt" required><br><br>
         <label class="label">New Taskdetail :</label>  <input type="text" name="newtd" required><br><br>
        <!-- <label class="label"> Task Description :</label> <textarea name="newtd" id="" cols="30" rows="3" required></textarea><br><br><br> -->
         <label class="label">New Startdate :</label>  <input type="datetime-local" name="newst" required><br><br>
         <label class="label">New Enddate  :</label>  <input type="datetime-local" name="newet" required><br><br><br>
         <label class="label">Old Tasktitle:</label>  <input type="text" name="o_tt" required><br><br>
         
        <input type="submit" name="submit" class="button">
        <input type="reset" value="clear" class="button" >
    </form>
    </center>
</body>

</html>