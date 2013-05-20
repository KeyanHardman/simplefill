<?php
  $email = $_POST["email"];
  mail('keyanhardman@gmail.com', 'Simple Fill Contact', $email);
  header('Location: http://www.simple-fill.com');
?>