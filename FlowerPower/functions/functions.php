<?php

$db = mysqli_connect("localhost", "root", "", "flowerpower"); // variable met waarde/gegevens dat linked aan de database word ook globaal opgeroepen

/// getRealIpUser function begin

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// getRealipUser function einde

    /// add_cart function begin
    function add_cart(){
    
        global $db;
        
        if(isset($_GET['add_cart'])){
            
            $ip_add = getRealIpUser();
            
            $p_id = $_GET['add_cart'];
            
            $product_qty = $_POST['product_qty'];
            
            $product_size = $_POST['product_size'];
            
            $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
            
            $run_check = mysqli_query($db,$check_product);
            
            if(mysqli_num_rows($run_check)>0){
                
                echo "<script>alert('Dit product is al in uw winkelmand')</script>";
                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
                
            }else{
                
                $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
                
                $run_query = mysqli_query($db,$query);
                
                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
                
            }
            
        }
        
    }

/// add_cart function einde


/// getPro function begin
//function waarmee database word opgeroepen
function getPro(){

    global $db; //global database

    $get_products = "select * from products order by 1 DESC LIMIT 0,8"; // variable met waarde/gegevens waar producten van de tafel producten in de database flowerpower word opgehaald enn word bij een order van 1 gedisplayed

    $run_products = mysqli_query($db,$get_products); //variable met waarde/gegevens waar db en tafel word opgevraagd

    //loop waar wij producten kunnen blijven oproepen en niet telkens opnieuw hoeven te schrijven
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        € $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            Bekijk product

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Bestel nu

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}

// einde getPro funtion

// begin getPCats function

function getPCats(){

        global $db; //global database word opgevraagd met db variable met localhost, root en dbNaam

        $get_p_cats = "select * from product_categories"; // variable met waarde/gegevens waar gegevens van de tafel producten_categories in de database flowerpower word opgehaald enn word bij een order van 1 gedisplayed

        $run_p_cats = mysqli_query($db,$get_p_cats); // variable waar db en tafel word opgeslagen

        //variable met een array waar er word gezegt haal de variable waar db en tafel is opgeslagen
        while($row_p_cats=mysqli_fetch_array($run_p_cats)){

            $p_cat_id = $row_p_cats['p_cat_id']; //p_cat_id in tafel product_categories word opgehaald

            $p_cat_title = $row_p_cats['p_cat_title']; //p_cat_title in tafel product_categories word opgehaald

            //list waarbij de p_cat_id en p_cat_title word opgevraagd uit database en geplaats in de link
        echo"
            
            <li>
            
                <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
                
            </li>
        
        ";
    }

}

// einde getPCats

// begin getCats function
function getCats(){

        global $db; //global database word opgevraagd met db variable met localhost, root en dbNaam

        $get_cats = "select * from categories"; // variable met waarde/gegevens waar gegevens van de tafel categories in de database flowerpower word opgehaald enn word bij een order van 1 gedisplayed

        $run_cats = mysqli_query($db,$get_cats); // variable waar db en tafel word opgeslagen

        //variable met een array waar er word gezegt haal de variable waar db en tafel is opgeslagen
        while($row_cats=mysqli_fetch_array($run_cats)){

            $cat_id = $row_cats['cat_id']; //cat_id in tafel product_categories word opgehaald

            $cat_title = $row_cats['cat_title']; //cat_title in tafel product_categories word opgehaald

            //list waarbij de cat_id en cat_title word opgevraagd uit database en geplaats in de link
        echo"
        
            <li>
            
                <a href='shop.php?cat=$cat_id'> $cat_title </a>
                
            </li>
        
        ";
    }

}

// einde getCats

// begin getpcatpro function

function getpcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $p_cat_title </h1>
                    
                    <p> $p_cat_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        € $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            Bekijk product

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Bestel nu

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}

// einde getpcatpro function

// begin getcatpro function

    function getcatpro(){

        global $db;

        if(isset($_GET['cat'])){
            $cat_id = $_GET['cat'];

            $get_cat = "select * from categories where cat_id='$cat_id'";

            $run_cat = mysqli_query($db,$get_cat);

            $row_cat = mysqli_fetch_array($run_cat);

            $cat_title = $row_cat['cat_title'];
            
            $cat_desc = $row_cat['cat_desc'];

            $get_cat = "select * from products where cat_id='$cat_id' LIMIT 0,6";

            $run_products = mysqli_query($db,$get_cat);

            $count = mysqli_num_rows($run_products);

            if($count==0){

                echo"
                
                    <div ='box'>
                    
                        <h1> No Product Found </h1>
                    
                    </div>
                
                ";

            }else{

                echo"
                
                    <div class='box'>
                    
                        <h1> $cat_title </h1>

                        <p> $cat_desc </p>
                    
                    </div>
                
                ";

            }

            while($row_products=mysqli_fetch_array($run_products)){

                $pro_id = $row_products['product_id'];

                $pro_title = $row_products['product_title'];

                $pro_price = $row_products['product_price'];

                $pro_desc = $row_products['product_desc'];

                $pro_img1 = $row_products['product_img1'];

                echo"
                
                <div class='col-md-4 col-sm-6 center-responsive'>
                                            
                    <div class='product'>

                        <a href='details.php?pro_id=$pro_id'> 
                        
                        <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                        
                        </a>

                        <div class='text'>
                        
                            <h3>
                            
                            <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                            
                            </h3>

                            <p>
                            
                                <p class='price'>

                                €$pro_price
                            
                            </p>
                        
                            <p class='buttons'>
                            
                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                
                                    Bekijk product
                                
                                </a>

                                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                
                                    <i class='fa fa-shopping-cart'></i>  Bestel nu
                                
                                </a>
                            
                            </p>
                        </div>

                    </div>

                </div>
                
                ";

            }

        }

    }

// einde getcatpro function

/// items function begin

    function items(){

        global $db;

        $ip_add = getRealIpUser();

        $get_items = "select * from cart where ip_add='$ip_add'";

        $run_items = mysqli_query($db,$get_items);

        $count_items = mysqli_num_rows($run_items);

        echo $count_items;

    }

/// items function einde

/// total_price function begin

    function total_price(){

        global $db;

        $ip_add = getRealIpUser();

        $total = 0;

        $select_cart = "select * from cart where ip_add='$ip_add'";

        $run_Cart = mysqli_query($db,$select_cart);

        while($record=mysqli_fetch_array($run_Cart)){

            $pro_id = $record['p_id'];

            $pro_qty = $record['qty'];

            $get_price = "select * from products where product_id='$pro_id'";

            $run_price = mysqli_query($db,$get_price);

            while($row_price=mysqli_fetch_array($run_price)){

                $sub_total = $row_price['product_price']*$pro_qty;

                $total += $sub_total;

            }
            
        }

        echo "€" . $total;

    }

/// total_price function einde
?>