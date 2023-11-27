<?php
session_start();
if (isset($_POST['name'])) {
  $_SESSION['name'] = $_POST['name'];
  echo 'Добавлен новый пользователь ' . $_SESSION['name'];
  echo "<br><a href='index.php'>Вернуться в главное окно</a><br>";
}
?>