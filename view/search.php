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

<h3 class="text-success text-center">Search as: <?php echo per_session_show('user');?></h3>

<div class="container">
    <h4 class="text-center">Search email address</h4>
    <br>
    <form action="<?php echo $config['base_url'];?>controller/emailsearch.php" method="get">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <input type="text" name="searchname" class="form-control" placeholder="Search" required autofocus>
            </div>
            <div class="col-md-2">
                <button class="btn btn-warning btn-block" type="submit">Search</button>
            </div>
        </div>
    </form>
    <br>
    <h4 class="text-center text-success"><?php echo temp_session_show('email_saved')?></h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        if(per_session_check('email_search')==1){
                            $r=per_session_show('email_search');
                            foreach($r as $a){
                                echo '<tr>';
                                echo '<td>'.$a['fullname'].'</td>';
                                echo '<td>'.$a['email'].'</td>';
                                echo '<td>'.'<a href="'.$config['base_url'].'controller/updateEmailGetId.php?id='.$a['id'].'" class="btn btn-primary btn-sm">update</a>'.'</td>';
                                echo '<td>'.'<a href="'.$config['base_url'].'controller/deleteEmail.php?id='.$a['id'].'" class="btn btn-danger btn-sm">delete</a>'.'</td>';
                                echo '</tr>';
                            }
                        }
                        
                        if(per_session_check('email_search')==1){
                            per_session_unset('email_search');
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php include 'footer.php';?>