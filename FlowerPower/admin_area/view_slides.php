<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Bekijk slides
                
            </li>
        </ol><!-- breadcrumb einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 1 einde -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> Bekijk slides
                
                </h3><!-- panel-title einde -->
            </div><!-- panel-heading einde -->
            
            <div class="panel-body"><!-- panel-body begin -->
            
                <?php 
                
                    $get_slides = "select * from slider";
        
                    $run_slides = mysqli_query($con,$get_slides);
        
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        
                        $slide_id = $row_slides['slide_id'];
                        
                        $slide_name = $row_slides['slide_name'];
                        
                        $slide_image = $row_slides['slide_image'];
                
                ?>
                
                <div class="col-lg-3 col-md-3"><!-- col-lg-3 col-md-3 begin -->
                    <div class="panel panel-primary"><!-- panel panel-primary begin -->
                        <div class="panel-heading"><!-- panel-heading begin -->
                            <h3 class="panel-title" align="center"><!-- panel-title begin -->
                            
                                <?php echo $slide_name; ?>
                                
                            </h3><!-- panel-title einde -->
                        </div><!-- panel-heading einde -->
                        
                        <div class="panel-body"><!-- panel-body begin -->
                            
                            <img src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_name; ?>" class="img-responsive">
                            
                        </div><!-- panel-body einde -->
                        
                        <div class="panel-footer"><!-- panel-footer begin -->
                            <center><!-- center begin -->
                                
                                <a href="index.php?delete_slide=<?php echo $slide_id; ?>" class="pull-right"><!-- pull-right begin -->
                                
                                 <i class="fa fa-trash"></i> Verwijder
                                
                                </a><!-- pull-right einde -->
                                
                                <a href="index.php?edit_slide=<?php echo $slide_id; ?>" class="pull-left"><!-- pull-left begin -->
                                
                                 <i class="fa fa-pencil"></i> Bewerk
                                
                                </a><!-- pull-left finish -->
                                
                                <div class="clearfix"></div>
                                
                            </center><!-- center einde -->
                        </div><!-- panel-footer einde -->
                        
                    </div><!-- panel panel-primary einde -->
                </div><!-- col-lg-3 col-md-3 einde -->
                
                <?php } ?>
            
            </div><!-- panel-body einde -->
            
        </div><!-- panel panel-default einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 2 einde -->


<?php } ?>