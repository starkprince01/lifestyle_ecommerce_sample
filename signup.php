<?php
require 'includes/header.php';
if($_SERVER["REQUEST_METHOD"]== "POST")
            {
                    $alert= false;
                    $name= $_POST['name'];
                    $email= $_POST['email'];
                    $password= $_POST['password'];
                    $cpassword= $_POST['cpassword'];
                    $contact= $_POST['contact'];
                    $city= $_POST['city'];
                    $address= $_POST['address'];
                $select= "SELECT email FROM users WHERE email='$email'";
                $send_query= mysqli_query($conn,$select)  or die( mysqli_error($conn));
                $exist= mysqli_fetch_array($send_query);
                if($exist>0){
                    echo '<center><h5 class="alert alert-danger""">'."Email id is already registered.".'</h5></center>';
                }
                else{
                    if($password == $cpassword){
                        $insert= "INSERT INTO users( name, email, password, contact, city, address) VALUES ('$name','$email','$password','$contact','$city','$address')";
                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                        echo '<center><h5 class="alert alert-success""">'."Now you can login to proceed".'</h5></center>';
                    } 
                    else{
                        echo '<center><h5 class="alert alert-danger ">'."password not matched".'</h5></center>';
                    }
             }
               
            }
?>
 <!-- sign up-form -->
        <div class="container panels">
            <h1>Sign Up</h1>
            <form  method="POST" action="">
                 <div class="form-group">
                    <input type="text" placeholder="Name" name="name" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="comfirm Password" name="cpassword" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="number" placeholder="Contact" name="contact" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="City" name="city" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Address" name="address" class="form-control input-lg">
                </div>
                <button class="bn btn-primary btn-lg" name="submit">Submit</button>
            </form>  
</div>
<?php


            include 'includes/footer.php';
?> 
         