<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>这是一段文字</p>
	<p>首先是加载整个 html 文档 即便是有php 它也在发送之前把所有的html需要的东西执行完毕了</p>
	<?php  echo "<p>这是php的文件可以嵌套进去 但是前提是文件名字得是 *.php " . date("Y-m-d H:i:s",time()) . "</p>";?>
	<img src="./pre_final/new.jpeg" alt="这是一张图片">
	<p>这又是一段文字</p>
	<?php
		$output = file_get_contents("http://test.com/test9.php");
		//整个拿到的内容 是没有经过解析的 
		// echo($output);  //这个样子的话 是解析完成的 

		$curlObj = curl_init();
		curl_setopt($curlObj, CURLOPT_URL, "http://test.com/test9.php");
		curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($curlObj);//直接输出了 即便你没有进行输出
		curl_close($curlObj);
		// var_dump($output); //这个是把真个文档的内容都拿下来了 
	?>
</body>
</html>