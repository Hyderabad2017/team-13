<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="js/grayscale.js"></script>
    <script src="js/script.js" type="text/javascript">
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/animate.css">
    <title>Learning Curve</title>
    <script src="js/wow.min.js"></script>
    <script> new WOW().init();  </script>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>
<?php session_start();
include 'dbconnection.php';
include 'dbfunctions.php';
//echo"----";
session_destroy();
if(isset($_POST['sub'])){
  //echo "world";
  update();
  //echo $_SESSION['login_user'];
  if(!isset($_SESSION['error'])){
    ?>
    <script type="text/javascript">
      function changeButton(){var nu=document.getElementById('sign');
        nu.style.display="none";
        var nu=document.getElementById('log');
          nu.style.display="block";
      }
      window.onload=changeButton;
    </script>
    <?php
  }
}
?>



<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Modal title
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="index.php" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                        id="name" name="name" placeholder="Name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"
                            id="password" name="password" placeholder="Password" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-default" value="Go" name="sub"/>
                    </div>
                  </div>
                </form>






            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div><nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                     Learning-Curve
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" data-toggle="modal" data-target="#myModalHorizontal" id="sign">Sign In</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#upload">Upload</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#analytics">Analytics</a>
                    </li>
                    <li>
                        <a class="page-scroll" id="log" style="display:none" href = "logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Learning Curve</h1>
                        <p class="intro-text">We care about one simple thing – regardless of economic status, every child has the right to realize one’s own potential as a human being.We wish to see each child emotionally balanced, self-aware, resilient and able to make informed choices in life.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class=" content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>OUR STORY</h2>
                <p>When Learning Curve began its journey in 2011, we knew well what we wanted to do, but we didn’t know how. That’s when it began – the journey of self-reflection, research, numerous interactions with educationists, psychologists and other experts. It took us nearly two years to arrive at what we believed was a comprehensive life skills development program that would enable children to be psychologically, emotionally and socially healthy. Whenever we came across children who were marginalized in any form, our story started taking shape. It was in our third year that we were able to realize the power of life skills – when we walked into a children’s home of 40 girls for a visit. As we started working with these girls every weekend for over a year, we realized that more than academics, these children needed help with their overall self-esteem, identity, expression, self-confidence and the opportunity to realize their own potential. As we continued our work with several communities, organizations and children, the concept of emotional and social development resonated with us very strongly. It is the process through which children and acquire and effectively apply the knowledge, attitudes, and skills necessary to understand and manage emotions, set and achieve positive goals, feel and show empathy for others, establish and maintain positive relationships, and make responsible decisions. And that’s where our story began again – in the form of Learning Curve Life Skills Foundation.</p>
            </div>
        </div>
    </section>
    <div class="row">



    <section id="upload" class="row">
        <div class="container">
          <div class="container">



        <a href="#d-form" id="demographic" class="col-md-4 wow slideInLeft" >

          <img  src="assets/back.png" alt="" class="img-circle" width="200px" height="200px">
          <p style="padding-top:10px margin-left:0px" class="pull-left">Upload Demographic Data</p>
        </a>

        <a href="#c-form" id="child-assess" class="col-md-4 wow slideInLeft">
          <img src="assets/back.png" alt="" class="img-circle " width="200px" height="200px">
          <p style="padding-top:10px ">Child Assessment Data</p>
        </a>

        <a href="#cl-form" id="classroom" class="col-md-4 wow slideInLeft">

          <img src="assets/back.png" alt="" class="img-circle" width="200px" height="200px">
          <p style="padding-top:10px" >Classroom Data</p>
        </a>
                </div>        </div>

     </section>
      <div class="demographic-form" id="d-form" style="display:none">


     <form class="form-horizontal" action="index.html" method="post">
         <div class="form-group">
           <label for="name" class="control-label col-md-2">Student Name</label>
           <div class="col-md-8">
             <input type="text" class="form-control" id="name" name="name" placeholder="John" >
           </div>
         </div>
         <div class="form-group">
           <label for="dob" class="control-label col-md-2">Last Name</label>
           <div class="col-md-8">
             <input type="text" class="form-control" id="dob" name="dob" placeholder="yyyy/mm/dd" required>
           </div>
         </div>
         <div class="form-group">
           <label for="gender" class="control-label col-md-2">Gender</label>
           <div class="col-md-8">
             <div class="radio-inline">
               <label for="male">
               <input type="radio" name="gender" value="M" id="male">
               Male</label>
             </div>
             <div class="radio-inline">
               <label for="female">
               <input type="radio" name="gender" value="F" id="female">
               Female</label>
             </div>
           </div>
         </div>
         <div class="form-group">
           <label for="occupation" class="control-label col-md-2">Occupation</label>
           <div class="col-md-8">
             <input type="text" class="form-control" name="occupation" placeholder="occupation">
           </div>
         </div><div class="form-group">
         <label class="control-label col-md-2">Parental Status</label>
         <div class="col-md-2">
           <select name="ps" class="form-control" >
             <option value="0">Orphan</option>
             <option value="1">Single</option>
             <option value="2">None</option>
           </select>
         </div></div>
         <div class="form-group">
           <label for="income" class="control-label col-md-2">Income</label>
           <div class="col-md-8">
             <input type="number" name="income" class="form-control" placeholder="income" >
           </div>
         </div>
           <input type="submit" class="btn btn-success btn-md col-md-4 col-md-offset-2"name="submit" value="Go">
         </div>
       </form>
       </div>
