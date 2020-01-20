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

<h3 class="text-success text-center">User: <?php echo per_session_show('user');?></h3>






<div class="container">
    <br>
    <form action="<?php echo $config['base_url'];?>controller/password.php" method="post">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <input type="password" name="op" class="form-control" placeholder="Old password" required autofocus>
            </div>
            <div class="col-md-3">
                <input type="password" name="np" class="form-control" placeholder="new password" required autofocus>
            </div>
            <div class="col-md-2">
                <button class="btn btn-warning btn-block" type="submit">Update</button>
            </div>
        </div>
    </form>
    <br>
</div>

<h4 class="text-center text-success"><?php echo temp_session_show('p_up');?></h4>

<?php include 'footer.php';?>