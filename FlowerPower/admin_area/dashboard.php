<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row nr: 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li><!-- active einde -->
        </ol><!-- breadcrumb einde -->
        
    </div><!-- col-lg-12 einde -->
</div><!-- row row nr: 1 einde -->

<div class="row"><!-- row nr: 2 begin -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div><!-- col-xs-3 einde -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_products; ?> </div>
                           
                        <div> Producten </div>
                        
                    </div><!-- col-xs-9 text-right einde -->
                    
                </div><!-- panel-heading row einde -->
            </div><!-- panel-heading einde -->
            
            <a href="index.php?view_products"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Bekijk producten 
                    </span><!-- pull-left einde -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right einde --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer einde -->
            </a><!-- a href einde -->
            
        </div><!-- panel panel-primary einde -->
    </div><!-- col-lg-3 col-md-6 einde -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-green"><!-- panel panel-green begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><!-- col-xs-3 einde -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                           
                        <div> Klanten </div>
                        
                    </div><!-- col-xs-9 text-right einde -->
                    
                </div><!-- panel-heading row einde -->
            </div><!-- panel-heading einde -->
            
            <a href="index.php?view_customers"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Bekijk klanten
                    </span><!-- pull-left einde -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right einde --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer einde -->
            </a><!-- a href einde -->
            
        </div><!-- panel panel-green einde -->
    </div><!-- col-lg-3 col-md-6 einde -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-orange"><!-- panel panel-yellow begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tags fa-5x"></i>
                        
                    </div><!-- col-xs-3 einde -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_p_categories; ?> </div>
                           
                        <div> Product categorieën </div>
                        
                    </div><!-- col-xs-9 text-right einde -->
                    
                </div><!-- panel-heading row einde -->
            </div><!-- panel-heading einde -->
            
            <a href="index.php?view_p_cats"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Bekijk gegevens
                    </span><!-- pull-left einde -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right einde --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer einde -->
            </a><!-- a href einde -->
            
        </div><!-- panel panel-yellow einde -->
    </div><!-- col-lg-3 col-md-6 einde -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-red"><!-- panel panel-red begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-shopping-cart fa-5x"></i>
                        
                    </div><!-- col-xs-3 einde -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_pending_orders; ?> </div>
                           
                        <div> Bestellingen </div>
                        
                    </div><!-- col-xs-9 text-right einde -->
                    
                </div><!-- panel-heading row einde -->
            </div><!-- panel-heading einde -->
            
            <a href="index.php?view_orders"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Bekijk bestellingen 
                    </span><!-- pull-left einde -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right einde --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer einde -->
            </a><!-- a href einde -->
            
        </div><!-- panel panel-red einde -->
    </div><!-- col-lg-3 col-md-6 einde -->
    
</div><!-- row nr: 2 einde -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-8"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-money fa-fw"></i> Nieuwe bestellingen
                    
                </h3><!-- panel-title einde -->
            </div><!-- panel-heading einde -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                          
                            <tr><!-- th begin -->
                           
                                <th> Bestel nr: </th>
                                <th> Email klant: </th>
                                <th> rekening No: </th>
                                <th> Product ID: </th>
                                <th> Product aantal: </th>
                                <th> Product grote: </th>
                                <th> Status: </th>
                            
                            </tr><!-- th einde -->
                            
                        </thead><!-- thead einde -->
                        
                        <tbody><!-- tbody begin -->

                        <?php 
                          
                          $i=0;
    
                          $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
    
                          $run_order = mysqli_query($con,$get_order);
    
                          while($row_order=mysqli_fetch_array($run_order)){
                              
                              $order_id = $row_order['order_id'];
                              
                              $c_id = $row_order['customer_id'];
                              
                              $invoice_no = $row_order['invoice_no'];
                              
                              $product_id = $row_order['product_id'];
                              
                              $qty = $row_order['qty'];
                              
                              $size = $row_order['size'];
                              
                              $order_status = $row_order['order_status'];
                              
                              $i++;
                      
                      ?>
                     
                      <tr><!-- tr begin -->
                         
                          <td> <?php echo $order_id; ?> </td>
                          <td>
                              
                              <?php 
                              
                                  $get_customer = "select * from customers where customer_id='$c_id'";
                              
                                  $run_customer = mysqli_query($con,$get_customer);
                              
                                  $row_customer = mysqli_fetch_array($run_customer);
                              
                                  $customer_email = $row_customer['customer_email'];
                              
                                  echo $customer_email;
                              
                              ?>
                              
                          </td>
                          <td> <?php echo $invoice_no; ?> </td>
                          <td> <?php echo $product_id; ?> </td>
                          <td> <?php echo $qty; ?> </td>
                          <td> <?php echo $size; ?> </td>
                          <td>
                              
                              <?php 
                              
                                  if($order_status=='pending'){
                                      
                                      echo $order_status='pending';
                                      
                                  }else{
                                      
                                      echo $order_status='Complete';
                                      
                                  }
                              
                              ?>
                              
                          </td>
                                
                            </tr><!-- tr einde -->

                            <?php } ?>
                            
                        </tbody><!-- tbody einde -->
                        
                    </table><!-- table table-hover table-striped table-bordered einde -->
                </div><!-- table-responsive einde -->
                
                <div class="text-right"><!-- text-right begin -->
                    
                    <a href="index.php?view_orders"><!-- a href begin -->
                        
                        Bekijk alle bestellingen <i class="fa fa-arrow-circle-right"></i>
                        
                    </a><!-- a href einde -->
                    
                </div><!-- text-right einde -->
                
            </div><!-- panel-body einde -->
            
        </div><!-- panel panel-primary  -->
    </div><!-- col-lg-8 einde -->
    
    <div class="col-md-4"><!-- col-md-4 begin -->
        <div class="panel"><!-- panel begin -->
            <div class="panel-body"><!-- panel-body begin -->
                <div class="mb-md thumb-info"><!-- mb-md thumb-info begin -->

                    <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">
                    
                    <div class="thumb-info-title"><!-- thumb-info-title begin -->
                       
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        <span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
                        
                    </div><!-- thumb-info-title einde -->

                </div><!-- mb-md thumb-info einde -->
                
                <div class="mb-md"><!-- mb-md begin -->
                    <div class="widget-content-expanded"><!-- widget-content-expanded begin -->
                        <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?> <br/>
                        <i class="fa fa-flag"></i> <span> Land: </span> <?php echo $admin_country; ?> <br/>
                        <i class="fa fa-envelope"></i> <span> Contact: </span> <?php echo $admin_contact; ?> <br/>
                    </div><!-- widget-content-expanded einde -->
                    
                    <hr class="dotted short">
                    
                    <h5 class="text-muted"> Over mij</h5>
                    
                    <p><!-- p begin -->
                        
                        <?php echo $admin_about; ?>
                        
                    </p><!-- p einde -->
                    
                </div><!-- mb-md einde -->
                
            </div><!-- panel-body  -->
        </div><!-- panel einde -->
    </div><!-- col-md-4 einde -->
    
</div><!-- row no: 3 einde -->

<?php } ?>