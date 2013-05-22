<?php
  $email = $_POST["email"];
  mail('r.underhill@simple-fill.com', 'Simple Fill Contact', $email);
  header('Location: http://www.simple-fill.com');
?>