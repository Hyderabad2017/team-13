<?php include "dbconnection.php"; ?>
<?php

//     if(isset($_POST['sub'])){
//
//       update();
// }
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
    $query1="SELECT oid1 FROM observer WHERE oname='$n' and password='$p'";
    $r=mysqli_query($connection,$query1);
    $row = mysqli_fetch_array($r,MYSQLI_ASSOC);
      $active = $row['oid1'];
      $count = mysqli_num_rows($r);
      if($count == 1) {
             $_SESSION['login_user'] = $n;

             //header("location: index.php");
          }else {
             $error = "Your Login Name or Password is invalid";
             //echo $error;
             $_SESSION['error']=$error;
             //header("location: index.php");
          }
       }
    ?>
