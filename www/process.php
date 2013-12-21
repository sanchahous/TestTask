<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
<?php
$table = "table";

if(!empty($_POST)):
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];

        if($q1=='' or $q2=='' or $q3==''){
                echo '<p>Вы не ответили на вопросы. <a href="process.php">Назад</a></p>';
        }else{
                mysql_connect($localhost, $root, $root) or die ("Не могу создать соединение");
                mysql_select_db($question) or die (mysql_error());
                $query = "INSERT INTO $table (`q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES ('".$_POST['q1']."','".$_POST["q2"]."','".$_POST["q3"]."','".$_POST["q4"]."','".$_POST["q5"]."','".$_POST["q6"]."','".$_POST["q7"]."','".$_POST["q8"]."','".$_POST["q9"]."','".$_POST["q10"]."');";
                mysql_query($query);

                $score = 0;
                if($q1 == 1) // the correct answer for q1 is 1
                $score++;
                if($q2 == 1) // the correct answer for q2 is 1
                $score++;
                if($q3 == 1) // the correct answer for q3 is 1
                $score++;

                echo 'Количество правильных ответов: <strong>'.$score.'</strong><br/><a href="process.php">Назад</a></p>';
        }
endif;
?>   
    </body>
  </html> 