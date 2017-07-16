<?php include "dbconnection.php"; ?>
<?php
session_start();
$oid1=$_SESSION['oid'];
$sname=$_POST['ps'];
$term=$_POST['t'];
$dob=$_POST['year'];
$am=$_POST['ma'];
$ld=$_POST['ld'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
global $connection;
if(isset($_POST['submit2']))
{
$q="INSERT INTO child_assess(oid1,sem,year,assumed_age,lang_diff,q1,q2,q3,q4,q5,q6) VALUES ('$oid1','$term','$dob','$am','$ld','$q1','$q2','$q3','$q4','$q5','$q6')";
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
