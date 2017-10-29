<?php include "header.php" ?>
      



<h1>Dashboard</h1>

	<!--
	<head>
		<meta charset="utf-8" />
		<title>Speedometer HTML5 Canvas</title>
		<script src="speedometer.js"></script>
		<script src="Balls.js"></script>
	</head>
-->
	<body>
    <canvas id='canvas'></canvas>
    <style>
    	body {
    margin: 0;
    padding: 0;
    background-color: palegoldenrod;
}

#canvas {
    display: flex;
    background-color: #333333;
    border: 1px solid black;
    border-radius: 20px;
    max-height: 800px;
    max-width: 800px;
    margin: 30px auto 0 auto;
}
</style>
</body>
	<!--
	<body onload='draw(0);'>
		<canvas id="tutorial" width="440" height="220">
			Canvas not available.
		</canvas>
		<div>
			<form id="drawTemp">
				<input type="text" id="txtSpeed" name="txtSpeed" value="240" maxlength="2"/>
				<input type="button" value="Draw" onclick="drawWithInputValue();">
			</form>
		</div>
	</body>
-->
</html>