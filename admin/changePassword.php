<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4"></div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" style="margin-top: 130px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="oldpass">Old Password:</label>
                            <input type="password" class="form-control" id="oldpass" name="oldpass">
                        </div>
                        <div class="form-group">
                            <label for="newpass">New Password:</label>
                            <input type="password" class="form-control" id="newpass" name="newpass">
                        </div>
                        <div class="form-group">
                            <label for="confirmpass">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmpass" name="confirmpass">
                        </div>
                        <button type="submit" class="btn btn-success pull-right" id="changepassword" name="changepassword">Change Password</button>
                    </form>
                    <?php
                    if (isset($_POST['changepassword'])) {
                        $oldpass = $_POST['oldpass'];
                        $newpass = $_POST['newpass'];
                        $confirmpass = $_POST['confirmpass'];

                        $selectpass = mysqli_query($con, "SELECT adminPassword FROM admin_master WHERE adminPassword='$oldpass' AND adminId='" . $_COOKIE['userId'] . "'");
                        $chakpass = mysqli_fetch_array($selectpass);
                        if ($chakpass > 0) {
                            if ($newpass == $confirmpass) {
                                $updatepass = mysqli_query($con, "UPDATE admin_master SET adminPassword='$newpass' WHERE adminId='" . $_COOKIE['userId'] . "'");

                                if ($updatepass) {
                                    header("location:logout.php");
                                } else {
                                    echo "failed";
                                }
                            } else {
                                echo "password not match";
                            }
                        } else {
                            echo "old password is wrong";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4"></div>
    </div>

</body>

</html>