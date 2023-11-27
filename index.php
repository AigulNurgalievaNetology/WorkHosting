<?php 
session_start();
if (isset($_SESSION['name'])){
    echo 'Приветствую, ' . $_SESSION['name'];
    echo "<br><a href='exit.php'>Выйти из программы</a><br>";
} else
{
    include 'author.html';
}

?> 
