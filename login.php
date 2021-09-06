<?php
require 'includes/header.php';
if($_SERVER["REQUEST_METHOD"]== "POST")
 {
    $email= $_POST['email'];
    $password= $_POST['password'];
   $select= "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $send_query= mysqli_query($conn,$select)  or die( mysqli_error($conn));
    $success= mysqli_fetch_array($send_query);
    if($success>0){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['name'] = $success['name'];
        $_SESSION['id'] = $success['id'];
        header("location: home.php");
    }
    else{
        echo '<center><h5 class="alert alert-warning""">'."invalid login criendals".'</h5></center>';
    };
 }
?>
        <!-- Login-form -->
        
        <div class="container panels">
            <h1>Login</h1>
            <form  method="POST" action="">
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" class="form-control input-lg">
                </div>
                <button class="bn btn-primary btn-lg" name="submit">Login</button>
            </form>
</div>
<?php
include 'includes/footer.php';
 
?>

