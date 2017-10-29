<?php include "header.php" ?>
      
<form onsubmit="download(this['name'].value, this['text'].value)">
  <input type="text" name="name" value="test.txt">
  <textarea rows=3 cols=50 name="text">Please type in this box. When you 

click the Download button, the contents of this box will be downloaded to 

your machine at the location you specify. Pretty nifty. </textarea>
  <input type="submit" value="Download">
</form>


<h1>Dashboard</h1>

	<head>
		<meta charset="utf-8" />
		<title>Speedometer HTML5 Canvas</title>
		<script src="speedometer.js"></script>
	</head>
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
</html>