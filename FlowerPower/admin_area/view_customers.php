einde<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Bekijk klanten
                
            </li><!-- active einde -->
        </ol><!-- breadcrumb einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 1 einde -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Bekijk klanten
                
               </h3><!-- panel-title einde --> 
            </div><!-- panel-heading einde -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Nr: </th>
                                <th> Naam: </th>
                                <th> Foto: </th>
                                <th> E-Mail: </th>
                                <th> Land: </th>
                                <th> Stad: </th>
                                <th> Adres: </th>
                                <th> Contact: </th>
                                <th> Verwijder: </th>
                            </tr><!-- tr einde -->
                        </thead><!-- thead einde -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_c = "select * from customers";
                                
                                $run_c = mysqli_query($con,$get_c);
          
                                while($row_c=mysqli_fetch_array($run_c)){
                                    
                                    $c_id = $row_c['customer_id'];
                                    
                                    $c_name = $row_c['customer_name'];
                                    
                                    $c_img = $row_c['customer_image'];
                                    
                                    $c_email = $row_c['customer_email'];
                                    
                                    $c_country = $row_c['customer_country'];
                                    
                                    $c_city = $row_c['customer_city'];
                                    
                                    $c_address = $row_c['customer_address'];
                                    
                                    $c_contact = $row_c['customer_contact'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $c_name; ?> </td>
                                <td> <img src="../customer/customer_images/<?php echo $c_img; ?>" width="60" height="60"></td>
                                <td> <?php echo $c_email; ?> </td>
                                <td> <?php echo $c_country; ?></td>
                                <td> <?php echo $c_city; ?> </td>
                                <td> <?php echo $c_address ?> </td>
                                <td> <?php echo $c_contact ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_customer=<?php echo $c_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Verwijder
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr einde -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody einde -->
                        
                    </table><!-- table table-striped table-bordered table-hover einde -->
                </div><!-- table-responsive einde -->
            </div><!-- panel-body einde -->
            
        </div><!-- panel panel-default einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 2 einde -->

<?php } ?>