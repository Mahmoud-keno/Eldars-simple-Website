<?php
// Replace with your actual details
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "contact_db";

try {
  // Create PDO connection within try-catch block
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Extract and sanitize data once
  $name = $conn->quote($_POST['name']);
  $email = $conn->quote($_POST['email']);
  $subject = $conn->quote($_POST['subject']);
  $message = $conn->quote($_POST['message']);

  // Prepare and execute SQL statement
  $sql = "INSERT INTO contact (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":subject", $subject);
  $stmt->bindParam(":message", $message);
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
