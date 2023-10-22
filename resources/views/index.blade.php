<!DOCTYPE html>

<html lang ="en">
<head>

<title>Index</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
//TODO Make a sperate file for the the db conn
$host = "127.0.0.1";  // Replace with your database host
$username = "Kristoffer";  // Replace with your database username
$password = "";  // Replace with your database password
$database = "productdb";  // Replace with your database name


$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error)
    {
    die("Connection failed: " . $mysqli->connect_error);
    }
    else {
        echo "Con suck";
    }

    $query = "SELECT * FROM producttb";

    $results = $mysqli->query($query);

    if ($results) {
        while ($row = $results->fetch_assoc()) {
            echo "Name: " . $row["product_name"]. ", Price: " . $row["product_price"]. "<br>";
        }

        $results->free();
    }
    else {
        echo "Query failed: " . $mysqli->error;
    }
        $mysqli->close();
?>
</body>

</html>


