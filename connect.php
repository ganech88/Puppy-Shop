<?php
function conectarBd() {

 $dsn = 'mysql:host=localhost; dbname=restaurante; port=3306; charset=utf8';
 $db_user = 'root';
 $db_pass = 'root';

 try {
   $db = new PDO($dsn, $db_user, $db_pass);
   return $db;
 //  echo "Todo bien";  --> podría hacer un echo de un mensaje para asegurarme que está ok, pero si no trae nada significa que se conectó ok
 } catch( PDOException $Exception ) {
   echo $Exception->getMessage();
   echo "<h1 style='color:red'> error fatal, muerte y destrucción</h1>";
   }

}
