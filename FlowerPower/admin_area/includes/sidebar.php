<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Navigeer</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle einde -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Sectie</a>
        
    </div><!-- navbar-header einde -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>
                
            </a><!-- dropdown-toggle einde -->
            
            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Profiel
                        
                    </a><!-- a href  -->
                </li><!-- li einde -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-envelope"></i> Producten
                        
                        <span class="badge"><?php echo $count_products; ?></span>
                        
                    </a><!-- a href einde -->
                </li><!-- li einde -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_customers"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Klanten
                        
                        <span class="badge"><?php echo $count_customers; ?></span>
                        
                    </a><!-- a href  -->
                </li><!-- li einde -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_cats"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Product categorieën
                        
                        <span class="badge"><?php echo $count_p_categories; ?></span>
                        
                    </a><!-- a href  -->
                </li><!-- li einde -->
                
                <li class="divider"></li>
                
                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log uit
                        
                    </a><!-- a href einde -->
                </li><!-- li einde -->
                
            </ul><!-- dropdown-menu einde -->
            
        </li><!-- dropdown einde -->
        
    </ul><!-- nav navbar-right top-nav einde -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?dashboard"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a><!-- a href einde -->
                
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Producten
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href einde -->
                
                <ul id="products" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_product"> Voeg producten toe </a>
                    </li><!-- li  -->
                    <li><!-- li begin -->
                        <a href="index.php?view_products"> Bekijk Producten </a>
                    </li><!-- li einde -->
                </ul><!-- collapse einde -->
                
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-edit"></i> Products Categorieën
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href einde -->
                
                <ul id="p_cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_p_cat"> Voeg product categoriën toe </a>
                    </li><!-- li  -->
                    <li><!-- li begin -->
                        <a href="index.php?view_p_cats"> Bekijk product categorieën </a>
                    </li><!-- li einde -->
                </ul><!-- collapse einde -->
                
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-book"></i> Categorieën
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href  -->
                
                <ul id="cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_cat"> Voeg categorieën toe </a>
                    </li><!-- li  -->
                    <li><!-- li begin -->
                        <a href="index.php?view_cats"> Bekijk categorieën </a>
                    </li><!-- li einde -->
                </ul><!-- collapse einde -->
                
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Slides
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href einde -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_slide"> Voeg slides toe </a>
                    </li><!-- li einde -->
                    <li><!-- li begin -->
                        <a href="index.php?view_slides"> Bekijk slides </a>
                    </li><!-- li einde -->
                </ul><!-- collapse  -->
                
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="index.php?view_customers"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> Bekijk klanten
                </a><!-- a href  -->
            </li><!-- li  -->
            
            <li><!-- li begin -->
                <a href="index.php?view_orders"><!-- a href begin -->
                    <i class="fa fa-fw fa-book"></i> Bekijk bestellingen
                </a><!-- a href einde -->
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="index.php?view_payments"><!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i> Bekijk betalingen
                </a><!-- a href einde -->
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#users"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Gebruikers
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href einde -->
                
                <ul id="users" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_user"> Voeg gebruikers toe </a>
                    </li><!-- li einde -->
                    <li><!-- li begin -->
                        <a href="index.php?view_users"> Bekijk gebruikers </a>
                    </li><!-- li einde -->
                    <li><!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Bewerk Gebruikers profiel </a>
                    </li><!-- li einde -->
                </ul><!-- collapse einde -->
                
            </li><!-- li einde -->
            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log uit
                </a><!-- a href  -->
            </li><!-- li  -->
            
        </ul><!-- nav navbar-nav side-nav einde -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse einde -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top einde -->

<?php } ?>