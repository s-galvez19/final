<?php

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

$sql = "SELECT name, term, description,picture, glued FROM stamps";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    $pic = '';

  

    echo '<table class="table-responsive">';
    echo '<th>Stamp</ht><th>Name</th><th>Description</th><th>Year Of Issued</th> <th>Delete</th> ';

    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;


    $pageActive = false;
    $r = 1;
    $r2 = 0;


    while ($row = $result->fetch_assoc()) {


        $pic = $row["picture"];
        // $id = $row["id_stamp"];
        $name = $row["name"];



        if($page == 1 || $page == 0){
            $pageActive = true;
           if($r>5){     
               break;
           }
        }
        if($page == 2){
            if($r>5){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
               
            }
         }

         if($page == 3){
            if($r>10){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
            }
         }

         if($page == 4){
            if($r>15){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
            }
         }

         if($page == 5){
            if($r>20){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
            }
         }

         if($page == 6){
            if($r>25){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
            }
         }

         if($page == 7){
            if($r>30){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
            }
         }

         if($page == 8){
            if($r>35){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
            }
         }
         if($page == 9){
            if($r>40){
                $pageActive = true;
                $r2++;
                if($r2>5){
                    break;
                }
            }
         }

        $r++;

        if ($pageActive) {


            echo '<tr>';
            echo '<td><img style="min-width:10vw;max-width:10vw;max-height:20vh;min-height:20vh; border-radius:0%" src="' . $pic . '" title='.$name . ' /> </td>';
            echo '<td class="name">' . $row["name"] . '</td>';
            echo '<td class="description">' . $row["description"] . '...</td>';
            echo '<td class="term">' . $row["term"] . '</td>';
            echo '<td> <form action="delete.php" method="get"> <input type="text" name="name" value=' . $row["name"] . '  hidden >   
             <input class="btn brown white-tex" type="submit" value="Delete"    /></form>  </td>';
            echo '</tr>';
        }
    }
    echo '</table>';

    $active = 'class="active"';
    $deactive ='class="waves-effect"';
    $status1 = $page==0 || $page==1 ? $active : $deactive;
    $status2 = $page==2 ? $active : $deactive;
    $status3 = $page==3 ? $active : $deactive;
    $status4 = $page==4 ? $active : $deactive;
    $status5 = $page==5 ? $active : $deactive;
    $status6 = $page==6 ? $active : $deactive;
    $status7 = $page==7 ? $active : $deactive;
    $status8 = $page==8 ? $active : $deactive;
    $status9 = $page==9 ? $active : $deactive;
   
    echo '
    <ul class="pagination">
    <li class="disabled"><a href="index.php?page=0"><i class="material-icons">chevron_left</i></a></li>
    <li '. $status1 .'><a href="index.php?page=1">1</a></li>
    <li '. $status2 .'><a href="index.php?page=2">2</a></li>
    <li '. $status3 .'><a href="index.php?page=3">3</a></li>
    <li '. $status4 .'><a href="index.php?page=4">4</a></li>
    <li '. $status5 .'><a href="index.php?page=5">5</a></li>
    <li '. $status6 .'><a href="index.php?page=6">6</a></li>
    <li '. $status7 .'><a href="index.php?page=7">7</a></li>
    <li '. $status8 .'><a href="index.php?page=8">8</a></li>
    <li '. $status9 .'><a href="index.php?page=9">9</a></li>
    <li class="disabled"><a href="index.php?page=9"><i class="material-icons">chevron_right</i></a></li>
  </ul>';
} else {
    echo "0 results";
}
$conn->close();


?>

