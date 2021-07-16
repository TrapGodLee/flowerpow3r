<?php

    if(!isset($_SESSION['admin_email'])){
            
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
    <title>Producten toevoegen</title>
</head>
<body>
    <div class="row"><!-- row 1 begin  -->
    
        <div class="col-lg-12">
        
            <ol class="breadcrumb">
            
                <li class="active">
                
                    <i class="fa fa-dashboard"></i> Dashboard / Producten toevoegen
                
                </li>
            
            </ol>
        
        </div>
    
    </div><!-- row einde -->

    <div class="row"><!-- row 2 begin -->
    
        <div class="col-lg-12">
        
            <div class="panel panel-default">
            
                <div class="panel-heading">
                
                    <h3 class="panel-title">
                    
                        <i class="fa fa-money fa-fw"></i> Producten toevoegen
                    
                    </h3>
                
                </div>
            
                <div class="panel-body">
                
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    
                        <div class="form-group"><!-- form 1 begin-->
                        
                            <label class="col-md-3 control-label">Product titel</label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <input name="product_title" type="text" class="form-control" required>
                            
                            </div>
                        
                        </div><!-- form 1 einde-->

                        
                        <div class="form-group"><!-- form 2 begin-->
                        
                            <label class="col-md-3 control-label">Product categorie</label><!-- product categorie -->

                            <div class="col-md-6">
                            
                                <select name="product_cat" class="form-control">
                                
                                    <option>selecteer een categorie product</option>

                                    <?php 
                                    
                                    $get_p_cats = "select * from product_categories";
                                    $run_p_cats = mysqli_query($con,$get_p_cats);
                                    
                                    while ($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                        $p_cat_id = $row_p_cats['p_cat_id'];
                                        $p_cat_title = $row_p_cats['p_cat_title'];

                                        echo "
                                        
                                            <option value='$p_cat_id'> $p_cat_title </option>
                                        
                                        ";
                                    }
                                    ?>
                                
                                </select>
                            
                            </div>
                        
                        </div><!-- form 2 einde-->

                        
                        
                        <div class="form-group"><!-- form 3 begin-->
                        
                            <label class="col-md-3 control-label">categorie</label><!-- product categorie -->

                            <div class="col-md-6">
                            
                                <select name="cat" class="form-control">
                                
                                    <option>selecteer een categorie</option>

                                    <?php 
                                    
                                    $get_cat = "select * from categories";
                                    $run_cat = mysqli_query($con,$get_cat);
                                    
                                    while ($row_cat=mysqli_fetch_array($run_cat)){

                                        $cat_id = $row_cat['cat_id'];
                                        $cat_title = $row_cat['cat_title'];

                                        echo "
                                        
                                            <option value='$cat_id'> $cat_title </option>
                                        
                                        ";
                                    }
                                    ?>
                                
                                </select>
                            
                            </div>
                        
                        </div><!-- form 3 einde-->

                        <div class="form-group"><!-- form 4 | product image 1 begin-->
                        
                            <label class="col-md-3 control-label">Product foto 1</label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <input name="product_img1" type="file" class="form-control" required>
                            
                            </div>
                        
                        </div><!-- form 4 | product image 1 einde-->

                        <div class="form-group"><!-- form 5 | product image 2 begin-->
                        
                            <label class="col-md-3 control-label">Product foto 2</label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <input name="product_img2" type="file" class="form-control">
                            
                            </div>
                        
                        </div><!-- form 5 | product image 2 einde-->

                        <div class="form-group"><!-- form 6 | product image 3 begin-->
                        
                            <label class="col-md-3 control-label">Product foto 3</label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <input name="product_img3" type="file" class="form-control form-height-custom">
                            
                            </div>
                        
                        </div><!-- form 7 | product image 3 einde-->

                        <div class="form-group"><!-- form 8 | product prijs begin-->
                        
                            <label class="col-md-3 control-label">Product prijs</label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <input name="product_price" type="text" class="form-control" required>
                            
                            </div>
                        
                        </div><!-- form 8 | product prijs einde-->

                        <div class="form-group"><!-- form 9 | product keywords begin-->
                        
                            <label class="col-md-3 control-label">Product keywords</label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <input name="product_keywords" type="text" class="form-control" required>
                            
                            </div>
                        
                        </div><!-- form 9 | product keywords einde-->

                        <div class="form-group"><!-- form 10 | product omschrijving begin-->
                        
                            <label class="col-md-3 control-label">Product omschrijving</label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <textarea name="product_desc" cols="19" rows="16" class="form-control"></textarea>
                            
                            </div>
                        
                        </div><!-- form 10 | product omschrijving einde-->
                        
                        <div class="form-group"><!-- form 11 | submit begin-->
                        
                            <label class="col-md-3 control-label"></label><!-- Product title -->

                            <div class="col-md-6">
                            
                                <input name="submit" value="Producten toevoegen" type="submit" class="btn btn-primary form-control">
                            
                            </div>
                        
                        </div><!-- form 11 | submit einde-->
                        
                    </form>
                
                </div>

            </div>
        
        </div>
    
    </div><!-- row einde -->

    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>

<?php 

    if(isset($_POST['submit'])){

        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
        move_uploaded_file($temp_name3,"prsoduct_images/$product_img3");

        $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values 
        ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";

        $run_product = mysqli_query($con,$insert_product);

        if($run_product){
            echo "<script>alert('Product is succesvol toegevoegd')</script>";
            echo "<script>window.open('index.php?view_products','_self')</script>";
        }
    }

?>

<?php } ?>
