<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Donors - FoodTracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container table-card">
    <h2>Donors</h2>
    <table>
      <thead>
        <tr><th>ID</th><th>Name</th><th>Location</th><th>Phone</th></tr>
      </thead>
      <tbody>
        <?php
        $res = mysqli_query($connection, "SELECT * FROM donor ORDER BY donor_id DESC");
        while($row = mysqli_fetch_assoc($res)){
          echo "<tr>\n".
               "<td>".htmlspecialchars($row['donor_id'])."</td>".
               "<td>".htmlspecialchars($row['name'])."</td>".
               "<td>".htmlspecialchars($row['location'])."</td>".
               "<td>".htmlspecialchars($row['phone'])."</td>\n".
               "</tr>";
        }
        ?>
      </tbody>
    </table>
    <p class="small"><a href="index.php">← Back to Home</a></p>
  </div>
</body>
</html>
