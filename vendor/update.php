<?php
require_once '../config/connect.php';

$id = mysqli_real_escape_string($connect, $_POST['id']);
$title = mysqli_real_escape_string($connect, $_POST['title']);
$price = mysqli_real_escape_string($connect, $_POST['price']);
$description = mysqli_real_escape_string($connect, $_POST['description']);

mysqli_query($connect,"UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `products`.`id` = '$id'");

header('Location: ../index.php');

