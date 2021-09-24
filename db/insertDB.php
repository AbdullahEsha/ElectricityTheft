<?php
    session_start();
    require_once('../service/userService.php');
 
    if ( !empty($_REQUEST)) {
        // keep track post values
        $jsonText = $_REQUEST['myJSON'];
        $decodedText = html_entity_decode($jsonText);
        $arrayKey = json_decode($decodedText, true);
        
        
        // insert data
        $status = insertMain($arrayKey);
        // if($status){
        //     header('location: ../views/login.php');
        // }else{
        //     header('location: ../views/register.php');
        // }
    }
?>