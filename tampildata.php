<?php
require "functions.php";
if (isset($_POST['submit'])) {
    insert($_POST);
}
header("location:home.php");
?>