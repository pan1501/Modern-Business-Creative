<?php
session_start();
if (!$_SESSION['username']) {
    header('location: order.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CREATIVE">
    <meta name="author" content="Chung Yu Pan">
    <title>Modern Business - Creative</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">


    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css"
          rel="stylesheet" type="text/css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="css/jquery.stepProgressBar.css" rel="stylesheet"
          type="text/css">
    <?php
    session_start();
    $connect = mysqli_connect("au-cdbr-azure-east-a.cloudapp.net", "b495cdc010cae4", "581aa129") or die("could not connect to the database");
    $db = mysqli_select_db($connect, "infs3202a2-db") or die("couldn't find database");

    $username = $_SESSION['username'];
    $query = mysqli_query($connect, "select progress from users where username = '$username' ");

    while ($row = mysqli_fetch_array($query)) {

        $genius = $row['progress'];
    }

    ?>

</head>


<body>
<!-- Navigation --------------------------------------------------------------->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">CREATIVE</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-item-1.html">Project I - H-FRAME
                                2.0</a>
                        </li>
                        <li>
                            <a href="portfolio-item-2.html">Project II -
                                ORIGAMI</a>
                        </li>
                        <li>
                            <a href="portfolio-item-3.html">Project III -
                                SCRATCH</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="order-login.php">Order</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li>
                    <a href="customize.php">Customize</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Navigation --------------------------------------------------------------->

<!-- Progress Section1 -------------------------------------------------------->

<section id="progress_section1">
    <div class="container">
        <h1 class="text-center">Build Progress for Your PC</h1> <br><br>
        <div id="myGoal"></div>
    </div>
    <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="js/jquery.stepProgressBar.js"></script>
    <a href="logout.php" class="logout-btn">Log Out</a>

    <!--// TODO: 25/05/2016 move this to js -->
    <script>
        $('#myGoal').stepProgressBar({
            currentValue: <?php echo $genius; ?>,
            steps: [
                {value: 0},
                {
                    topLabel: '10%',
                    value: 100,
                    bottomLabel: 'Started'
                },

                {
                    topLabel: '20%',
                    value: 200,
                },

                {
                    topLabel: '30%',
                    value: 300,
                },
                {
                    topLabel: '40%',
                    value: 400,
                },

                {
                    topLabel: '50%',
                    value: 500,
                    bottomLabel: 'halfway through the build'
                },

                {
                    topLabel: '60%',
                    value: 600,
                },

                {
                    topLabel: '70%',
                    value: 700,
                },
                {
                    topLabel: '80%',
                    value: 800,
                    bottomLabel: 'Testing the unit'
                },
                {
                    topLabel: '90%',
                    value: 900,
                },
                {
                    topLabel: '100%',
                    value: 1000,
                    bottomLabel: 'DONE',
                    mouseOver: function () {
                        alert('mouseOver');
                    },
                    click: function () {
                        alert('click');
                    }
                }
            ],
            unit: '%'
        });

        $('#get-current-value-btn').click(function () {
            alert($('#myGoal').stepProgressBar('getCurrentValue'));
        });
    </script>

</section>
<!-- Progress Section1 -------------------------------------------------------->


<!-- Footer Section ----------------------------------------------------------->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p>Copyrights © 2016 All Rights Reserved by XXX</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section ----------------------------------------------------------->


<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript"
        src="js/main.js"></script>


</body>


</html>