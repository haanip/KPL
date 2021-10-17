<?php
  $db_host = 'sql307.epizy.com';
  $db_database = 'epiz_27043286_0';
  $db_username = 'epiz_27043286';
  $db_password = '9lnPzfZJlj';

  // Connect database
  $db = new mysqli($db_host, $db_username, $db_password, $db_database);
  if ($db->connect_errno) {
    die ("Could not connect to the database: <br>".$db->connect_error);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }
?>