<?php
require 'includes/header.php';
if (isset($_SESSION['email'])) {
    $user_id = $_SESSION['id'];
    $select_query= "SELECT  * FROM users_items where user_id = '$user_id'";
    $send_query = mysqli_query($conn,$select_query) or die(mysqli_error($conn));
   
   

   
    
    ?>
    
        <!--table start-->
        <div class="container panelL table-responsive">
            <table class="table">
                <tr>
                    <td>Item Name</td>
                    <td>Price</td>
                    <td>Status</td>
                </tr>
                <?php 
                $total = 0;
                while( $success= mysqli_fetch_array( $send_query)){
                     $item_id= $success['item_id'];
                     $status = $success['status'];
                     $select_query_2= "SELECT  * FROM items where id = '$item_id'";
                     $send_query_2 = mysqli_query($conn,$select_query_2) or die(mysqli_error($conn));
                     
                     while($row= mysqli_fetch_array( $send_query_2)){
                    ?>
                        <tr>
                            <td><?php echo $row['name'];?></td>
                             <td><?php echo "Rs ". $row['price'];?></td>
                             <td><?php echo $status;?></td>
                             <?php $total= $total+$row['price'];?>
                        </tr>
                        <?php }} ?>
                <tr>
                    <td>Total</td>
                    <td><?php echo "Rs ". $total;?></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><A href="success.php"><button class=" btn btn-primary btn-lg ">Confirm Order</button></A></td>
                </tr>
            </table>
        </div>
        <?php
        }
        else {
            header("location: login.php");
        }
            include 'includes/footer.php';
            ?>