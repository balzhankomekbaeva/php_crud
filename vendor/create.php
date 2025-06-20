<?php
require_once '../config/connect.php';

$title = mysqli_real_escape_string($connect, $_POST['title']);
$description = mysqli_real_escape_string($connect, $_POST['description']);
$price = mysqli_real_escape_string($connect, $_POST['price']);

mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");

header('Location: ../index.php');
exit();
