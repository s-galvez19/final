<?php

$name = $_GET["name"];
$term = $_GET["term"];
$description = $_GET["description"];
$size = '150x150';
$picture = $_GET['picture'];
$glued = 1;


$Name = "'" . $name . "'";
$Term = "'" . $term . "'";
$Description = "'" . $description . "'";
$Size = "'" . $size . "'";
$Picture = "'" . $picture . "'";
$Glued = $glued;

/* Connection with the DB */
$servername = "localhost";
$username = "root";
$password = "3006622703";
$dbname = "collections";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into stamps(picture,description,name,term,size,glued) values ($Picture,$Description,$Name,$Term,$Size,$Glued)";
$result = $conn->query($sql);

?>

  <!DOCTYPE html> 

<html lang="en">

<head>
    <?php include('../includes/Header.php') ?>

    <style>
        body {
            background-color:grey;
        }
        a {color: green}
    </style>


</head>

<a href="../index.php"></a>
<p>Was succesfully</p>

<body id="home" class="scrollspy">

     <?php include('../includes/Navbar.php') ?> 

    
</body>

</html>
