<?php

    include_once "../config/dbconnect.php";

    $c_id=$_POST['record'];
    $query="DELETE FROM interests where interest_id='$c_id'";

    $data=mysqli_query($conn,$query);
    if($data){
        echo"Interest Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>