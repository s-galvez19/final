
 
<?php 


$name = $_GET["name"];

/* Conection with DB*/

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

$sql = "delete from stamps where name = ".$name;
$result = $conn->query($sql);

?>

<html> 
    <body>
        
        <?php echo 'The Stamp: ' . $name . ' was delete successfully.'; ?>
        <br>
        <br>
        <a href="index.php">Go To Home </a>
</body>
</html>  





