<!-- In the getdata.php file -->

<?php
// connection credention to database
$host="localhost";
$user="root";
$password='';
$dbName='leonteqsecurity191';

// Connect to the database
$mysqli = new mysqli($host, $user, $password, $dbName);

// Execute a SELECT query
$result = $mysqli->query('SELECT * FROM usertraffics');

// Fetch the rows
$rows = array();
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $rows[] = $row;
}

// Close the connection
$mysqli->close();

// Return the rows as a JSON object
echo json_encode($rows);

?>
