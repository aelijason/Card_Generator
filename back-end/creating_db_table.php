<?php 


    $db_table = "CREATE TABLE IF NOT EXISTS " . $db_table_name. "(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL, 
        email VARCHAR(200) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    if($conn->query($db_table) === TRUE){
        $success = "Table ". $db_table_name . " Created Successfully!";
    }else{
        $success = 'Error Creating Table: '. $conn->error;
    }

?>