<?php
   // define('DB_SERVER', 'localhost');
   // define('DB_USERNAME', 'root');
   // define('DB_PASSWORD', '');
   // define('DB_DATABASE', 'genesis');

   define('DB_SERVER', 'https://timegoesby.lk');
   define('DB_USERNAME', 'timegoes_genesis');
   define('DB_PASSWORD', 'timegoes_genesis');
   define('DB_DATABASE', 'timegoes_genesis');

   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>