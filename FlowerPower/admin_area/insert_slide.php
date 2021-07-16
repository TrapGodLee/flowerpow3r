<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Voeg slide toe
                
            </li>
        </ol><!-- breadcrumb einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 1 einde -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Voeg slide toe
                
                </h3><!-- panel-title einde -->
            </div><!-- panel-heading einde -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Slide Naam
                        
                        </label><!-- control-label col-md-3 einde --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="slide_name" type="text" class="form-control">
                        
                        </div><!-- col-md-6 einde -->
                    
                    </div><!-- form-group einde -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Slide foto
                        
                        </label><!-- control-label col-md-3 einde --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="file" name="slide_image" class="form-control">
                        
                        </div><!-- col-md-6 einde -->
                    
                    </div><!-- form-group einde -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 einde --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="submit" value="Bevestig" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 einde -->
                    
                    </div><!-- form-group einde -->
                </form><!-- form-horizontal einde -->
            </div><!-- panel-body einde -->
            
        </div><!-- panel panel-default einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 2 einde -->

<?php  

    if(isset($_POST['submit'])){
        
        $slide_name = $_POST['slide_name'];
        
        $slide_image = $_FILES['slide_image']['name'];
        
        $temp_name = $_FILES['slide_image']['tmp_name'];
        
        $view_slides = "select * from slider";
        
        $view_run_slide = mysqli_query($con,$view_slides);
        
        $count = mysqli_num_rows($view_run_slide);
        
        if($count<4){
            
            move_uploaded_file($temp_name,"slides_images/$slide_image");
            
            $insert_slide = "insert into slider (slide_name,slide_image) values ('$slide_name','$slide_image')";
            
            $run_slide = mysqli_query($con,$insert_slide);
            
            echo "<script>alert('Jouw nieuwe slide is succesvol toegevoegd')</script>";
            
            echo "<script>window.open('index.php?view_slides','_self')</script>";
            
        }else{
            
           echo "<script>alert('U heeft al 4 slides, verwijder 1 of meer op plek vrij te maken, om een nieuwe slideindetevoegen')</script>"; 
            
        }
        
    }

?>

<?php } ?>