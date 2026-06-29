
<?php
setcookie("userId", "", time() - 3600, "/");
setcookie("userName", "", time() - 3600, "/");
header("location:index.php");
?>