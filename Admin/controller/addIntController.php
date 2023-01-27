<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['s_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO interests
         (interest_name) 
         VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?Interest=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?Interest=success");

         }
     
    }
        
?>