<?php
//include the following 2 files for phpexcel
echo '
<div id="submitfile">
	<form method="POST" action="xltophpAlternate2.php" enctype="multipart/form-data">
    <p>File to upload : <input type ="file" name = "UploadFileName"></p><br />
    <input type = "submit" name = "upload" value = "Press THIS to upload">
	</form>
</div>';
$path = "";
if(isset($_POST['upload'])){
	//move_uploaded_file ( string $filename , string $destination);
	$path=$_FILES["UploadFileName"]["name"];
	//echo $path;
//}changed to inlcude submit file module above
//move_uploaded_file ( string $filename , string $destination )

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$conn=mysqli_connect("13.229.51.247","root","root","mydb") or die("Could not connect");
//$host="localhost";$username="root";$password="";$dbname="Chasses";
//Establish connection to mysql
//$conn=mysqli_connect($host,$username,$password) or die("Could not connect");
//mysqli_select_db($dbname,$conn) or die("could not connect database");*/

//Load file
//$path = "testxl.xlsx";
$objPHPExcel = PHPExcel_IOFactory::load($path);

$highestRow=5;  
$highestColumn="A";
$highestColumnIndex=12;
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

$worksheetTitle     = $worksheet->getTitle();
$highestRow         = $worksheet->getHighestDataRow(); // e.g. 10
$highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
$nrColumns = ord($highestColumn) - 64;
echo "<br>The worksheet ".$worksheetTitle." has ";
echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
echo ' and ' . $highestRow . ' row.';
echo '<br>Data: <table border="1"><tr>';
for ($row = 1; $row <= $highestRow; ++ $row) {
$val=array();
for ($col = 0; $col < $highestColumnIndex; ++ $col) {
$cell = $worksheet->getCellByColumnAndRow($col, $row);
//$val[]=$cell->getValue();
echo 'val is:'.$cell->getCalculatedValue();
array_push($val,$cell->getCalculatedValue());
}
//Insert data from file to mysql 
if(sizeof($val)==12){
$sql="INSERT INTO `child_assess`(oid1,sid,sem,year,assumed_age,lang_diff,q1,q2,q3,q4,q5,q6)
VALUES ('".$val[0]."','".$val[1]."','". $val[2]."','".$val[3]."','".$val[4]."','".$val[5]."','".$val[6]."','".$val[7]."','".$val[8]."','".$val[9]."','".$val[10]."','".$val[11]."')";
echo $sql."\n";
mysqli_query($conn,$sql) or die(mysqli_errno($conn));
}
}

<<<<<<< HEAD
/*for ($row = 1; $row <= $highestRow; ++ $row) {
    echo '<tr>';
    for ($col = 0; $col < $highestColumnIndex; ++ $col) {
        $cell = $worksheet->getCellByColumnAndRow($col, $row);
        $val = $cell->getCalculatedValue();
        //$dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
        echo '<td>' . $val . '<br></td>';
    }
    echo '</tr>';
}
echo '</table>';*/

}
}
//}
/*for ($row = 1; $row <= $highestRow; ++ $row) {
$val=array();
for ($col = 0; $col < $highestColumnIndex; ++ $col) {
$cell = $worksheet->getCellByColumnAndRow($col, $row);
//$val[]=$cell->getValue();
echo 'val is:'.$cell->getCalculatedValue();
array_push($val,$cell->getValue());
}
//Insert data from file to mysql 
$sql="INSERT INTO `Chasses`(oid1,sid,sem,year,assumed_age,lang_diff,q1,q2,q3,q4,q5,q6)
VALUES ('".$val[0].",'".$val[1]."','". $val[2]."','".$val[3]."','".$val[4]."','".$val[5]."','".$val[6]."','".$val[7]."','".$val[8]."','".$val[9]."','".$val[10]."','".$val[11]."')";
//echo $sql."\n";
mysqli_query($conn,$sql) or die('Invalid query: ');
}*/
=======
>>>>>>> 4003b8017393a9f99d8aec0fd11432d3c337eccc
?>