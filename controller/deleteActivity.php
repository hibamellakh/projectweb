<?php

    include_once "../config.php";
     $ID_ACT = $_GET['id_act'];
    mysqli_query($con,"DELETE FROM activity WHERE id_act = $ID_ACT" );
   
    
      header('location: showActivity.php');
    
?>
