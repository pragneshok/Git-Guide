<html>
<head>
<?php date_default_timezone_set("Asia/Kolkata"); ?>
<title>Auto update clock using server date time</title>
<script type="text/javascript">
var x = new Date('<?php print date("F d, Y H:i:s", time())?>')

function display_c(){
	x.setSeconds(x.getSeconds() + 1);
	var refresh=1000; // Refresh rate in milli seconds
	mytime=setTimeout('display_ct()',refresh)
}

function padzero(num,count) {
	var num = num + '';
	while(num.length < count) {
	num = "0" + num;
	}
	return num;
}

function display_ct() {
	var monthname=new Array("Jan","Feb","March","April","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

	var y;

	y = monthname[x.getMonth()] + " ";
	y = y + padzero(x.getDate(), 2);
	y = y + ", ";
	y = y + x.getFullYear();
	y = y + " ";
	y = y + padzero(x.getHours(), 2);
	y = y + ":";
	y = y + padzero(x.getMinutes(), 2);
	y = y + ":";
	y = y + padzero(x.getSeconds(), 2);

	document.getElementById('ct').innerHTML = y
	tt=display_c();
}
</script>
</head>

<body onload=display_ct();>
<span id='ct' ></span>
</body>

</html>
