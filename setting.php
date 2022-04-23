<?php
require 'includes/header.php';
?>
        <!--change password form-->
        <div class="container panelL">
            <h1>Change Password</h1>
            <form>
                <div class="form-group">
                    <input type="password" placeholder="Old Password" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="New Password" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Re-type New Password" class="form-control input-lg">
                </div>
                <button class="bn btn-primary btn-lg">Change</button>
            </form>
            
</div>

<?php
include 'includes/footer.php';
?>