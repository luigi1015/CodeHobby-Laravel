window.onresize = displayWindowSize;
window.onload = displayWindowSize;

function displayWindowSize()
{
	var myWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	var myHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	document.getElementById("displayWidth").innerHTML = myWidth;
	document.getElementById("displayHeight").innerHTML = myHeight;
	alert('test');
};
