<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		var_dump($_COOKIE);
		setcookie("age","213");
	?>
</body>
<script>
window.onload(){
		function setCookie(name,value) { 
	    var Days = 30; 
	    var exp = new Date(); 
	    exp.setTime(exp.getTime() + Days*24*60*60*1000); 
	    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
	} 

	setcookie("name","boolean");
}

</script>
</html>