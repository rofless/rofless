<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<?php
$con =mysqli_connect("localhost","root","labas","linuxai");
if (mysqli_connect_errno())
{
    echo "failed to connect to mysql: " . mysqli_connect_error();
}
$results = mysqli_query($con, "SELECT * FROM users");
foreach ($results as $result){
    echo "<tr>";
    echo "<td>".$result['name']."</td><br>";
    echo "<td>".$result['lastname']."</td><br>";
    echo "<td>".$result['shoesize']."</td><br>";
    echo "</tr><br><br>";
}