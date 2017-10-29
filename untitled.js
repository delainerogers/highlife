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

//function remark(responseTime)
//{
//	var responseString="";
//	if (responseTime < 0.10)
//		responseString="Well done!";
//	if (responseTime >= 0.10 && responseTime < 0.20)
//		responseString="Nice!";
//	if (responseTime >=0.20 && responseTime < 0.30)
//		responseString="Could be better...";
//	if (responseTime >=0.30 && responseTime < 0.60)
//		responseString="Keep practising!";
//	if (responseTime >=0.60 && responseTime < 1)
//		responseString="Have you been drinking?";
//	if (responseTime >=1)
//		responseString="Did you fall asleep?";
//
//	return responseString;
//}

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
<p>Test your Response time!</p>
Click on "Start" first, and wait until the background color changes. As soon as it changes, hit "stop!"


<form name="response">
<input type="button" value="start" onClick="startit()">
<input type="button" value="stop" onClick="stopTest()">
</form>

<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
<font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
Kit</a></font></p>