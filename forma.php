<?php
  error_reporting(0);
  $email = $_POST['email'];
  $mail = "leomuskul@ukr.net", $_POST['email'];
  $to = $_POST['email'];
  $date=date("d.m.y"); // число.месяц.год 
  $time=date("H:i"); // часы:минуты:секунды  
  $message = "<h2>Мебель Эксперт форма:</h2><hr>
    <p><strong>Имя:</strong> ".$_POST['name']."</p>
    <p><strong>Телефон:</strong> ".$_POST['phone']."</p>
    <p><strong>E-mail:</strong> ".$_POST['e-mail']."</p>"
  $subject="Уведомление с сайта \"Мебель Эксперт\"";
  mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
  echo "Done";
  header("Location: http://www.quizful.net/post/simplest-form-html-css");