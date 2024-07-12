<?php
// Replace with your actual details
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "sign_input";

try {
  // Create PDO connection within try-catch block
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Extract and sanitize data once
  $email = $conn->quote($_POST['email']);
  $password = $conn->quote($_POST['password']);

  // Prepare and execute SQL statement
  $sql = "INSERT INTO sign_in (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":password", $password);
  $stmt->execute();

  // Check for successful insertion and handle accordingly
  if ($stmt->rowCount() > 0) {
    // Send email using your existing code...
    echo "Thank you for contacting us. Your message has been sent and saved.";
  } else {
    echo "Error saving data. Please try again later.";
  }
  // Close connection
  $conn = null;
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  http_response_code(500);
  exit();
}
?>
