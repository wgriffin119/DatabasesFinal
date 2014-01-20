<!--Form page for searching events-->


<html>
<h1>
    Search An Upcoming Event! ;))
</h1>
<body>

<form method="get" action ="Database.php">
    Search by EID (event ID): <input type="text" name="eid" >
    <br><br>
    Event Name: <input type="text" name="name" required>*
    <br><br>
    Tags: <input type="text" name="tags">
    <br><br>
    Start Date: <input type="text" name="start_date" required>* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    End Date: <input type="text" name="end_date" required>*
    <br><br>

    <input type="submit" name="submit" value="Submit">
    <br>
    * indicates required field
    <br>
</form>


<?php echo $_GET["eid"]; ?>
</body>
</html>