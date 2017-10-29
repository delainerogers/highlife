<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">HighLife</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="/highlife/personalInfo.php">Profile</a></li>
        <li class="active"><a href="/highlife/dashboard.php">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="col-sm-9">
      



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


<?php include('footer.php'); ?>