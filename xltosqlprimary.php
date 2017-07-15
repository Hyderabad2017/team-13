<?php
$file = "your-file.xls";
 $handle = fopen($file, "r");
 $c = 0;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {
 $oid1 = $filesop[0];
 $sid = $filesop[1];
 $sem = $filesop[2];
 $year = $filesop[3];
 $assumed_age= $filesop[4];
 $lang_diff = $filesop[5];
 $q1= $filesop[6];
$q2 = $filesop[7];
$q3 = $filesop[8];
$q4 = $filesop[9];
$q5 = $filesop[10];
$q6 = $filesop[11]

 $sql = mysqli_query("INSERT INTO `Chasses` (oid1,sid,sem,year,assumed_age,lang_diff,q1,q2,q3,q4,q5,q6) VALUES ('$oid1','$sid','$sem','$year','assumed_age','lang_diff','q1','q2','q3','q4','q5','q6')");
 

 if($sql){
 echo "You database has imported successfully";
 }else{
 echo "Sorry! There is some problem.";
 }