<?php
require "functions.php";
if (isset($_POST['update'])) {
    update1($_POST);
}
header("location:home1.php");
?>