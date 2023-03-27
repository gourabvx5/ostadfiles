<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration and Login Form</title>
  </head>
  <body>
    <?php
      // define variables and set to empty values
      $first_name = $last_name = $email = $password = $confirm_password = "";
      $email_error = $password_error = $confirm_password_error = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // validate first name
        if (empty($_POST["first_name"])) {
          $first_name_error = "First name is required";
        } else {
          $first_name = test_input($_POST["first_name"]);
        }

        // validate last name
        if (empty($_POST["last_name"])) {
          $last_name_error = "Last name is required";
        } else {
          $last_name = test_input($_POST["last_name"]);
        }

        // validate email
        if (empty($_POST["email"])) {
          $email_error = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
          }
        }

        // validate password
        if (empty($_POST["password"])) {
          $password_error = "Password is required";
        } else {
          $password = test_input($_POST["password"]);
        }

        // validate confirm password
        if (empty($_POST["confirm_password"])) {
          $confirm_password_error = "Please confirm password";
        } else {
          $confirm_password = test_input($_POST["confirm_password"]);
          if ($password != $confirm_password) {
            $confirm_password_error = "Passwords do not match";
          }
        }

        // if no errors, display confirmation message
        if (empty($first_name_error) && empty($last_name_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error)) {
          echo "<h2>Registration Successful</h2>";
          echo "<p>Thank you, $first_name, for registering.</p>";
        }
      }

      // function to test and sanitize input data
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>

    <h2>Registration Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label>First Name:</label>
      <input type="text" name="first_name">
      <span class="error"><?php echo $first_name_error;?></span>
      <br><br>

      <label>Last Name:</label>
      <input type="text" name="last_name">
      <span class="error"><?php echo $last_name_error;?></span>
      <br><br>

      <label>Email:</label>
      <input type="text" name="email">
      <span class="error"><?php echo $email_error;?></span>
      <br><br>

      <label>Password:</label>
      <input type="password" name="password">
      <span class="error"><?php echo $password_error;?></span>
      <br><br>

      <label>Confirm Password:</label>
      <input type="password" name="confirm_password">
      <span class="error"><?php echo $confirm_password_error;?></span
