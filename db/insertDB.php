<?php
     
    require 'db.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $curr1 = $_POST['curr1'];
        $curr2 = $_POST['curr2'];
        $time = $_POST['time'];
        
        
        // insert data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO etds (curr1,curr2,time) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($soil_moisture,$solenoid,$humid));
        Database::disconnect();
        header("Location: user data.php");
    }
?>