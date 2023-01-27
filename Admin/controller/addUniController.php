<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO universities
         (name) 
         VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?University=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?University=success");
         }
     
    }
        
?>