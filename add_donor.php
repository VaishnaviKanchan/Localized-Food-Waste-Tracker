<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Donor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container form-card">
  <h2>Add Donor</h2>

  <form method="POST">
    <input type="text" name="name" placeholder="Donor Name" required>
    <input type="text" name="location" placeholder="Location" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <button type="submit" name="submit">Add Donor</button>
  </form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO Donor (name, location, phone)
            VALUES ('$name', '$location', '$phone')";

    if(mysqli_query($connection, $sql)){
        echo "<p class='success'>Donor added successfully.</p>";
    } else {
        echo "<p class='error'>Error: " . mysqli_error($connection) . "</p>";
    }
}
?>

<p><a href="index.php">← Back to Home</a></p>
</div>

</body>
</html>
