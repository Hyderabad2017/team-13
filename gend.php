<html>
<head>
<title>My first chart using FusionCharts Suite XT</title>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript"></script>

  
</head>
<body>
<?php
$l=new mysqli("13.229.51.247","root","root","mydb");

$result = mysqli_query($l,"SELECT count(*) as female from student where gender ='f' or gender='F'"); 
$row = mysqli_fetch_assoc($result);
$countf=$row['female'];

$result = mysqli_query($l,"SELECT count(*) as male from student where gender ='m' or gender='M'"); 
$row = mysqli_fetch_assoc($result);
$countm=$row['male'];

?>
<script>
var f=<?php echo $countf;?>;
var m=<?php echo $countm;?>;
FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'pie2d',
    renderAt: 'chart-container',
    width: '450',
    height: '300',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "female/male",
            //"subCaption": "Last year",
            //"numberPrefix": "$",
            "showPercentInTooltip": "0",
            "decimals": "1",
            "useDataPlotColorForLabels": "1",
            //Theme
            "theme": "fint"
        },
        "data": [{
            "label": "female",
            "value": f
        }, {
            "label": "male",
            "value": m
        
        
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