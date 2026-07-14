<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Food Items - FoodTracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container table-card">
    <h2>Food Items</h2>
    <table>
      <thead>
        <tr><th>Food ID</th><th>Donor</th><th>Food Name</th><th>Qty</th><th>Prepared</th><th>Expiry</th></tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT f.food_id, f.food_name, f.quantity, f.prepared_time, f.expiry_time, d.name AS donor_name FROM food_items f LEFT JOIN donor d ON f.donor_id = d.donor_id ORDER BY f.food_id DESC";
        $res = mysqli_query($connection, $sql);
        while($r = mysqli_fetch_assoc($res)){
          echo "<tr>".
               "<td>".htmlspecialchars($r['food_id'])."</td>".
               "<td>".htmlspecialchars($r['donor_name'])."</td>".
               "<td>".htmlspecialchars($r['food_name'])."</td>".
               "<td>".htmlspecialchars($r['quantity'])."</td>".
               "<td>".htmlspecialchars($r['prepared_time'])."</td>".
               "<td>".htmlspecialchars($r['expiry_time'])."</td>".
               "</tr>";
        }
        ?>
      </tbody>
    </table>
    <p class="small"><a href="index.php">← Back to Home</a></p>
  </div>
</body>
</html>
