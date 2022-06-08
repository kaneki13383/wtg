<?php

require './connect.php';

$email = $_POST['email'];

$sql = $connect->query("INSERT INTO `subscribe` (`email`) VALUES ('$email');");
header("Location: ../index.php");