<div class="cl-form" id="cl-form" style="display:">
     <form class="form-horizontal" action="dbinsertca.php" method="post">
         <div class="form-group">
           <label for="number" class="control-label col-md-2">School id</label>
           <div class="col-md-8">
             <input type="text" class="form-control" id="name" name="sclid" placeholder="school id" >
           </div>
         </div>
         <div class="form-group">
           <label for="number" class="control-label col-md-2">Class id</label>
           <div class="col-md-8">
             <input type="text" class="form-control" id="dob" name="cid" placeholder="class id" required>
           </div>
         </div>
         <div class="form-group">
           <label for="number" class="control-label col-md-2">Term</label>
           <div class="col-md-8">
             <div class="radio-inline">
               <label for="1">
               <input type="radio" name="t" value="1" id="1">
               1</label>
             </div>
             <div class="radio-inline">
               <label for="2">
               <input type="radio" name="t" value="2" id="2">
               2</label>
             </div>
          <div class="radio-inline">
               <label for="3">
               <input type="radio" name="t" value="3" id="3">
               3</label>
             </div>

           </div>
         </div>
         <div class="form-group">
           <label for="number" class="control-label col-md-2">Marks Assessed</label>
           <div class="col-md-8">
             <input type="text" class="form-control" name="ma" placeholder="marks assessed">
           </div>
         </div>
   <input type="submit" class="btn btn-success btn-md col-md-4 col-md-offset-2"name="submit2" value="Go">
         </div>
       </form>
       </div>

       <div class="c-form" id="c-form" style="display:none">
            <form class="form-horizontal" action="dbinsertca.php" method="post">
              <div class="col-md-2">
                <select name="ps" class="form-control" >
                  <option>demo</option>
                  <?php
                  if(isset($_SESSION['oid'])){
                  global $connection;
                  $i=$_SESSION['oid'];

                  $query1="SELECT * FROM observer_student WHERE oid1='$i'";
                  echo "<option>$query1</option>";
                  $r=mysqli_query($connection,$query1)or die("entry failed".mysqli_error($connection));
                  //$row = mysqli_fetch_assoc($r);
                  echo "<option>demo-1</option>";
                  while($row = mysqli_fetch_assoc($r))
                  {
                    $temp=$row['sid'];
                    echo "<option>$temp</option>";
                    $q2="SELECT * FROM student WHERE sid='$temp'";
                    echo"<option>$q2</option>";
                    $r2=mysqli_query($connection,$q2)or die("entry failed".mysqli_error($connection));
                    $row2 = mysqli_fetch_assoc($r2);
                    echo "<option value='".$row2['Name']."'>".$row2['Name']."</option>";

                  }
                }
                   ?></select>
                 </div>
               </form>
             </div>







    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->


    <!-- Theme JavaScript -->


</body>

</html>
