<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'Abhi@0978';
$db_name = 'warzones';

// Connect to MySQL
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query to check credentials
  $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  // Check if credentials are valid
  if ($result->num_rows > 0) {
    $_SESSION['logged_in'] = true;
    header('Location: index.php');
    exit;
  } else {
    echo "Invalid username or password.";
  }
}

// Close MySQL connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
</html>