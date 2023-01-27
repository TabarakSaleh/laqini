<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM fields where field_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Field Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>