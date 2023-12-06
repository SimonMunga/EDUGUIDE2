<?php
$servername = "localhost"; // Change this to your database host
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "edu_guide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch schools data from the database
$sql = "SELECT * FROM schools";
$result = $conn->query($sql);

$schools = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $schools[] = $row;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>
<body>

<!-- Embed the schools variable in a script tag -->
<script>
    const schools = <?php echo json_encode($schools); ?>;
</script>

<!-- Your JavaScript code -->
<script src="school.js"></script>
</body>
</html>
