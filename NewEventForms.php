<!--Form page for submitting new events-->


<html>
<h1>
    Submit A New Event! ;))
</h1>
<body>

<form method="post" action ="Database.php">
    EID: <input type="text" name="eid" required>*
    <br><br>
    Event Name: <input type="text" name="name" required>*
    <br><br>
    Tags: <input type="text" name="tags">
    <br><br>
    Start Date: <input type="text" name="start_date" required>* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    End Date: <input type="text" name="end_date" required>*
    <br><br>
    Description: <textarea name="description" rows="5" cols="40" required>
    </textarea>*
    <input type="submit" name="submit" value="Submit">
    <br>
    * indicates required field
    <br>
</form>


<?php echo $_GET["eid"]; ?>
</body>
</html>