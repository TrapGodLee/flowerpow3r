<h1 align="center">Verander wachtwoord</h1>

<form action="" method="post"><!-- form begin -->

    <div class="form-group"><!-- form-group begin -->
    
    <label > Jouw oude wachtwoord: </label>

    <input type="text" name="old_pass" class="form-control" required>
    
    </div><!-- form-group einde -->

    <div class="form-group"><!-- form-group begin -->
    
    <label > Jouw nieuwe wachtwoord: </label>

    <input type="text" name="new_pass" class="form-control" required>
    
    </div><!-- form-group einde -->

    <div class="form-group"><!-- form-group begin -->
    
    <label > Bevestig jouw nieuwe wachtwoord: </label>

    <input type="text" name="new_pass_again" class="form-control" required>
    
    </div><!-- form-group einde -->

    <div class="text-center"><!-- text center begin -->
    
        <button type="submit" name="submit" class="btn btn-primary">
        
            <i class="fa fa-user-md"></i> Update

        </button>

    </div><!-- text center einde -->

</form><!-- form einde -->


<?php 

if(isset($_POST['submit'])){
    
    $c_email = $_SESSION['customer_email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass'];
    
    $c_new_pass_again = $_POST['new_pass_again'];
    
    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";
    
    $run_c_old_pass = mysqli_query($con,$sel_c_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_c_old_pass==0){
        
        echo "<script>alert('Sorry, Jouw huidige wachtwoord is niet juist. Probeer het opnieuw')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('Sorry, Jouw nieuwe wachtwoord komt niet overeen')</script>";
        
        exit();
        
    }
    
    $update_c_pass = "update customers set customer_pass='$c_new_pass' where customer_email='$c_email'";
    
    $run_c_pass = mysqli_query($con,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Jouw wachtwoord is succesvol veranderd')</script>";
        
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }
    
}

?>