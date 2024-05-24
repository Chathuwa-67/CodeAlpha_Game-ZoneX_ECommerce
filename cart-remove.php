<?php

require "includes/common.php";
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"];
    $user_id = $_SESSION['user_id'];

    
    $query = "DELETE FROM users_products WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query);
    header("location:cart.php");
}
?>
