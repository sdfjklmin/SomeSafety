<?php
$dbh = new PDO('mysql:host=localhost;dbname=passport', 'root','root');    
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
$dbh->exec('set names utf8');   
$sql = " DELETE FROM `user` WHERE (`user_id`='53') " ;
$info = $dbh->query($sql);
while($row = $info->fetch(PDO::FETCH_ASSOC)){       
 	print_r($row);    
} 