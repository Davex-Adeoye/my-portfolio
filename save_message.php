<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO messages (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('✅ Form submitted successfully!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('❌ Error saving message: " . $conn->error . "');
                window.location.href = 'index.php';
              </script>";
    }
}
$conn->close();
?>
