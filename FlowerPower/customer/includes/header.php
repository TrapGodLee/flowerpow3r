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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flower Power</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
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
               
           </div><!-- col-md-6 offer einde -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register.php">Registreer hier</a>
                   </li>
                   <li>
                       <a href="my_account.php">Mijn Account</a>
                   </li>
                   <li>
                       <a href="../cart.php">Ga naar winkelmand</a>
                   </li>
                   <li>
                       <a href="../checkout.php">
                       
                       <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                   echo "<a href='checkout.php'> Login </a>";

                               }else{

                                   echo " <a href='logout.php'> Log Uit </a> ";

                               }
                           
                           ?>
                       
                       </a>
                   </li>
                   
               </ul><!-- menu einde -->
               
           </div><!-- col-md-6 einde -->
           
       </div><!-- container einde -->
       
   </div><!-- Top einde -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
               <img src="images/Desktoplogo.jpg" alt="flower-power-logo" class="hidden-xs">
                <img src="images/Mobiellogo.jpg" alt="flower-power-logo mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home einde -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Navigatie</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Zoeken</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header einde -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav einde -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="../index.php">Home</a>
                       </li>
                       <li>
                           <a href="../shop.php">winkel</a>
                       </li>
                       <li class="active">
                           <a href="my_account.php">Mijn account</a>
                       </li>
                       <li>
                           <a href="../cart.php">Winkelmand</a>
                       </li>
                       <li>
                           <a href="../contact.php">Contact</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left einde -->
                   
               </div><!-- padding-nav einde -->
               
               <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Items in jouw winkelmand</span>
                   
               </a><!-- btn navbar-btn btn-primary einde -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Zoeken</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn einde -->
                   
               </div><!-- navbar-collapse collapse right einde -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary einde -->
                           
                           </span><!-- input-group-btn einde -->
                           
                       </div><!-- input-group einde -->
                       
                   </form><!-- navbar-form einde -->
                   
               </div><!-- collapse clearfix einde -->
               
           </div><!-- navbar-collapse collapse einde -->
           
       </div><!-- container einde -->
       
   </div><!-- navbar navbar-default einde -->

   