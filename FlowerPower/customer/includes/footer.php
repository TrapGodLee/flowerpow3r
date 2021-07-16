<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Paginas</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="../cart.php">Winkelmand</a></li>
                    <li><a href="../contact.php">Contact ons</a></li>
                    <li><a href="../shop.php">Winkel</a></li>
                    <li><a href="../checkout.php">Mijn Account</a></li>
                </ul><!-- ul einde -->
                
                <hr>
                
                <h4>User Sectie</h4>
               <ul>

            <?php 
            
                if(!isset($_SESSION['customer_email'])){

                    echo "<a href='../checkout.php'>Login</a>";

                }else{
                    
                    echo "<a href='my_account.php?my_orders'>Mijn Account</a>";

                }
            
            ?>

                <li><!-- ul Begin -->
                    
                <?php 
            
                    if(!isset($_SESSION['customer_email'])){

                        echo "<a href='../checkout.php'>Login</a>";

                    }else{
                        
                        echo "<a href='my_account.php?edit_accountsssss'>Mijn Account</a>";

                    }
                
                ?>

                </li><!-- ul einde -->
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top Producten Categorieën</h4>
                
                <ul><!-- ul einde -->
                
                    <?php

                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "
                            
                                <li>
                                
                                    <a href='../shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title

                                    </a>
                                
                                </li>
                            
                            ";

                        }

                    ?>
                    
                </ul><!-- ul einde -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 einde -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Vind ons via</h4>
                
                <p><!-- p Start -->
                    
                    <strong>Flower Power B.V</strong>
                    <br/>Kattenstraat 2
                    <br/>Leeuwenstad 5434LL
                    <br/>06-12345678
                    <br/>Leeuwen@gmail.com
                    <br/><strong>Lesley Reynolds</strong>
                    
                </p><!-- p einde -->
                
                <a href="../contact.php">Check onze contact papgina</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 einde -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Check de nieuws</h4>
                
                <p class="text-muted">
                    Mis onze nieuweste updates op onze producten niet
                </p>
                
                <form action="" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn einde -->
                        
                    </div><!-- input-group einde -->
                </form><!-- form einde -->
                
                <hr>
                
                <h4>Neem contact met ons op</h4>
                
                <p class="social">
                    <a href="../" class="fa fa-facebook"></a>
                    <a href="../" class="fa fa-twitter"></a>
                    <a href="../" class="fa fa-instagram"></a>
                    <a href="../" class="fa fa-google-plus"></a>
                    <a href="../" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row einde -->
    </div><!-- container einde -->
</div><!-- #footer einde -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2021 Flower Power</p>
            
        </div><!-- col-md-6 einde -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme door: <a href="#">Lesley Reynolds</a></p>
            
        </div><!-- col-md-6 einde -->
    </div><!-- container einde -->
</div><!-- #copyright einde -->