<?php

$id_stamp = $_GET["id_stamp"];
$number = $_GET["number"];
$name = $_GET["name"];
$term = $_GET["term"];
$description = $_GET["description"];
$party = $_GET["party"];
//$year_issued= $_GET["year_issued"];
$size = '140x140';
$picture = $_GET["picture"];
$glued = true;


$Id = "'" . $id_stamp . "'";
$Number = $number;
$Name = "'" . $name . "'";
$Term = "'" . $term . "'";
$Description = "'" . $description . "'";
$Party = "'" . $party . "'";
$Size = "'" . $size . "'";
$Picture = "'" . $picture . "'";
$Glued = $glued;

/* Connection with the DB */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collection";


//var_dump(trim($Id),$Number, $Name, $Description, $Size, $Picture, $Glued);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "update stamps set  picture=$Picture, party=$Party, name=$Name, term=$Term, description=$Description, size=$Size, number=$Number, glued=$Glued where id_stamp = trim($Id) ";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <?php include('../includes/Header.php') ?>

    <style>
    body{
        background-color: grey;
    }
    .card {
           padding: 15px;
       }

    a {color: yellow ;}
    </style>

</head>

<!--<a href="../index.php">Go Dashboard </a>-->

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
                            <img class="image" src=<?php echo '../' . trim($picture); ?> alt=<?php echo $name; ?> />
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