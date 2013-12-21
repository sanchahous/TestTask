<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
	<body>
	
	<?php
	// Соединиться с сервером БД
  header('Content-Type: text/html; charset=utf-8');
	mysql_connect("localhost", "root", "root") or die (mysql_error ());
  mysql_query("set names 'utf8'");
	// Выбрать БД
	mysql_select_db("question") or die(mysql_error());

	// SQL-запрос
	$strSQL = "SELECT * FROM voprosu WHERE id='1'";

	// Выполнить запрос (набор записей $rs содержит результат)
	$rs = mysql_query($strSQL);
	
	// Цикл по набору записей $rs
	while($row = mysql_fetch_array($rs)) {
	   // Записать значение столбцов FirstName и BirthDate
	  echo $row['id'] . " " . $row['voprosu'] . "<br />";
	  }
	// Закрыть соединение с БД
	mysql_close();
	?>
 