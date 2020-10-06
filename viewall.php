<?php
    session_start();
    $conn=require "config.php";
?>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Credit Management-All users</title>

    <link rel="stylesheet" href="css/viewall.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<?php
    $i=1;
    $res=$conn->query("select * from users");
    echo "<h1 align='center'>Users</h1>";
    if($res->num_rows>0) {
        echo "<table class='table table-striped table-dark table-bordered table-hover table-responsive-sm'>";
        echo "<tr id='hrow'><th>ID</th><th>name</th><th>email</th><th>credits</th><th>View me</th></tr>";
        while ($row = $res->fetch_assoc()) {

            echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["credits"]."<td><a href='ind.php?v=$i' class='text-danger'> View ".$row['name']."</a></td></tr>";
            $i=$i+1;
        }
        echo "</table>";
    }
?>

<body>
<a href="history.php?q=-1&w=-1&e=-1" id="hist" class="text-danger text-center">View history</a>
</body>
</html>
