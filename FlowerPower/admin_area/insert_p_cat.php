<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Product categorie invoeren
                
            </li>
        </ol><!-- breadcrumb einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 1 einde -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Product categorie invoeren
                
                </h3><!-- panel-title einde -->
            </div><!-- panel-heading einde -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product categorie naam
                        
                        </label><!-- control-label col-md-3 einde --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="p_cat_title" type="text" class="form-control">
                        
                        </div><!-- col-md-6 einde -->
                    
                    </div><!-- form-group einde -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product categorie omschrijving
                        
                        </label><!-- control-label col-md-3 einde --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="p_cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>
                        
                        </div><!-- col-md-6 einde -->
                    
                    </div><!-- form-group einde -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 einde --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Submit" name="submit" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 einde -->
                    
                    </div><!-- form-group einde -->
                </form><!-- form-horizontal einde -->
            </div><!-- panel-body einde -->
            
        </div><!-- panel panel-default einde -->
    </div><!-- col-lg-12  -->
</div><!-- row 2  -->

<?php  

          if(isset($_POST['submit'])){
              
              $p_cat_title = $_POST['p_cat_title'];
              
              $p_cat_desc = $_POST['p_cat_desc'];
              
              $insert_p_cat = "insert into product_categories (p_cat_title,p_cat_desc) values ('$p_cat_title','$p_cat_desc')";
              
              $run_p_cat = mysqli_query($con,$insert_p_cat);
              
              if($run_p_cat){
                  
                  echo "<script>alert('Er is een nieuwe product categorie is toegevoegd')</script>";
                  
                  echo "<script>window.open('index.php?view_p_cats','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 