<?php

include_once 'includes/cheking-avatar.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- jquery cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- js -->
        <script src="js/chek-void-area.js" type="text/javascript"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

        <title>Registration page</title>

        <style>
            h1{
                margin:15px 0;
            }
            #errors{
                width: 100%;
                height:60px;
                padding-top: 15px;
            }
        </style>
    </head>
    <body>
        <?php if (isset($_POST['btn'])): ?><!------alternative syntax------->
            <?= $msg; ?><!-----echo $msg------>
        <?php else: ?>
            <div id ='insertErorr'></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1>Welcome here! Pls sign in:</h1>
                </div>
            </div>
            <form method="POST" enctype="multipart/form-data" novalidate action= "register.php">

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input name='login' id='login' type="text" class="form-control"  placeholder="Login">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input name='pass' id='pass' type="password" class="form-control"  placeholder="Password">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="conf">Password Confirm</label>
                            <input name='conf' id='conf' type="password" class="form-control"  placeholder="Password Confirm">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name='email' id='email' type="email" class="form-control"  placeholder="Email">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="avatar">Upload an avatar</label>
                            <input id='avatar'  name="avatar" accept="'image/pgpg',image/png,image/gif,image/jpeg" type="file" class="form-control-file">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <input type="submit" id= 'btn' class="btn btn-primary" value= 'Sign in' name='btn' >
                    </div> 
            </form>
        <?php endif; ?><!------end of alternative syntax------->
    </body>
</html>
