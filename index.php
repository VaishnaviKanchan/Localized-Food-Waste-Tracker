<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Localized Food Waste Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="hero">
    <div class="container">
      <h1>Localized Food Waste Tracker</h1>
      <p class="lead">Connect donors with receivers and reduce food waste — demo (modern UI)</p>
      <nav class="nav">
        <a class="btn" href="add_donor.php">Add Donor</a>
        <a class="btn" href="add_food.php">Add Food</a>
        <a class="btn" href="add_receiver.php">Add Receiver</a>
        <a class="btn" href="donate.php">Make Donation</a>
        <a class="btn ghost" href="view_donors.php">View Donors</a>
        <a class="btn ghost" href="view_food.php">View Food</a>
        <a class="btn ghost" href="view_donations.php">Donation History</a>
      </nav>
    </div>
  </header>

  <main class="container cards">
    <section class="card">
      <h3>How it works</h3>
      <p>Donors add food items with expiry time. Receivers (NGOs) get matched and donations are recorded.</p>
      <ul>
        <li>Add donors (hotels, messes)</li>
        <li>Add food items linked to donors</li>
        <li>Add receivers (NGOs)</li>
        <li>Record donations (food → receiver)</li>
      </ul>
    </section>

    <section class="card">
      <h3>Demo tips</h3>
      <p>To prepare your submission:</p>
      <ol>
        <li>Add 1-2 donors</li>
        <li>Add 1-2 food items (set prepared & expiry times)</li>
        <li>Add 1 receiver</li>
        <li>Record a donation</li>
        <li>Open view pages and take screenshots for your PPT</li>
      </ol>
    </section>
  </main>

  <footer class="footer">Made for DBMS Mini Project — Localized Food Waste Tracker</footer>
</body>
</html>
