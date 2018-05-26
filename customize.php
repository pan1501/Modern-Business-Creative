<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<div class="container">


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Customize</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">Customize</li>
            </ol>
        </div>
    </div>


    <form name="form" action="buy.php" id="form" method="post">
        <div class="container">

            <!--// TODO: 25/05/2016 I HAVE CHANGED PC TO CASE -->
            <div class="row">
                <h2>CASE</h2>
                <input type="radio" name="case" id="case1"
                       value="H-FramE 2.0"/> H-FramE 2.0<br>
                <input type="radio" name="case" id="case2"
                       value="ORIGAMI"/> ORIGAMI<br>
                <input type="radio" name="case" id="case3"
                       value="SCRATCH"/> SCRATCH<br>
            </div>


            <div class="row">
                <h2>CPU</h2>
                <input type="radio" name="cpu" id="cpu1"
                       value="INTEL I5-6400"/> INTEL I5-6400K 4-CORE<br>
                <input type="radio" name="cpu" id="cpu2"
                       value="INTEL I7-6700"/> INTEL I7-6700K 4-CORE<br>
                <input type="radio" name="cpu" id="cpu3"
                       value="INTEL I7-5960X"/> INTEL I7-5960X 8-CORE<br>
            </div>


            <div class="row">
                <h2>Motherboard</h2>
                <input type="radio" name="mb" id="mb1"
                       value="MSI B150M BAZOOKA"/> MSI B150M BAZOOKA ATX<br>
                <input type="radio" name="mb" id="mb2"
                       value="GiGABYTE Z170 Gaming G1 ATX"/> GIGABYTE Z170
                Gaming G1 ATX<br>
                <input type="radio" name="mb" id="mb3"
                       value="Asus X99 Rampage V Extreme"/> Asus X99 Rampage V
                Extreme E-ATX<br>
            </div>


            <div class="row">
                <h2>GPU</h2>
                <input type="radio" name="gpu" id="gpu2"
                       value="NVIDIA Geforce GTX 1070"/> NVIDIA Geforce GTX
                1070
                <br>
                <input type="radio" name="gpu" id="gpu1"
                       value="AMD Fury X"/>Radeon Pro Duo
                <br>
                <input type="radio" name="gpu" id="gpu3"
                       value="NVIDIA Geforce GTX 1080"/> NVIDIA Geforce GTX
                1080<br>

            </div>

            <div class="row">
                <h2>RAM</h2>
                <input type="radio" name="ram" id="ram1"
                       value="G.SKILL TridentZ Series 16GB (2 x 8GB) DDR4"/>G.SKILL
                TridentZ Series 16GB (2 x 8GB) DDR4<br>

                <input type="radio" name="ram" id="ram2"
                       value="Corsair Dominator Platinum 16GB (4 x 8GB) DDR4"/>Corsair
                Dominator Platinum 16GB (2 x 8GB) DDR4<br>

                <input type="radio" name="ram" id="ram3"
                       value="Corsair Dominator Platinum 32GB (8 x 8GB) DDR4"/>Corsair
                Dominator Platinum 32GB (4 x 8GB) DDR4<br>
            </div>

            <div class="row">
                <h2>System Disk</h2>
                <input type="radio" name="storage2" id="storage1"
                       value=" WESTERN DIGITAL BLACK
                1TB 7200 RPM"/>WESTERN DIGITAL BLACK
                1TB 7200 RPM <br>
                <input type="radio" name="storage2" id="storage2"
                       value="WESTERN DIGITAL BLACK
                2TB 7200 RPM"/>WESTERN DIGITAL BLACK
                2TB 7200 RPM<br>
                <input type="radio" name="storage2" id="storage3"
                       value="WESTERN DIGITAL BLACK
                4TB 7200 RPM"/>WESTERN DIGITAL BLACK
                4TB 7200 RPM<br>
            </div>

            <div class="row">
                <h2>Storage Disk </h2>
                <input type="radio" name="storage" id="storage1"
                       value=" WESTERN DIGITAL BLUE 1TB"/> Samsung 850 PRO 256GB<br>
                <input type="radio" name="storage" id="storage2"
                       value="Samsung 850 PRO 512GB"/> Samsung 850 PRO 512GB<br>
                <input type="radio" name="storage" id="storage3"
                       value="Intel SSD 750 PCIe 1.2TB"/>Intel SSD 750 PCIe
                1.2TB<br>
            </div>


            <div class="row">
                <h2>Power Supply</h2>
                <input type="radio" name="psu" id="psu1"
                       value=" CORSAIR AX760W"/> CORSAIR AX760W<br>
                <input type="radio" name="psu" id="psu2"
                       value="CORSAIR  AX860W"/> CORSAIR AX 860W<br>
                <input type="radio" name="psu" id="psu3"
                       value="CORSAIR AX1200"/> CORSAIR AX 1200<br>
            </div>

        </div>


        <div class="row">
            <div class="col-md-8">
                <h3>Personal Detail</h3>
                <form id="contactForm" name="myForm" method="post"
                      onsubmit="return validateForm()">
					<div class="control-group form-group">
                        <div class="controls">
                            <label for="mail">User Name:</label>
                            <input class="form-control" value="" type="text"
                                   id="username" name="username"
                                   placeholder="steve115548"/>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label for="mail">Password:</label>
                            <input class="form-control" value="" type="password"
                                   id="password" name="password"
                                   placeholder=""/>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label for="mail">E-mail Address:</label>
                            <input class="form-control" value="" type="email"
                                   id="mail" name="user_email"
                                   placeholder="chung.pan1@uqconnect.edu.au"/>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="name">Name:</label>
                            <input class="form-control" value="" type="text"
                                   id="name" name="user_name"
                                   placeholder="Steve Jobs"/>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="tel">Phone Number:</label>
                            <input class="form-control" value="" type="tel"
                                   id="phone" name="user_phone"
                                   placeholder="123 456 7890"/>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="msg">Note:</label>
                            <textarea class="form-control" id="msg"
                                      name="user_message"
                                      placeholder="Text Here!"></textarea>
                        </div>
                    </div>

                    <div class="success">
                        <button id="reset" class="btn btn-primary" type="reset">
                            Clear
                        </button>
                        <button id="submit" class="btn btn-primary"
                                type="submit">BUY NOW
                        </button>

                    </div>

                </form>

            </div>

        </div>
        <script>
            document.getElementById('form').checked = true;
        </script>



