﻿
<?php include "dbconnection.php"; ?>
<?php
                $name=$_POST['name'];
           $dob=$_POST['dob'];
             $gender=$_POST['gender'];
             $occupation=$_POST['occupation'];
$ps=$_POST['ps'];
$income=$_POST['income'];
global $connection;
               if(isset($_POST['submit']))
            {
                $q="INSERT INTO student(name,dob,gender,ps,occupation,income) VALUES ('$name','$dob','$gender','$ps','$occupation','$income')";
                $result=mysqli_query($connection,$q) or die("entry failed");
                if($result)
                {
                        echo "entered successfully";
                }
                else
                        echo "not inserted";
         }
?>