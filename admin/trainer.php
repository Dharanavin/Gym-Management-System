<?php
include('connection.php');
$isEdit = false;
$trainerName = "";
$trainerContact = "";
$trainerSpecialization = "";
$trainerImage = "";
$price = "";

if (isset($_GET['did'])) {
    $trainerId = $_GET['did'];
    mysqli_query($con, "DELETE FROM trainer_master WHERE trainerId='$trainerId'");
    header("location:trainer.php");
}


if (isset($_GET['eid'])) {
    $isEdit = true;
    $trainerId = $_GET['eid'];
    $fetchData = mysqli_query($con, "SELECT * FROM trainer_master WHERE trainerId='$trainerId'");
    if ($dataRow = mysqli_fetch_array($fetchData)) {
        $trainerName = $dataRow['trainerName'];
        $trainerContact = $dataRow['trainerContact'];
        $trainerSpecialization = $dataRow['trainerSpecialization'];
        $trainerImage = $dataRow['trainerImage'];
        $price = $dataRow['price'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Trainer Information</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/url.png' />">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php include("header.php"); ?>
            <form method="post" enctype="multipart/form-data">
                <div class="main-content">
                    <section class="section">
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4>Trainer Information</h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="trainerName" name="trainerName" value="<?php echo $trainerName; ?>">
                                                </div>
                                            </div>


                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" class="form-control" id="trainerContact" name="trainerContact" value="<?php echo $trainerContact; ?>">
                                                </div>
                                            </div>


                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Specialization</label><br>
                                                    <input type="text" class="form-control" id="trainerSpecialization" name="trainerSpecialization" value="<?php echo $trainerSpecialization; ?>"></>
                                                </div>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control" id="trainerImage" name="trainerImage">
                                                    <?php if ($isEdit && !empty($trainerImage)) { ?>
                                                        <br>
                                                        <img src="image/<?php echo $trainerImage; ?>" height="50px" width="50px">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Price</label><br>
                                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>"></>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                                                    <br>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        <?php
                                                        if ($isEdit) {
                                                            echo '<button type="submit" class="btn btn-warning" name="update">Update</button>';
                                                        } else {
                                                            echo '<button type="submit" class="btn btn-primary" name="submit">Submit</button>';
                                                        }
                                                        ?>
                                                    </div>


                                                </div>


                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php
                        if (isset($_POST['submit'])) {
                            $trainerName = $_POST['trainerName'];
                            $trainerContact = $_POST['trainerContact'];
                            $trainerSpecialization = $_POST['trainerSpecialization'];
                            $price = $_POST['price'];

                            $folder = "image/";
                            $trainerImage = $_FILES['trainerImage']['name'];
                            move_uploaded_file($_FILES["trainerImage"]["tmp_name"], $folder . $trainerImage);

                            $result = mysqli_query($con, "INSERT INTO trainer_master (trainerName, trainerContact, trainerSpecialization, trainerImage, price)  VALUES ('$trainerName', '$trainerContact', '$trainerSpecialization', '$trainerImage', '$price')");

                            if ($result) {
                                header("location:trainer.php");
                            } else {
                                echo "Submission Failed!";
                            }
                        }

                        if (isset($_POST['update'])) {
                            $trainerName = $_POST['trainerName'];
                            $trainerContact = $_POST['trainerContact'];
                            $trainerSpecialization = $_POST['trainerSpecialization'];
                            $price = $_POST['price'];

                            $folder = "image/";
                            $newImage = $_FILES['trainerImage']['name'];

                            if (!empty($newImage)) {
                                move_uploaded_file($_FILES["trainerImage"]["tmp_name"], $folder . $newImage);
                                $result = mysqli_query($con, "UPDATE trainer_master SET trainerName='$trainerName', trainerContact='$trainerContact', trainerSpecialization='$trainerSpecialization', trainerImage='$newImage', price='$price' WHERE trainerId='$trainerId'");
                            } else {
                                $result = mysqli_query($con, "UPDATE trainer_master SET trainerName='$trainerName', trainerContact='$trainerContact', trainerSpecialization='$trainerSpecialization', price='$price' WHERE trainerId='$trainerId'");
                            }

                            if ($result) {
                                header("location:trainer.php");
                            } else {
                                echo "Update Failed!";
                            }
                        }
                        ?>
                        <div class="card">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Specialization</th>
                                                    <th>Image</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php
                                                $count = 1;
                                                $getData = mysqli_query($con, "SELECT * FROM trainer_master");
                                                while ($row = mysqli_fetch_array($getData)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count++ ?></td>
                                                        <td><?php echo $row['trainerName']; ?></td>
                                                        <td><?php echo $row['trainerContact']; ?></td>
                                                        <td><?php echo $row['trainerSpecialization']; ?></td>

                                                        <td>
                                                            <img src="image/<?php echo $row['trainerImage']; ?>" height="50px" width="50px" class="img-responsive">
                                                        </td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td>
                                                            <a class="btn btn-xs btn btn-outline-success glyphicon glyphicon-pencil" href="?eid=<?php echo $row['trainerId']; ?>"></a>

                                                            <a class="btn btn-xs btn-outline-danger glyphicon glyphicon-trash" href="?did=<?php echo $row['trainerId']; ?>" onclick="return confirm('Are you sure?')"></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>



    </div>





    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>



</body>