<!--<section id="customize_section3">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<form>-->
<!--<select name="users" onchange="showUser(this.value)">-->
<!--<option value="">Select a person:</option>-->
<!--<option value="1">Peter Griffin</option>-->
<!--<option value="2">Lois Griffin</option>-->
<!--<option value="3">Joseph Swanson</option>-->
<!--<option value="4">Glenn Quagmire</option>-->
<!--</select>-->
<!--</form>-->
<!--<br>-->
<!--<div id="txtHint"><b>Person info will be listed here...</b></div>-->
<!--</div>-->

<!--</div>-->

<!--</section>-->


<!--<script>-->
<!--function showUser(str) {-->
<!--if (str == "") {-->
<!--document.getElementById("txtHint").innerHTML = "";-->
<!--return;-->
<!--} else {-->
<!--if (window.XMLHttpRequest) {-->
<!--// code for IE7+, Firefox, Chrome, Opera, Safari-->
<!--xmlhttp = new XMLHttpRequest();-->
<!--} else {-->
<!--// code for IE6, IE5-->
<!--xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");-->
<!--}-->
<!--xmlhttp.onreadystatechange = function () {-->
<!--if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {-->
<!--document.getElementById("txtHint").innerHTML = xmlhttp.responseText;-->
<!--}-->
<!--};-->
<!--xmlhttp.open("GET", "assets/php/getuser.php?q=" + str, true);-->
<!--xmlhttp.send();-->
<!--}-->
<!--}-->
<!--</script>-->


<!-- Footer Section ------------------------------------------------------->


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p>Copyrights © 2016 All Rights Reserved by XXX</p>
            </div>
        </div>
    </div>

</div>
<!-- Footer Section ------------------------------------------------------->


<!-- jQuery -->
    <script src="js/jquery.js"></script>



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

	<script language="javascript" type="text/javascript" src="js/main.js"></script>
</body>
</html>