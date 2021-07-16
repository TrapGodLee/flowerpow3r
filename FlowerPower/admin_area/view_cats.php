<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Bekijk categorieën
                
            </li>
        </ol><!-- breadcrumb einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 1 einde -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> Bekijk categorieën
                
                </h3><!-- panel-title einde -->
            </div><!-- panel-heading einde -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Categorie ID </th>
                                <th> Categorie naam </th>
                                <th> Categorie omschrijving </th>
                                <th> Bewerk categorie </th>
                                <th> Verwijder categorie </th>
                            </tr><!-- tr einde -->
                        </thead><!-- thead einde -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_cats = "select * from categories";
          
                                $run_cats = mysqli_query($con,$get_cats);
          
                                while($row_cats=mysqli_fetch_array($run_cats)){
                                    
                                    $cat_id = $row_cats['cat_id'];
                                    
                                    $cat_title = $row_cats['cat_title'];
                                    
                                    $cat_desc = $row_cats['cat_desc'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $cat_title; ?> </td>
                                <td width="300"> <?php echo $cat_desc; ?> </td>
                                <td> 
                                    <a href="index.php?edit_cat= <?php echo $cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> Bewerk
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_cat= <?php echo $cat_id; ?> ">
                                        <i class="fa fa-trash"></i> Verwijder
                                    </a>
                                </td>
                            </tr><!-- tr einde -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody einde -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered einde -->
                </div><!-- table-responsive einde -->
            </div><!-- panel-body einde -->
            
        </div><!-- panel panel-default einde -->
    </div><!-- col-lg-12 einde -->
</div><!-- row 2 einde -->


<?php } ?>