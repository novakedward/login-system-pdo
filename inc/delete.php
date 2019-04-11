<?php
include('../config.php');

$user_id = $_GET["userid"];
$token =  $_GET["token"];

checkToken($token);

try {
    $stmt = $conn->prepare('UPDATE users SET image=? WHERE id=?');
    $stmt->execute(["", $user_id]);
    echo "Image Deleted";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
