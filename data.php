<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php'; ?>
<?php
 
$dataPoints = array(
	array("x"=> 5, "y"=> 5),
	array("x"=> 7, "y"=> 6),
	array("x"=> 2, "y"=> 7),
	array("x"=> 8, "y"=> 6.5),
	array("x"=> 6, "y"=> 9.5),
	array("x"=> 2.5, "y"=> 8),
	array("x"=> 9, "y"=> 6),
	array("x"=> 8.6, "y"=> 6),
	array("x"=> 9, "y"=> 5),
	array("x"=> 6, "y"=> 6),
	array("x"=> 1, "y"=> 3),
	array("x"=> 10, "y"=> 8),
	array("x"=> 6, "y"=> 7),
	array("x"=> 3, "y"=> 1),
	array("x"=> 4, "y"=> 9.9),
	array("x"=> 2, "y"=> 9.6),
	array("x"=> 1, "y"=> 9.8)
);
	
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="/style.css" rel="stylesheet" >
  </head>
  <body>

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

      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <h2>Chatacters and their teirs</h2>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", 
	title:{
		text: "Character Rank Vs Difficulty to Learn"
	},
	axisX:{
		title: "Difficulty",
	},
	axisY:{
		title: "Rank",
		suffix: " Teir"
	},
	data: [{
		type: "scatter",
		markerType: "square",
		markerSize: 10,
		toolTipContent: "Rank: {y} inch<br>Difficulty: {x} kg<br>Name:",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>


        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          footer
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->



    </div> <!--END: col  -->

<div id="chartContainer" style="height: 170px; width: 50%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>