<?php include '../config.php'; ?>
<?php include '../helper/basic.php';?>
<?php include '../system/session.php'; ?>
<?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
        <h3 class="text-danger"><?php echo temp_session_show('user_exist');?></h3>
        <form class="form-signin" style="margin-top:100px" action="<?php echo $config['base_url'];?>controller/register.php" method="post">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign up first</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" name="signup-u" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="signup-p" class="form-control" placeholder="Password" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Signup</button>
            <p class="mt-5 mb-3 text-muted"><a href="<?php echo $config['base_url']?>"><< Home</a></p>
            </form>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>