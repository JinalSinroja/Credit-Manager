<?php
    session_start();
    require("config.php");

?>
<html lang="en">
  <head>
    <title>Credit Management</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div id="box">
      <h1>Credit Management</h1><br>
      <img src="css/box.png"><br>
      <a href="viewall.php">
        <button class="btn btn-danger" id = "btna">Users</button>
      </a>
      <a href="history.php?q=-1&w-1&e=-1">
        <button class="btn btn-success" id = "btnh">History</button>
      </a>
    </div>
  </body>
</html>
