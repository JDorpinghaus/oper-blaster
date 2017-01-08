<?php
    require_once('db_login.php');
    
    $restaurant_id = $_REQUEST['id'];
    $sql = "SELECT * FROM restaurants WHERE restaurant_id=" . $restaurant_id;
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $restaurant_name = $row['restaurant_name'];
?>

<?php include('templates/view.html') ?>

