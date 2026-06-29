<?php
include('connection.php');
$isEdit = false;
$scheduleDay = "";
$scheduleTime = "";
$serviceName = "";
$trainerName = "";


if (isset($_GET['did'])) {
    $scheduleId = $_GET['did'];
    mysqli_query($con, "DELETE FROM schedule_master WHERE scheduleId='$scheduleId'");
    header("location:schedule.php");
}


if (isset($_GET['eid'])) {
    $isEdit = true;
    $scheduleId = $_GET['eid'];
    $fetchData = mysqli_query($con, "SELECT * FROM schedule_master WHERE scheduleId='$scheduleId'");
    if ($dataRow = mysqli_fetch_array($fetchData)) {
        $scheduleDay = $dataRow['scheduleDay'];
        $scheduleTime = $dataRow['scheduleTime'];
        $serviceName = $dataRow['serviceName'];
        $trainerName = $dataRow['trainerName'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Schedule Details</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/url.png' />">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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
                                            <h4>Schedule</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <div class="form-group">
                                                        <label>Day</label>
                                                        <input type="text" class="form-control" id="scheduleDay"
                                                            name="scheduleDay" value="<?php echo $scheduleDay; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <input type="text" class="form-control" id="scheduleTime"
                                                            name="scheduleTime" value="<?php echo $scheduleTime; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <div class="form-group">
                                                        <label>Services</label>
                                                        <select class="form-control" id="serviceName" name="serviceName">
                                                            <option value="">Select service</option>
                                                            <?php
                                                            $getservice = mysqli_query($con, "SELECT * FROM service_master");
                                                            while ($serviceRow = mysqli_fetch_array($getservice)) {
                                                            ?>
                                                                <option value="<?php echo $serviceRow['serviceName']; ?>"
                                                                    <?php if ($serviceName == $serviceRow['serviceName']) {
                                                                        echo "selected";
                                                                    } ?>>
                                                                    <?php echo $serviceRow['serviceName']; ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <div class="form-group">
                                                        <label>Trainers</label>
                                                        <select class="form-control" id="trainerName" name="trainerName">
                                                            <option value="">Select trainer</option>
                                                            <?php
                                                            $gettrainer = mysqli_query($con, "SELECT * FROM trainer_master");
                                                            while ($trainerRow = mysqli_fetch_array($gettrainer)) {
                                                            ?>
                                                                <option value="<?php echo $trainerRow['trainerName']; ?>"
                                                                    <?php if ($trainerName == $trainerRow['trainerName']) {
                                                                        echo "selected";
                                                                    } ?>>
                                                                    <?php echo $trainerRow['trainerName']; ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <br> <?php
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
                            $scheduleDay = $_POST['scheduleDay'];
                            $scheduleTime = $_POST['scheduleTime'];
                            $serviceName = $_POST['serviceName'];
                            $trainerName = $_POST['trainerName'];


                            $result = mysqli_query($con, "INSERT INTO schedule_master (scheduleDay, scheduleTime,serviceName,trainerName)  VALUES ('$scheduleDay', '$scheduleTime','$serviceName', '$trainerName')");

                            if ($result) {
                                header("location:schedule.php");
                            } else {
                                echo "Submission Failed!";
                            }
                        }

                        if (isset($_POST['update'])) {
                            $scheduleDay = $_POST['scheduleDay'];
                            $scheduleTime = $_POST['scheduleTime'];
                            $serviceName = $_POST['serviceName'];
                            $trainerName = $_POST['trainerName'];

                            $result = mysqli_query($con, "UPDATE schedule_master SET scheduleDay='$scheduleDay', scheduleTime='$scheduleTime' , serviceName='$serviceName' ,trainerName='$trainerName' WHERE scheduleId='$scheduleId'");


                            if ($result) {
                                header("location:schedule.php");
                            } else {
                                echo "Update Failed!";
                            }
                        }
                        ?>
                        <div class="card ">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Day</th>
                                                    <th>Time</th>
                                                    <th>Service </th>
                                                    <th>Trainer </th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php
                                                $count = 1;
                                                $getData = mysqli_query($con, "SELECT se.serviceName,tm.trainerName,sc.* FROM schedule_master sc,service_master se,trainer_master tm WHERE sc.serviceName=se.serviceName AND sc.trainerName=tm.trainerName");
                                                while ($row = mysqli_fetch_array($getData)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count++ ?></td>
                                                        <td><?php echo $row['scheduleDay']; ?></td>
                                                        <td><?php echo $row['scheduleTime']; ?></td>
                                                        <td><?php echo $row['serviceName']; ?></td>
                                                        <td><?php echo $row['trainerName']; ?></td>

                                                        <td>
                                                            <a class="btn btn-xs btn-info"
                                                                href="?eid=<?php echo $row['scheduleId']; ?>">Edit</a>

                                                            <a class="btn btn-xs btn-danger"
                                                                href="?did=<?php echo $row['scheduleId']; ?>"
                                                                onclick="return confirm('Are you sure?')">Delete</a>
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