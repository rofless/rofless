<?php
$servername = "localhost";
$username = "root";
$password = "labas";
$dbname = "linuxai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

/*if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST['name']) || empty($_POST['lastname']) || strlen($_POST ['name'])<2 || empty($_POST['telnumber']) || empty($_POST['adress']) || empty($_POST['username']) || empty($_POST['shoesize']) || strlen($_POST ['name'])<9){
        $error = "netinka";
        if(strlen($_POST['name'])>=1 || strlen($_POST['lastname'])>=1 ){
            $error = "error";
        }
    }
    else {
        $sucess = "vuolia";

        if(isset($_POST['Submit']))
        {
            $sql = " INSERT INTO userdata (name, lastname, telnumber, adress, username, shoesize) VALUES ('".$_POST["name"]."','".$_POST["lastname"]."','".$_POST["telnumber"]."','".$_POST["adress"]."','".$_POST["username"]."','".$_POST["shoesize"]."')";
            $result = mysqli_query($conn,$sql);
        }
    }
}
*/?>
<?php

$name = $lastname = $telnumber = $adress = $username = $shoesize = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $lastname = test_input($_POST["lastname"]);
    $telnumber = test_input($_POST["telnumber"]);
    $adress = test_input($_POST["adress"]);
    $username = test_input($_POST["username"]);
    $shoesize = test_input($_POST["shoesize"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html>
<head>
    <title>form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <H1>User data</H1>
    <div class="row">
        <div class="col-4">
            <?php if(isset($error)){
                echo '<div class="alert alert-danger">' . $error. '</div>';
            }
            elseif(isset($success)){
                echo '<div class="alert alert-success">' . $success. '</div>';
            }
            ?>
            <form method="POST" action="vaizdavimas.php">

                <div class="form-group">
                    <label for="name">vardas</label>
                    <input name="name" type="text" class="form-control">

                </div> <div class="form-group">
                    <label for="lastname">pavarde</label>
                    <input name="lastname" type="text" class="form-control">

                </div> <div class="form-group">
                    <label for="telnumber">tel nr</label>
                    <input name="telnumber" type="text" class="form-control" id="telnumber">

                </div> <div class="form-group">
                    <label for="adress">adresas</label>
                    <input name="adress" type="text" class="form-control" id="adress">

                </div> <div class="form-group">
                    <label for="username">naudotojas</label>
                    <input name="username" type="text" class="form-control" id="username">

                </div> <div class="form-group">
                    <label for="shoesize">batu dydis</label>
                    <input name="shoesize" type="number" class="form-control" id="shoesize">


                </div> <button name="submit" type="submit" class="btn btn-primary">Submit</button> </form> </div>


        <a href="pavaizduota.php">Printas</a>