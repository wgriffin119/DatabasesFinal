<?php
/*
 * Create a new event in the database
 */

//connect to database
define('DB_SERVER', 'panther.cs.middlebury.edu');
define('DB_USERNAME', 'wgriffin');
define('DB_PASSWORD', 'Middsoccer119!');
define('DB_DATABASE', 'wgriffin_calendar');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die("Could not connect");

$sql = "INSERT INTO Events(eid, name, description, tags, start_date, end_date)
VALUES
('$_POST[eid]', '$_POST[name]', '$_POST[description]', '$_POST[tags]', '$_POST[start_date]', '$_POST[end_date]')";

if(!mysqli_query($con, $sql))
{
    die('Error: '.mysqli_error($con));
}

echo "New Entry Added";

mysql_close($con)
?>