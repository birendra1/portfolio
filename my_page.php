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

// Check if user is logged in
if (!isset($_SESSION['logged_in'])) {
  header('Location: login.php');
  exit;
}

// Query to retrieve data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Close MySQL connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Users</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($result->num_rows > 0) { ?>
          <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['message']; ?></td>
            </tr>
          <?php } ?>
        <?php } else { ?>
          <tr>
            <td colspan="5">No users found.</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <p><a href="logout.php">Logout</a></p>
  </div>
</body>
</html>