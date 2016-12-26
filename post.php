<?php
 /* $_POST["username"];
  $_POST["password"];*/

  if(($_POST['username']==="brian") && ($_POST['password']==="wamatu")){
      echo "Welcome";
  }else{
      $alert_message = "Incorrect Credentials. Try Again";
      echo "<script type='text/javascript'>alert('$alert_message');</script>";
  }