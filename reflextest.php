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

<script language="JavaScript">
<!-- hiding for old browsers
	// response time test, created by Jasper van Zandbeek
	// e-mail: jasperz@net-v.com

var startTime=new Date();
var endTime=new Date();
var startPressed=false;
var bgChangeStarted=false;
var maxWait=10;
var timerID;

function startTest()
{
	document.body.style.background="red";
	bgChangeStarted=true;
	startTime=new Date();
}

function remark(responseTime)
{
	var responseString="";
	if (responseTime < 0.10)
		responseString="Well done!";
	if (responseTime >= 0.10 && responseTime < 0.20)
		responseString="Nice!";
	if (responseTime >=0.20 && responseTime < 0.30)
		responseString="Could be better...";
	if (responseTime >=0.30 && responseTime < 0.60)
		responseString="Keep practising!";
	if (responseTime >=0.60 && responseTime < 1)
		responseString="Have you been drinking?";
	if (responseTime >=1)
		responseString="Did you fall asleep?";

	return responseString;
}

function stopTest()
{
	if(bgChangeStarted)
	{
		endTime=new Date();
		var responseTime=(endTime.getTime()-startTime.getTime());

		document.body.style.background="white";       
		alert("Your response time is: " + responseTime + " milliseconds " + "\n" + remark(responseTime));
		startPressed=false;
		bgChangeStarted=false;
	}
	else
	{
		if (!startPressed)
		{
			alert("press start first to start test");
		}
		else
		{       
			clearTimeout(timerID);
			startPressed=false;             
		}               
	}
}

var randMULTIPLIER=0x015a4e35;
var randINCREMENT=1;
var today=new Date();
var randSeed=today.getSeconds();
function randNumber()
{
	randSeed = (randMULTIPLIER * randSeed + randINCREMENT) % (1 << 31);
	return((randSeed >> 15) & 0x7fff) / 32767;
}

function startit()
{
	if(startPressed)
	{
		alert("Already started. Press stop to stop");
		return;
	}
	else
	{
		startPressed=true; 
		timerID=setTimeout('startTest()', 6000*randNumber());
	}
}
// --> 
</script>

<body value="start" onload="startit()">

<form name="response">
<input onClick="stopTest()">
</form>


	</body>
</html>