<?php

    session_start();

    include("includes/db.php");
    include("functions/functions.php");

?>

<?php

    if(isset($_GET['pro_id'])){

        $product_id = $_GET['pro_id'];

        $get_product = "select * from products where product_id='$product_id'";

        $run_product = mysqli_query($con,$get_product);

        $row_product = mysqli_fetch_array($run_product);

        $p_cat_id = $row_product['p_cat_id'];

        $pro_title = $row_product['product_title'];

        $pro_price = $row_product['product_price'];

        $pro_desc = $row_product['product_desc'];

        $pro_img1 = $row_product['product_img1'];

        $pro_img2 = $row_product['product_img2'];

        $pro_img3 = $row_product['product_img3'];

        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

        $run_p_cat = mysqli_query($con,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Flower Power</title>
</head>
<body>
    
    <div id="top"> <!-- top Nav -->
    
        <div class="container"><!--container begin -->
        
            <div class="col-md-6 offer"> <!--col-md-6 offer begin -->

                <a href="#" class="btn btn-success btn-sm">
                
                <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welkom: Gast";
                       
                   }else{
                       
                       echo "Welkom: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
                   
                
                </a>
                    <a href="checkout.php"><?php items(); ?> Items in je winkelmand | totale prijs: <?php total_price(); ?> </a>

                        </div> <!-- col-md-6 offer einde -->

                            <div class="col-md-6"> <!-- col-md-6 begin-->

                                <ul class="menu"> <!-- menu -->

                                    <li>
                                        <a href="customer_register.php"Registreren>Registreer hier</a>
                                    </li>
                                    <li>
                                    <a href="customer/my_account.php">Mijn account</a>
                                    </li>
                                    <li>
                                        <a href="cart.php">Ga naar winkelmand</a>
                                    </li>
                                    <li>
                                        <a href="admin_Area/login.php">Admin Login</a>
                                    </li>
                                    <li>
                                        <a href="checkout.php">
                                        
                                        <?php 
                           
                                            if(!isset($_SESSION['customer_email'])){
                                        
                                                    echo "<a href='checkout.php'> Login </a>";

                                                }else{

                                                    echo " <a href='logout.php'> Log Uit </a> ";

                                                }
                                            
                                            ?>
                                        
                                        </a>
                                    </li>

                                </ul> <!-- menu einde -->
            </div> <!-- col-md-6 einde -->

        </div> <!-- container einde-->

    </div> <!-- Nav einde-->

    <div id="navbar" class="navbar navbar-default"><!-- nav default -->

        <div class="container"><!-- container begin-->

            <div class="navbar-header"><!-- navbar header begin-->

                <a href="index.php" class="navbar-brand home"><!-- navbar brand begin-->

                    <img src="images/Desktoplogo.jpg" alt="flower-power-logo" class="hidden-xs">
                    <img src="images/Mobiellogo.jpg" alt="flower-power-logo mobile" class="visible-xs">

                </a><!--navbar brand einde-->

        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                <span class="sr-only">Navigatie</span>


            <i class="fa fa-align-justify"></i>

        </button>

    <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

        <span class="sr-only">Zoeken</span>


        <i class="fa fa-search"></i>

    </button>

    </div><!--navbar header einde -->

    <div class="navbar-collapse collapse" id="navigation"><!--navbar collpase begin-->

    <div class="padding-nav"><!--navbar begin-->

    <ul class="nav navbar-nav left"><!--navbar left begin-->

        <li class="<?php if($active=='Home') echo"active"; ?>">
            <a href="index.php">Home</a>
        </li>
        <li class="<?php if($active=='Winkel') echo"active"; ?>">
        <a href="shop.php">winkel</a>
        </li>
        <li class="<?php if($active=='Account') echo"active"; ?>">
        
            <?php 
            
                if(!isset($_SESSION['customer_email'])){

                    echo "<a href='checkout.php'>Mijn Account</a>";

                }else{
                    
                    echo "<a href='customer/my_account.php?my_orders'>Mijn Account</a>";

                }
            
            ?>

        </li>
        <li class="<?php if($active=='Winkelmand') echo"active"; ?>">
        <a href="cart.php">Winkelmand</a>
        </li>
        <li class="<?php if($active=='contact') echo"active"; ?>">
        <a href="contact.php">Contact</a>
        </li>

    </ul><!-- navbar left einde-->

    </div>

    <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn right begin-->

    <i class="fa fa-shopping-cart"></i>

    <span><?php items(); ?> Items in jouw winkelmand</span>

    </a><!--  btn navbar-btn right einde-->

    <div class="navbar-collapse collapse right"><!--  navbar collapse right begin-->

        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary begin-->

            <span class="sr-only">Zoeken</span>

            <i class="fa fa-search"></i>

        </button><!--  btn btn-primary einde-->

    </div><!-- navbar collapse right einde -->

    <!-- SEARCH BUTTON -->
    <div class="collapse clearfix" id="search"><!-- collapse clearfix begin -->

        <form method="get" action="results.php" class="navbar-form"><!--form navbar begin-->

            <div class="input-group"><!--input group begin -->

                <input type="text" class="form-control" placeholder="search" name="user_query" required><!-- form search begin-->

                <span class="input-group-btn"><!-- span button input group start -->

        <button type="submit" name="search" value="search" class="btn btn-primary"><!-- submit btn-primary search begin-->

            <i class="fa fa-search"></i>

        </button><!-- submit btn-primary search einde-->

        </span><!-- span button input group einde -->

            </div><!--input group einde -->

        </form><!--form navbar einde-->

    </div><!-- collapse clearfix einde -->

    </div><!--navbar collpase einde-->

    </div><!-- container einde-->

    </div><!-- nav default einde -->

    
