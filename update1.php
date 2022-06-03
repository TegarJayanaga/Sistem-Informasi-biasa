<?php
require "functions.php";
if (isset($_POST['update'])) {
    update($_POST);
}
header("location:home.php");
?>