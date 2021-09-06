<?php
require 'includes/header.php';
?>

        <div class="container containerx">
<!-- jumbotron -->
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                    have all in one place.</p>
            </div>
<!-- cameras -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/5.jpg">
                        <caption>
                            <center>
                            <h3>Cannon EOS</h3>
                            <p>Rs 36000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary"  name="submit" type="submit" value="canvas EOS"  >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='canon EOS'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/2.jpg">
                        <caption>
                            <center>
                            <h3>Nikon DSLR</h3>
                            <p>Rs 40000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit2" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit2'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Nikon DSLR'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];

                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                else {
                                    header("location: login.php");
                                }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/3.jpg">
                        <caption>
                            <center>
                            <h3>Sony DSLR</h3>
                            <p>Rs 50000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit3" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit3'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Sony DSLR'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/4.jpg">
                        <caption>
                            <center>
                            <h3>Olympus DSLR</h3>
                            <p>Rs 80000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit4" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit4'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Olympus DSLR'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
            </div>
<!-- watches -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/9.jpg">
                        <caption>
                            <center>
                            <h3>Titan Model #301</h3>
                            <p>Rs 36000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit5" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit5'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Titan Model #301'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/10.jpg">
                        <caption>
                            <center>
                            <h3>Titan Model #201</h3>
                            <p>Rs 40000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit6" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit6'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Titan Model #201'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/11.jpg">
                        <caption>
                            <center>
                            <h3>HMT Milan</h3>
                            <p>Rs 50000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit7" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit7'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='HMT Milan'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/12.jpg">
                        <caption>
                            <center>
                            <h3>Faber Luba #111</h3>
                            <p>Rs 80000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit8" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit8'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Faber Luba #111'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
            </div>
<!-- shirts -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/8.jpg">
                        <caption>
                            <center>
                            <h3>H&W</h3>
                            <p>Rs 36000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit9" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit9'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='H&W'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/6.jpg">
                        <caption>
                            <center>
                            <h3>Luis Phil</h3>
                            <p>Rs 40000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit10" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit10'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Luis Phil'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/13.jpg">
                        <caption>
                            <center>
                            <h3>John Zok</h3>
                            <p>Rs 50000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit11" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit11'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='John Zok'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class=" thumbnail">
                        <img class="img-responsive" src="img/14.jpg">
                        <caption>
                            <center>
                            <h3>Jhalsani</h3>
                            <p>Rs 80000.00 </p>
                            </center>
                            <form method="post" action="">
                            <button class="btn btn-block btn-primary" name="submit12" type="submit" >Add to cart</button>
                            </form>
                        </caption>
                        <?php if(isset($_POST['submit12'])) { 
                         if (isset($_SESSION['email'])) {
                                 $user_id = $_SESSION['id'];

                                 $select= "SELECT * FROM items WHERE name='Jhalsani'";
                                 $send_query = mysqli_query($conn,$select) or die(mysqli_error($conn));
                                 $success= mysqli_fetch_array( $send_query);
                                 $item_id= $success['id'];
                                 
                                 $select_2= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
                                 $send_query_2 = mysqli_query($conn,$select_2) or die(mysqli_error($conn));
                                 $success_2= mysqli_fetch_array( $send_query_2);
                                 if($success_2>0){
                                        echo ('<center class="alert alert-warning">'."item already added check your cart.".'</center>');
                                    }
                                    else {
                                        $insert= "INSERT INTO users_items( user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
                                        $send_query= mysqli_query($conn,$insert)  or die( mysqli_error($conn));
                                        echo ('<center class="alert alert-success">'."item added to cart.".'</center>');
                                    }
                                        }
                                 else {
                                    header("location: login.php");
                                 }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
 include 'includes/footer.php';

?>