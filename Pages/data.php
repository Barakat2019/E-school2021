<?php
  require_once '../Database/Connection.php';
  if(isset($_POST['std_class']))
  {
       $stmt_select_class="select * from section where class_id=".$_POST['std_class'];
      $rows=$conn->prepare($stmt_select_class);
      $rows->execute();
      $sections=$rows->fetchAll(PDO::FETCH_ASSOC);
      echo json_encode($sections);

  }
  $stmt_select_class="select * from class";
  $rows=$conn->prepare($stmt_select_class);
  $rows->execute();
  $class=$rows->fetchAll(PDO::FETCH_ASSOC);
?>