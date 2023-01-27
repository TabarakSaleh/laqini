<?php

    include_once "../config/dbconnect.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM universities where id='$c_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"University Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>