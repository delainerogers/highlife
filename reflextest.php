<?php include "header.php" ?>
</div>
</body>
<body onload="startit()">
<h3 align="center" style="vertical-align: center" color="red"> Tap the screen when the screen turns red </h3>
<script language="JavaScript">
<!-- hiding for old browsers
	// response time test, created by Jasper van Zandbeek
	// e-mail: jasperz@net-v.com
window.onclick = stopTest;
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

	return responseString;
}

function stopTest()
{
	if(bgChangeStarted)
	{
		endTime=new Date();
		var responseTime=(endTime.getTime()-startTime.getTime());
		
		<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "cooldata";
$connection = mysqli_connect($servername, $username, $password, $dbname);
  
  $resp = $_POST['responseTime'];


  $query = "INSERT INTO reflexinit (reflexinit) VALUES ('$resp');";



  $result=mysqli_query($connection,$query);

  if($result)
  {

    echo $msg="Success";
  } else{
  echo $msg="Fail";

}
?>
		startPressed=false;
		bgChangeStarted=false;
	}
	else
	{
		if (!startPressed)
		{
			//alert("press start first to start test");
		}
		else
		{       
			clearTimeout(timerID);
			startPressed=false;
			alert("Wait until red before tapping");
			location.reload();
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
		timerID=setTimeout('startTest()', 1000+6000*randNumber());
	}
}
// --> 
</script>
	</body>
</html>