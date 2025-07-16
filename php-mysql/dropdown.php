<?php
include("./config.php");

// Prepare and execute the query
$getStudent = $conn->prepare("SELECT id, name FROM info");
$getStudent->execute();
$studentData = $getStudent->fetchAll();

// Begin dropdown
echo "<select>";
echo "<option>Select Name</option>";

// Loop through and print each student
foreach ($studentData as $student) {
  echo "<option value='" . $student['id'] . "'>" . htmlspecialchars($student['name']) . "</option>";
}

echo "</select>";
?>