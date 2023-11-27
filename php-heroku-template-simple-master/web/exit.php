<?php
session_start();
session_destroy();
echo "Пользователь вышел из системы!";
echo "<br><a href='index.php'>Вернуться в окно регистрации</a><br>";
?>