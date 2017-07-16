<html>
<head>
<title>My first chart using FusionCharts Suite XT</title>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript"></script>


</head>
<body style="background-color:black">
<?php
$l=new mysqli("13.229.51.247","root","root","mydb");

$result = mysqli_query($l,"SELECT * from student where sid =1");
$row = mysqli_fetch_assoc($result);
$date = DateTime::createFromFormat("Y-m-d", $row['DOB']);
$age = date("Y")-$date->format("Y");
$r1=mysqli_query($l,"select count(*) as counts from student where $age > 11");
$row1 = mysqli_fetch_assoc($r1);

$r2=mysqli_query($l,"select count(*) as counts from student where $age > 8 ");
$row2 = mysqli_fetch_assoc($r2);

$result = mysqli_query($l,"SELECT * from student where sid =3");

$r3=mysqli_query($l,"select count(*) as counts from student where $age > 3 ");
$row3 = mysqli_fetch_assoc($r3);
echo $row2['counts'];

?>
<script>
var v1=<?php echo $row1['counts'];?>;
var v2=<?php echo $row2['counts'];?>;
var v3=<?php echo $row3['counts'];?>;
FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'pie2d',
    renderAt: 'chart-container',
    width: '450',
    height: '300',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "AGE GROUPS OF STUDENTS",
            //"subCaption": "Last year",
            //"numberPrefix": "$",
            "showPercentInTooltip": "0",
            "decimals": "1",
            "useDataPlotColorForLabels": "1",
            //Theme
            "theme": "fint"
        },
        "data": [{
            "label": "age group 3-7",
            "value": v1
        }, {
            "label": "age group 8-11",
            "value": v2
        }, {
            "label": "age group 12-14",
            "value": v3

        }]
    }
}
);
    fusioncharts.render();
});

</script>


  <div id="chart-container">FusionCharts XT will load here!</div>

</body>
</html>
