<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Record Donation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container form-card">
  <h2>Record Donation</h2>

  <form method="POST">
    <label>Food Item</label>
    <select name="food_id" required>
      <option value="">-- Select Food Item --</option>
      <?php
      $res = mysqli_query($connection,
        "SELECT f.food_id, f.food_name, d.name AS donor
         FROM Food_Items f
         JOIN Donor d ON f.donor_id = d.donor_id");

      while($f = mysqli_fetch_assoc($res)){
        echo "<option value='{$f['food_id']}'>
              {$f['food_name']} (Donor: {$f['donor']})
              </option>";
      }
      ?>
    </select>

    <label>Receiver</label>
    <select name="receiver_id" required>
      <option value="">-- Select Receiver --</option>
      <?php
      $res2 = mysqli_query($connection, "SELECT receiver_id, name FROM Receiver");
      while($r = mysqli_fetch_assoc($res2)){
        echo "<option value='{$r['receiver_id']}'>{$r['name']}</option>";
      }
      ?>
    </select>

    <label>Donated Time</label>
    <input type="datetime-local" name="donated_time" required>

    <button type="submit" name="submit">Record Donation</button>
  </form>

<?php
if(isset($_POST['submit'])){
    $food_id = $_POST['food_id'];
    $receiver_id = $_POST['receiver_id'];
    $donated_time = $_POST['donated_time'];

    $sql = "INSERT INTO Donations (food_id, receiver_id, donated_time)
            VALUES ('$food_id', '$receiver_id', '$donated_time')";

    if(mysqli_query($connection, $sql)){
        echo "<p class='success'>Donation recorded successfully</p>";
    } else {
        echo "<p class='error'>" . mysqli_error($connection) . "</p>";
    }
}
?>

<p><a href="index.php">← Back to Home</a></p>
</div>

</body>
</html>
