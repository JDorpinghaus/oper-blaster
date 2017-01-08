<?php
    require_once('db_login.php');
    
    if (!empty($_POST)) {
        $new_restaurant = $_REQUEST['new_restaurant'];
        $phone_number = $_REQUEST['phone_number'];
        $restaurant_name = $_REQUEST['restaurant_name'];
        $contact_name = $_REQUEST['contact_name'];
        $submit_time = date("Y-m-d H:i:s");
        
        if ($new_restaurant == '1'){
            $sql  = "INSERT INTO restaurants (restaurant_name, phone_number, contact_name, create_time) VALUES ('" . $restaurant_name . "', '" . $phone_number . "', '" . $contact_name . "', '" . $submit_time . "')";
            
            if($db->query($sql) == TRUE){
                echo("success");
            } else {
                echo($db->error);
            }
        }
    }
?>

<?php include("templates/add_ui.html"); ?>

