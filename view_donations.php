<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Donation History - FoodTracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container table-card">
    <h2>Donation History</h2>
    <table>
      <thead>
        <tr><th>ID</th><th>Food</th><th>Donor</th><th>Receiver</th><th>Time</th></tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT dn.donation_id, f.food_name, d.name AS donor_name, r.name AS receiver_name, dn.donated_time FROM donations dn JOIN food_items f ON dn.food_id = f.food_id JOIN donor d ON f.donor_id = d.donor_id JOIN receiver r ON dn.receiver_id = r.receiver_id ORDER BY dn.donation_id DESC";
        $res = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($res)){
          echo "<tr>".
               "<td>".htmlspecialchars($row['donation_id'])."</td>".
               "<td>".htmlspecialchars($row['food_name'])."</td>".
               "<td>".htmlspecialchars($row['donor_name'])."</td>".
               "<td>".htmlspecialchars($row['receiver_name'])."</td>".
               "<td>".htmlspecialchars($row['donated_time'])."</td>".
               "</tr>";
        }
        ?>
      </tbody>
    </table>
    <p class="small"><a href="index.php">← Back to Home</a></p>
  </div>
</body>
</html>
