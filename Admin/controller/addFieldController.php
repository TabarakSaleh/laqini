<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $size = $_POST['field'];
       
         $insert = mysqli_query($conn,"INSERT INTO fields
         (field_name)   VALUES ('$size')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?field=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?field=success");
         }
     
    }
        
?>