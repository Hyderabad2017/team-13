
<?php include "dbconnection.php"; ?>
<?php
                $sclid=$_POST['sclid'];
           $cid=$_POST['cid'];
             $t=$_POST['t'];
             $ma=$_POST['ma'];
             global $connection;
               if(isset($_POST['submit2']))
            {
                $q="INSERT INTO classroom_assessment(schoolid,cid,term,avg) VALUES ('$sclid','$cid','$t','$ma')";
                //echo $q;
                $result=mysqli_query($connection,$q) or die("entry failed".mysqli_error($connection));
                if($result)
                {
                        header("location: index.php#upload");
                }
                else
                        echo "not inserted";
         }
?>
