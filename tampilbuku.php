<?php
require "functions.php";
if (isset($_POST['submit'])) {
    insert1($_POST);
}
header("location:home1.php");
?>