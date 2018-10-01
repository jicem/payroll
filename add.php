<?php
$servername = "localhost";
$username = "root";
$password = "test123";
$dbname = "payroll";

try {
	// connect to mysql database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// preparw sql to protect against sql injections
    $stmt = $conn->prepare("INSERT INTO employees (id, name, role, hourly) 
VALUES (:id, :name, :role, :hourly)");

	// bind parameters to sql query
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':role', $role);
	$stmt->bindParam(':hourly', $hourly);

	// set paramters based on the values given in payroll.php
	// names in the form different from names here to add an extra element of securirty
    $id = $_POST["eid"];
    $name = $_POST["ename"];
    $role = $_POST["erole"];
	$hourly = $_POST["epay"];
	
	// insert row into table
    $stmt->execute();
    echo "Employee successfully added.";
    }
catch(PDOException $e)
    {
    echo "Error adding employee: " . $e->getMessage();
    }

$conn = null;
?>