

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Line Chart Test</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

</head>
<body onload="displayLineChart();">

  <div class="box">
    <canvas id="lineChart" height="450" width="800"></canvas>
  </div>
  <?php
  $l=mysqli_connect('13.229.51.247','root','root','mydb',3306);
  $array=array();
  $result=mysqli_query($l,"select * from child_assess");
  $i=0;
  while ($row = mysqli_fetch_assoc($result)) {
  $q1=$row['q1'];
  $q2=$row['q2'];
  $q3=$row['q3'];
  $q4=$row['q4'];
  $q5=$row['q5'];
  $q6= $row['q6'];
  $avg=($q1+$q2+$q3+$q4+$q5+$q6)/6;
  $avg;
  $array[$i]=$avg;
  $i++;
  }
  $j=0;
  $count =array(0,0,0,0,0);
  $j=0;
  while($j<$i){
    $temp=$array[$j];
    echo $temp;
    $j++;
  }
  /*$j=0;
  while($j<$i){
    echo $count[$j];
    $j++;
  }*/

  ?>
  <script language="JavaScript"><!--
  var tempArray = <?php echo json_encode($count); ?>;
  function displayLineChart() {
    var data = {
        labels: [1, 2, 3, 4, 5],
        datasets: [
            {
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: tempArray,
                //[1, 3, 5, 7, 11, 13, 17, 19, 23, 29]
            },
          /*  {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
            }*/
        ]

    };
    var ctx = document.getElementById("lineChart").getContext("2d");
    var options = { };
    var lineChart = new Chart(ctx).Line(data, options);
  }
  //window.alert(tempArray);
  --></script>
</body>
</html>
