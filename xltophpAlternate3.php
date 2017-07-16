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
	echo $path;
}
