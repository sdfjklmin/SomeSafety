<?php
// P3P 头信息可以参考,W3C标准.
//header('P3P: CP=CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR'); 
//header("Set-Cookie: test=cookieData".rand(1,99)." ; domain=.base.com ;path=/" );

//记录网站信息
/*file_put_contents('cookie.txt', var_export($_COOKIE,true)) ;
file_put_contents('request.txt', var_export($_REQUEST,true)) ;
file_put_contents('server.txt', var_export($_SERVER,true)) ;*/

//恶意代码
/*$dbh = new PDO('mysql:host=localhost;dbname=passport', 'root','root');    
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
$dbh->exec('set names utf8');   
$sql = " DELETE FROM `user` WHERE (`user_id`='54') " ;
$info = $dbh->query($sql);
while($row = $info->fetch(PDO::FETCH_ASSOC)){       
 	print_r($row);    
} */
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<iframe width="800px" height="800px" src="http://www.baidu.com">百度</iframe>
</body>
</html> -->