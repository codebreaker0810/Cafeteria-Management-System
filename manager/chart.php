<?php $format = 'Y-m-d';
include('dbcon.php');
session_start();
include('header.php');
$date = date ( $format );

// - 7 days from today
$data1;
$date1=date ( $format, strtotime ( '-5	 day' . $date ) );
//echo $date1;
for($i=0;$i<7;$i++)
{
	$query="SELECT SUM(amount) FROM `bill` WHERE btime like '%".$date1."%'";
	$date1=date ( $format, strtotime ( '+1 day' . $date1 ) );
	$result=mysqli_query($con,$query);
	//echo "SELECT SUM(amount) FROM `bill` WHERE btime like '%".$date1."%'";
	//echo "<br>";
	$row=mysqli_fetch_assoc($result);
	if($row['SUM(amount)']!=null)
	$data1[$i]=$row['SUM(amount)'];
	else{
	$data1[$i]=0;
	}	
//echo $data1[$i];
}
?>
<script>
window.onload = function () {

var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday",
                "Friday","Saturday");

var options = {
	animationEnabled: true,  
	title:{
		text: "Company Revenue by Week"
	},
	axisY: {
		title: "Revenue in RS",
		
		
		prefix: "RS"
		},
	data: [{
		type: "splineArea",
		markerSize: 5,
		xValueFormatString: "DD MMM,YY",
		yValueFormatString: "RS#,##0.##",
		dataPoints: [
			{ x:new Date(Date.now() - 6 * 86400000), y: <?php echo $data1[0]; ?>},
			{ x: new Date(Date.now() - 5 * 86400000)	, y:<?php echo $data1[1]; ?> },
			{ x: new Date(Date.now() - 4 * 86400000)	, y: <?php echo $data1[2]; ?> },
			{ x: new Date(Date.now() - 3 * 86400000)	, y: <?php echo $data1[3]; ?> },
			{ x: new Date(Date.now() - 2 * 86400000)	, y: <?php echo $data1[4]; ?> },
			{ x: new Date(Date.now() - 1 * 86400000)	, y: <?php echo $data1[5]; ?> },
			{ x: new Date(Date.now() - 0 * 86400000)	, y: <?php echo $data1[6]; ?> },
			
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Weekly Report</title>
</head>
<body>
<center><div id="chartContainer" style="height: 500px; width: 80%;"></div></center>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<br>
<?php
include('footer.php');
?>
</body>
</html>
<script>
