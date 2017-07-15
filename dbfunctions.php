<?php include "dbconnection.php"; ?>
<?php

    if(isset($_POST['sub'])){

      update();
}
    function showAllData(){
      global $connection;
    $query="SELECT * FROM users";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
      die('Query failed'.mysqli_error);
    }
    // echo "<option value='1'>1</option>";
    while($row=mysqli_fetch_assoc($result))
    {
      $id=$row['id'];
       echo "<option value='$id'>$id</option>" ;
    }
  }
  function update()
  {
    $n=$_POST['name'];
    $p=$_POST['password'];
    // $u=mysqli_real_escape_string($connection,$u);
    // $p=mysqli_real_escape_string($connection,$p);
    global $connection;
    $query1="SELECT oid FROM observer WHERE oname='$n' and password='$p'";
    $r=mysqli_query($connection,$query1);
    if(!$r)
    {
      echo "fail".mysqli_error($connection);
    }
    else {

      echo"success";
    }
  }

 ?>
