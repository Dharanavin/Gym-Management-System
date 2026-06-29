<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="card" style="margin-top: 120px;">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <form method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Contact No</label>
                                <input type="text" class="form-control" id="contact" name="contact">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit" id="submit" name="submit">Login</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {

                        $contact = $_POST['contact'];
                        $password = $_POST['password'];

                        $sql = mysqli_query($con, "SELECT * FROM admin_master WHERE adminContact='$contact' AND adminPassword='$password'");
                        $row = mysqli_fetch_array($sql);
                        $adminId = $row['adminId'];
                        $adminName = $row['adminName'];
                        if ($adminId > 0) {
                            setcookie("userId",  $adminId, time() + (86400 * 2), "/");
                            setcookie("userName",  $adminName, time() + (86400 * 2), "/");
                            header('location: home.php');
                        } else {
                            echo "invalid contact or password";
                        }
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</body>