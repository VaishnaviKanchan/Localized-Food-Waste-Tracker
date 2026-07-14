<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "food_waste");

if (!$connection) {
    die("DB Connection Failed");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin 
              WHERE username='$username' 
              AND password='$password'";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;

        // ✅ Redirect to MAIN FOOD WASTE PAGE
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
body { font-family: Arial; background: #eaf2ff; }
.box {
    width: 320px;
    margin: 120px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
}
input, button {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
}
button {
    background: #007bff;
    color: white;
    border: none;
}
</style>
</head>
<body>

<div class="box">
<h2>Admin Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="login">Login</button>
</form>

<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

</div>

</body>
</html>
