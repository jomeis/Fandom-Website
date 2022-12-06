<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php'; ?>
<?php
 
$dataPoints = array(
	array("x"=> 51, "y"=> 51),
	array("x"=> 77, "y"=> 56),
	array("x"=> 82, "y"=> 57),
	array("x"=> 82.5, "y"=> 63.5),
	array("x"=> 83, "y"=> 59.5),
	array("x"=> 85, "y"=> 58),
	array("x"=> 90, "y"=> 65),
	array("x"=> 97.5, "y"=> 66),
	array("x"=> 99, "y"=> 59),
	array("x"=> 102, "y"=> 64),
	array("x"=> 102, "y"=> 63),
	array("x"=> 111.5, "y"=> 68),
	array("x"=> 112, "y"=> 70),
	array("x"=> 113, "y"=> 61),
	array("x"=> 128, "y"=> 65),
	array("x"=> 132, "y"=> 66.5),
	array("x"=> 151, "y"=> 71)
);
	
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="/style.css" rel="stylesheet" >
  </head>
   <div class="container">
      <div class="row">
        <div class="col nav fixed-top">
          <?php
          echo $mainNav;
          ?>
        </div>
      </div>
    </div>
    <div class="container"> <!--START: container  -->



      <div class="row mt-4"> <!--START: top row  -->
        <div class="col p-2" align="center" id="top"> <!-- START: col-->
            <a href="https://www.guiltygear.com/ggst/en/" target="_blank"><img src="/images/guiltyGearTitle2.png"></a>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
<head>  
This is above
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", 
	title:{
		text: "Study of Height vs Weight"
	},
	axisX:{
		title: "Weight",
		suffix: " kg"
	},
	axisY:{
		title: "Height",
		suffix: " inch"
	},
	data: [{
		type: "scatter",
		markerType: "square",
		markerSize: 10,
		toolTipContent: "Height: {y} inch<br>Weight: {x} kg",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 170px; width: 50%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          footer
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
</body>
</html>             