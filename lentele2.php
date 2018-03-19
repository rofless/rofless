<html>
<head>
    <title>Last 10 Results</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <td>Id</td>
        <td>Name</td>
    </tr>
    </thead>
    <tbody>
    <?php
    $connect = mysql_connect("localhost","root", "labas");
    if (!$connect) {
        die(mysql_error());
    }
    mysql_select_db("apploymentdevs");
    $results = mysql_query("SELECT * FROM demo LIMIT 10");
    while($row = mysql_fetch_array($results)) {
        ?>
        <tr>
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['Name']?></td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head><title>Create Tables from MySQL using functions</title></head>
<body>
<?php
db_connect();
// assuming you have an auto increment id as the first column
$result = mysql_query("SELECT * FROM demo ORDER BY 1 DESC LIMIT 10");
print createTable(array_result($result));
?>
</body>
</html>

