<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="lib/css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">


    <title>Album Of Stamps</title>

    <style>
        body {
            background-color: white;
        }

        img {
            max-width: 15vw;
            min-width: 15vw;
            max-height: 15vw;
            min-height: 15vw;
            border: 5px solid gray;
            border-style: ridge;
            margin: 3px;
        }

        a {
            color: brown;
        }

        table,
        .container {
            background-color: white;
            color: brown;
            
        }

        .container {
            padding: 10px;
        }

        .basex {
            position: absolute;
            left: 500px;
            top: 500px;
            min-width: 30vw;
            max-width: 30vw;
            max-height: 35vh;
            min-height: 35vh;
            /* background: url('./images/base.jpg'); */
            background-size: cover;
            background-position: center;

        }



        .images {
            position: absolute;
            min-width: 10vw;
            max-width: 10vw;
            max-height: 30vh;
            min-height: 30vh;

            border-style: dashed;

            top: 1%;
            left: 58%;

        }

        .quotes {
            position: absolute;
            left: 100%;
            top: 1%;
            color: black;
            font-family: 'Parisienne', cursive;

        }

        .small {
            display: none;
        }


        /* @media (max-width: 700px) { */
            .main-header {
                height: 50vh;
            }

            .small {
                display: inline-block;
            }

            .quotes {
                position: absolute;
                left: 10%;
                top: 40%;
                color: black;
                font-family: 'Parisienne', ;
                font-size: 30px;

            }

            .images {
                position: absolute;
                min-width: 30vw;
                max-width: 30vw;
                max-height: 20vh;
                min-height: 20vh;

                border-style: dashed;

                top: 1%;
                left: 68%;

            }


        }
    </style>

</head>




<body id="home" class="scrollspy">

    <nav class="brown">
        <div style="padding-left:100px;">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">
                    <span>

                        <!-- <i class="material-icons">flag</i></span> -->


                    <span>Album Of Stamps</span>

                </a>
                <a href="#" data-activates="side-nav" class="button-collapse show-on-small right">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li class="active">
                        <a href="index.php" activated>Home</a>
                    </li>
       
                <!-- Side nav -->
                <ul id="side-nav" class="side-nav">
                    <li>
                        <div class="user-view">
                            <div class="background">

                                <div class="col s12 m12">
                                    <!-- <img src="images/eagle.jpg" style="min-width:58vw; min-height:30vh;" width="100%" alt="" title=""> -->
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>

                            <a href="#">
                                <span class="name red-text">Stamps Collection</span>
                            </a>
                    </li>
                    <li>
                        <a href="#dashboard">
                            <i class="material-icons">home</i>Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="dashboard">

        <br>
        <!-- <div class="container" style="overflow:scroll;"> -->
            <div class="col s3 m3"><a href="./pages/addstamp.php" class="btn brown"> Add New </a></div>
            <br>
            <?php
            include  'connection.php';
            ?>


        </div>

        <?php include('./includes/Footer.php') ?>

        <?php include('./includes/Fab.php') ?>

</body>

</html>