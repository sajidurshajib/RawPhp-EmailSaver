<?php include '../config.php'; ?>
<?php include '../helper/basic.php';?>
<?php include '../system/session.php'; ?>
<?php include 'header.php';?>
<?php
    if(per_session_check("user")==""){
        redirect($config['base_url']);
    }
?>
    
<?php include 'menu.php';?>
    
<br><br><br>
    
<h3 class="text-success text-center">Update as: <?php echo per_session_show('user');?></h3>

<div class="container">
    <br>
    <form action="<?php echo $config['base_url'];?>controller/updateEmail.php" method="post">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <input type="text" name="update-fullname" class="form-control" placeholder="New name" required autofocus>
            </div>
            <div class="col-md-3">
                <input type="text" name="update-email" class="form-control" placeholder="newEmail@address" required autofocus>
            </div>
            <div class="col-md-2">
                <button class="btn btn-warning btn-block" type="submit">Update</button>
            </div>
        </div>
    </form>
    <br>
</div>
<?php include 'footer.php';?>