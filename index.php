<html>
<head>
<title></title>
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript">

function hh()
{
	//$('#id1 li').not($('#li2')).addClass('hh');
	$('#li2').siblings().addClass('hh');
}


</script>
<style type="text/css">
.jj
{
	color:#000000;
}
.hh
{color:#F00;
}
</style>
</head>
<body>

<!--<div id="content" style="background-color:#009999; width:50px; height:50px;">fdhfh</div>-->
<ul id="id1">
<li id="li1">item 1</li>
<li id="li2">item 2</li>
<li id="li3">item 3</li>
</ul>
<input type="button" onClick="hh()">
</body>
</html>
