<?php
// Start a new session
session_start();

// Define function to validate email format
function is_email_valid($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Define function to generate unique filename for uploaded files
function generate_filename($filename) {
  $timestamp = date('YmdHis');
  $extension = pathinfo($filename, PATHINFO_EXTENSION);
  return "img_" . $timestamp . "." . $extension;
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate form inputs
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $profile_picture = $_FILES["profile-picture"];
  
  if (empty($name) || empty($email) || empty($password) || empty($profile_picture["name"])) {
    die("Error: Please fill out all fields.");
  } elseif (!is_email_valid($email)) {
    die("Error: Please enter a valid email address.");
  }

  // Save profile picture to server
  $filename = generate_filename($profile_picture["name"]);
  $destination = "uploads/" . $filename;
  if (!move_uploaded_file($profile_picture["tmp_name"], $destination)) {
    die("Error: Unable to save profile picture.");
  }

  // Save user data to CSV file
  $data = array($name, $email, $filename, date("Y-m-d H:i:s"));
  $fp = fopen("users.csv", "a");
  fputcsv($fp, $data);
  fclose($fp);

  // Set cookie with user's name
  setcookie("username", $name);

  // Redirect to success page
  header("Location: success.php");
  exit();
}

?>

<!-- HTML form to submit user data -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  
  <label for="profile-picture">Profile Picture:</label>
  <input type="file" id="profile-picture" name="profile-picture">
  
  <button type="submit">Submit</button>
</form>
