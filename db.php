<?php
session_start();
$connection = mysqli_connect(
  'localhost',
  'root',
  '',
  'phy_crud_mysql'
);
// if(isset($connection)){
//   echo 'Db is connected';
// }
?>