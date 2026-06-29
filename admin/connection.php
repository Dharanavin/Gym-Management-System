<?php
ob_start();
session_start();
error_reporting(E_PARSE);
$con = mysqli_connect("localhost", "root", "", "gym", 3308);

