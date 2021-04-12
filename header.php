<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Tech Shopping|Home</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />

    <style>
        #navigation {
            background: #fff;
            /* fallback for old browsers */
           
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

        #header {

            background: #780206;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #141415, #170e0e);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }


        .footer-links li a {
            color: #fff;
        }

       

        .glyphicon {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .glyphicon-chevron-left:before {
            content: "\f053"
        }

        .glyphicon-chevron-right:before {
            content: "\f054"
        }
    </style>

</head>

<body style="background: #fff;">
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +91-9964716807</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i>nikhilkeshav76@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i>Mysore</a></li>
                </ul>

            </div>
        </div>
        <!-- /TOP HEADER -->
        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                    <img src="./img/Capture.png" style="width: 150px;">
                                </font>

                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    
                                </select>
                                <input class="input" id="search" type="text" placeholder="Search here">
                                <button type="submit" id="search_btn" class="search-btn" style="background:  #00bcd4;
    color: #fff;">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                           
                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="badge qty">0</div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list" id="cart_product">


                                    </div>

                                    <div class="cart-btns">
                                        <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i> edit cart</a>

                                    </div>
                                </div>

                            </div>
                            <!-- /Cart -->
                              <ul class="header-links pull-right">
           
                    <li>
                        <?php include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$_SESSION["name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdown-toggle" ><i class="fa fa-user-o"></i> </a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';    
                            }
                            ?>
                    </li>
                    <style type="text/css">
                        .header-links li i {
    color: #00bcd4;
    margin-right: 15px;
}
                    </style>
                    
                          <li><a href="chat/login.php"><i class="fa fa-comment" aria-hidden="true"></i></a></li>

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
    <style type="text/css">
        .main-nav>li>a {
    padding: 20px 0px;
    color: #00bcd4;
}
a {
    color: #000;
    }
    </style>
    <nav id='navigation'>
        <!-- container -->
        <div class="container" id="get_category_home" >

        </div>
        <!-- responsive-nav -->

        <!-- /container -->
    </nav>


    <!-- NAVIGATION -->

    <div class="modal fade" id="Modal_login" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <?php include "login_form.php";?>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal_register" role="dialog">
        <div class="modal-dialog" style="">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <?php include "register_form.php";?>

                </div>

            </div>

        </div>
    </div>