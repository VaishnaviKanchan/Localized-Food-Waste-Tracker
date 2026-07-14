<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Food Item</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container form-card">
  <h2>Add Food Item</h2>

  <form method="POST">
    <label>Donor</label>
    <select name="donor_id" required>
      <option value="">-- Select Donor --</option>
      <?php
      $res = mysqli_query($connection, "SELECT donor_id, name FROM Donor ORDER BY name");
      while($d = mysqli_fetch_assoc($res)){
        echo "<option value='{$d['donor_id']}'>{$d['name']}</option>";
      }
      ?>
    </select>

    <input type="text" name="food_name" placeholder="Food Name" required>
    <input type="number" name="quantity" placeholder="Quantity (eg. plates)" required>

    <label>Prepared Time</label>
    <input type="datetime-local" name="prepared_time" required>

    <label>Expiry Time</label>
    <input type="datetime-local" name="expiry_time" required>

    <button type="submit" name="submit">Add Food</button>
  </form>

<?php
if(isset($_POST['submit'])){
    $donor_id = $_POST['donor_id'];
    $food_name = $_POST['food_name'];
    $quantity = $_POST['quantity'];
    $prepared_time = $_POST['prepared_time'];
    $expiry_time = $_POST['expiry_time'];

    $sql = "INSERT INTO Food_Items (donor_id, food_name, quantity, prepared_time, expiry_time)
            VALUES ('$donor_id', '$food_name', '$quantity', '$prepared_time', '$expiry_time')";

    if(mysqli_query($connection, $sql)){
        echo "<p class='success'>Food item added successfully.</p>";
    } else {
        echo "<p class='error'>Error: " . mysqli_error($connection) . "</p>";
    }
}
?>

<p><a href="index.php">← Back to Home</a></p>
</div>

</body>
</html>
