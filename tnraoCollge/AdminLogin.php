<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$database = "tnraomain";

$conn = new mysqli($servername, $username, $password, $database);
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $conn->real_escape_string($_POST["email"]);
  $password = $conn->real_escape_string($_POST["password"]);

  $sql = "SELECT * FROM `registered_users` WHERE email ='" . $email . "' AND password ='" . $password . "' ";

  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
  
  // $usertype = "Admin";
  // Validate the username and password
  // For demonstration purposes, I'll assume the credentials are correct
  if ($email == "{$row['email']}" && $password == "{$row['password']}") {
    // Start the session and set the session variable
    session_start();

    $_SESSION["submit"] = true;
    $_SESSION["username"] = $row['username'];
    $_SESSION["usertype"] = $row['usertype'];

    // Redirect to the index.html file
    header("Location: /Work/tnraoCollge/AdminDashboard/dist/pages/phpPages/dashboard.php");

  } else {
    echo "<script type='text/javascript'>
    alert('You Enter Invalid Inputs');
    window.location.href = '/Work/tnraoCollge/index.php';
  </script>";
exit(); // Ensure no further code is executed
  }
}
?>