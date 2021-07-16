<?php

    session_start();

    if(!isset($_SESSION['customer_email'])){

        echo "<script>window.open('../checkout.php','_self')</script>";

    }else{

    include("includes/db.php");
    include("functions/functions.php");

    if(isset($_GET['order_id'])){

        $order_id = $_GET['order_id'];

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

   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Mijn Account
                   </li>
               </ul><!-- breadcrumb einde -->
               
           </div><!-- col-md-12 einde -->
           
           <div class="col-md-3"><!-- col-md-3 einde -->
   
<?php 
    
    include("includes/sidebar.php");
    
?>
               
    </div><!-- col-md-3 einde -->
           
        <div class="col-md-9"><!-- col-md-9 Begin -->
               
            <div class="box"><!-- box Begin -->
                   
                <h1 align="center"> Bevestig betaling</h1>
                   
                    <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Factuur Nr: </label>
                          
                          <input type="text" class="form-control" name="invoice_no" required>
                           
                       </div><!-- form-group einde -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Verzonden bedrag: </label>
                          
                          <input type="text" class="form-control" name="amount_sent" required>
                           
                       </div><!-- form-group einde -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Selecteer betaal methode: </label>
                          
                          <select name="payment_mode" class="form-control"><!-- form-control Begin -->
                              
                              <option> Selecteer manier van betalen </option>
                              <option> ING </option>
                              <option> ABN Amro </option>
                              <option> RABO </option>
                              <option> SNS Bank </option>
                              
                          </select><!-- form-control einde -->
                           
                       </div><!-- form-group einde -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Transactie / Referentie ID: </label>
                          
                          <input type="text" class="form-control" name="ref_no" required>
                           
                        </div><!-- form-group einde -->
                       
                        <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Bank nr: </label>
                          
                          <input type="text" class="form-control" name="code" required>
                           
                       </div><!-- form-group einde -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                        <label> Betalings datum: </label>
                          
                        <input type="text" class="form-control" name="date" required>
                           
                       </div><!-- form-group einde -->
                       
                       <div class="text-center"><!-- text-center Begin -->
                           
                           <button class="btn btn-primary btn-lg" name="confirm_payment"><!-- tn btn-primary btn-lg Begin -->
                               
                               <i class="fa fa-user-md"></i> Bevestig betaling
                               
                            </button><!-- tn btn-primary btn-lg einde -->
                           
                        </div><!-- text-center einde -->
                       
                    </form><!-- form einde -->
                   
                    <?php 
                    
                        if(isset($_POST['confirm_payment'])){

                            $update_id = $_GET['update_id'];

                            $invoice_no = $_POST['invoice_no'];

                            $amount = $_POST['amount_sent'];

                            $payment_mode = $_POST['payment_mode'];

                            $ref_no = $_POST['ref_no'];

                            $code = $_POST['code'];

                            $payment_date = $_POST['date'];

                            $complete = "Complete";

                            $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

                            $run_payment = mysqli_query($con,$insert_payment);

                            $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";

                            $run_customer_order = mysqli_query($con,$update_customer_order);

                            $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

                            $run_pending_order = mysqli_query($con,$update_pending_order);

                            if($run_pending_order){

                                echo "<script>alert('Bedankt voor het kopen van één van onze producten')</script>";

                                echo "<script>window.open('my_account.php?my_orders','_self')</script>";

                            }

                        }
                    
                    ?>

                </div><!-- box einde -->
               
            </div><!-- col-md-9 einde -->
           
        </div><!-- container einde -->
    </div><!-- #content einde -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>