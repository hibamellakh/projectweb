<?php
// $_GET array is then used to retrieve the id 
$id_category = $_GET['id'];
// Include the configuration file containing database connection settings
include_once "../config.php";
// SQL query deletes the activity with the given ID
$sql = "DELETE FROM category where id_category = $id_category";
if (mysqli_query($con, $sql)){
     // If the deletion is successful, redirect to the page showing activities with a success message
    header("location:showCategory.php?message=DeleteSuccess");
}
else{
    header("location:showCategory.php?message=DeleteFailed");
}
?> 
