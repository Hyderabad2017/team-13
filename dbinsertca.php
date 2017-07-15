
<?php include "dbconnection.php"; ?>
<?php
                $sclid=$_POST['sclid'];
           $cid=$_POST['cid'];
             $t=$_POST['t'];
             $ma=$_POST['ma'];
               if(isset($_POST['submit']))
            {
                $q="INSERT INTO classroom-assessment(schoolid,cid,term,avg) VALUES ('$sclid','$cid','$t','$ma')";
                $result=mysqli_query($connection,$q) or die("entry failed");
                if($result)
                {
                        echo "entered successfully";
                }
                else
                        echo "not inserted";
         }
?>