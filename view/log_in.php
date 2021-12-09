<?php 
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/auth/login.php');
?>

<div class="container">
    <div class=bodyframe>
        <main id="content">
            <div id="login">
            <h2 class="text-center">Login</h2>
                <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="form-group">
                            <label for="username" class="text">Username:</label><br>
                            <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="password" class="text">Password:</label><br>
                            <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-md" value="Submit">
                            <input type="reset" name="reset" class="btn btn-light btn-md" value="Reset">
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </main>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/footer.php')?>