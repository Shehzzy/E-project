
`<?php
      include 'include/connection.php';
      $action = $_POST['action'];
      $id = $_POST['id'];
      //echo $action;
      if($action == "checked")
      {
         $query = "update job_category set approval=1 where c_id=$id";
     $result = mysql_query($query);
     if(!$result)
     {
       echo die(mysql_error());
     }
      }
      else if($action == "unchecked")
       {
         $query = "update job_category set approval=0 where c_id=$id";
     $result = mysql_query($query);