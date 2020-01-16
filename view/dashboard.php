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
    <h4 class="text-center">Email address saver CRUD application</h4>
    <br>
    <form action="<?php echo $config['base_url'];?>controller/email.php" method="post">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <input type="text" name="fullname" class="form-control" placeholder="Full name" required autofocus>
            </div>
            <div class="col-md-3">
                <input type="text" name="email" class="form-control" placeholder="email@address" required autofocus>
            </div>
            <div class="col-md-2">
                <button class="btn btn-warning btn-block" type="submit">Save</button>
            </div>
        </div>
    </form>
    <br>
    <h4 class="text-center text-success"><?php echo temp_session_show('email_saved')?></h4>
</div>



<?php include 'footer.php';?>