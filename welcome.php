<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}

require_once "config.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; vertical-align: middle}
        table{ margin:auto; display: table; text-align: left; vertical-align: middle; table-layout: auto;}
        table, th, td, tr{ border:1px solid; padding: 10px; text-align: center;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        <div>
            <div>
                <div class="table-responsive">
                  <table>
                      <?php
                      $sql = "SELECT id, firstname, lastname, username, email, date FROM users WHERE username = '".$_SESSION['username']."'";
                      $result = mysqli_query($link, $sql);
                      if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {
                              echo "<th colspan='2'>" . $_SESSION['username'] . "`s Dashboard" . "</th>".
                                   "<tr><td>" . "User ID: " . "</td>" . "<td>" . $row["id"]. "</td></tr>" .
                                   "tr><td>" . "First Name: " . "</td>" . "<td>" . $row["firstname"]. "</td></tr>" .
                                   "<tr><td>" . "Last Name: " .  "</td>" . "<td>" . $row["lastname"]. "</td></tr>" .
                                   "<tr><td>" . "User Name: " .  "</td>" . "<td>" . $row["username"] . "</td></tr>" .
                                   "<tr><td>" . "Email: " .  "</td>" . "<td>" . $row["email"] . "</td></tr>" .
                                   "<tr><td>" . "Member since: " . "</td>" . "<td>" .  $row['date'] . "</td></tr>";
                           }
                      } else {
                           echo "Oops! Something went wrong. Please try again later.";
                      }
                      ?>
                  </table>
                </div>
            </div>
        </div>
    </div">
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>
