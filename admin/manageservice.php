<?php
include('connection.php');
$isEdit = false;
$name = "";
$description = "";
$price = "";

if (isset($_GET['did'])) {
    $serviceId = $_GET['did'];
    mysqli_query($con, "DELETE FROM service_master WHERE serviceId='$serviceId'");
    header("location:manageservice.php");
}

if (isset($_GET['eid'])) {
    $isEdit = true;
    $serviceId = $_GET['eid'];
    $fetchData = mysqli_query($con, "SELECT * FROM service_master WHERE serviceId='$serviceId'");
    if ($dataRow = mysqli_fetch_array($fetchData)) {
        $name = $dataRow['serviceName'];
        $img = $dataRow['serviceImage'];
        $description = $dataRow['serviceDescription'];
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
    <title>Service Information</title>
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
                                            <h4>Service</h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label for="address">Image</label>
                                                    <input type="file" class="form-control" id="img" name="img">
                                                    <?php if ($isEdit && !empty($name)) { ?>
                                                        <br>
                                                        <img src="image/<?php echo $dataRow['serviceImage']; ?>" height="50px" width="50px">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
                                                <div class="form-group">
                                                    <label>Description</label><br>
                                                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>">
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Price</label><br>
                                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2" style="margin-top: 27px;">
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
                        <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $description = $_POST['description'];
                            $price = $_POST['price'];
                            $folder = "image/";
                            $img = $_FILES['img']['name'];
                            move_uploaded_file($_FILES["img"]["tmp_name"], $folder . $img);

                            $result = mysqli_query($con, "INSERT INTO service_master (serviceName, serviceImage, serviceDescription, price) VALUES ('$name', '$img', '$description', '$price')");

                            if ($result) {
                                header("location:manageservice.php");
                            } else {
                                echo "Submission Failed!";
                            }
                        }

                        if (isset($_POST['update'])) {
                            $name = $_POST['name'];
                            $description = $_POST['description'];
                            $price = $_POST['price'];
                            // $serviceId = $_GET['eid'];

                            $folder = "image/";
                            $img = $_FILES['img']['name'];

                            if (!empty($img)) {
                                move_uploaded_file($_FILES["img"]["tmp_name"], $folder . $img);
                                $result = mysqli_query($con, "UPDATE service_master SET serviceName='$name', serviceImage='$img', serviceDescription='$description', price='$price'  WHERE serviceId='$serviceId'");
                            } else {
                                $result = mysqli_query($con, "UPDATE service_master SET serviceName='$name', serviceDescription='$description', price='$price' WHERE serviceId='$serviceId'");
                            }

                            if ($result) {
                                header("location:manageservice.php");
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
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php
                                                $count = 1;
                                                $getData = mysqli_query($con, "SELECT * FROM service_master");
                                                while ($row = mysqli_fetch_array($getData)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count++ ?></td>
                                                        <td><?php echo $row['serviceName']; ?></td>
                                                        <td><img src="image/<?php echo $row['serviceImage']; ?>" alt="" height="50px" width="50px" class="img img-responsive"></td>
                                                        <td><?php echo $row['serviceDescription']; ?></td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td>
                                                            <a class="btn btn-xs btn-info glyphicon glyphicon-pencil" href="?eid=<?php echo $row['serviceId']; ?>"></a>

                                                            <a class="btn btn-xs btn-danger glyphicon glyphicon-trash" href="?did=<?php echo $row['serviceId']; ?>" onclick="return confirm('Are you sure?')"></a>
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