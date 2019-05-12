<?php

$id_stamp = $_GET["id_stamp"];

/* Conection with DB*/
$servername = "http://sgalvez.techlaunch.online.online/stamps/";
$username = "root";
$password = "3006622703";
$dbname = "collections";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, term, description,picture, glued FROM stamps WHERE name = " . $name;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $pic = '';

    while ($row = $result->fetch_assoc()) {
        $pic = $row["picture"];
        // $id_stamp = $row["id_stamp"];
        $number = $row["number"];
        $name = $row["name"];
        $term = $row["term"];
        $description = $row["description"];
        // $party = $row["party"];
        //  $year_issued= $row["year_issued"];
        //  $size= $row["size"];
        $picture = $row["picture"];
        $glued = $row["glued"];
    }
} else {
    echo "0 results";
}
$conn->close();





?>

<!DOCTYPE html>

<html lang="en">

<head>
    <?php include('../includes/Header.php') ?>

    <style>
        body {
            background-color:grey;
        }
       .card {
           padding: 15px;
       }
       a {
           color: yellow;
       }
    </style>

    
</head>

<body id="home" class="scrollspy">

    <?php include('../includes/Navbar.php') ?>



    <section>
    <div class="row">
       

        <div class="col s6 m2"></div>
        <div class="col s6 m10">
        <a href="../index.php">Back to Dashboard </a>
                <br>
                <br>


        <h3>President # <?php echo $number ?></h3>


        <div class="card">
          
               
                <div class="col s6 m3">
                    <div class="card-image">
                        <img class="image" src=<?php echo '../' . trim($pic); ?> alt=<?php echo $name; ?> />
                    </div>
                </div>
                <div class="col s6 m7">
                    <table>
                        <th> </th>
                        <th>Term of Office</th>
                        <th>Party </th>
                        <tr>
                            <td>
                                <h5><?php echo $name; ?></h5>
                            </td>
                            <td> <?php echo $term; ?></td>
                            <td> <?php echo $party; ?></td>
                        </tr>
                    </table>

                    <p> <?php echo $description; ?> </p>

                </div>
            </div>
        </div>
    </div>
</div>

        <?php include('../includes/Footer.php') ?>




</body>

</html>
