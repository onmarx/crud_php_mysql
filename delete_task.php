<?php
  include('db.php');
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if(!$result){
      die('Query Failed');
    }
    $_SESSION['message'] = 'Task Deletd succesfully';
    $_SESSION['message_type'] = "danger";
    header('Location: index.php');
  }
?>