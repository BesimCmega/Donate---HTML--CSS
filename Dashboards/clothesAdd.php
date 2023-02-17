<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dashboardsStyle/userDashboard.css">
</head>
<body>
  <nav class="navbar">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  </nav>
  <div class="container">
    <h1>Users</h1>
        <?php
            include '../configDonateClothes.php';
            $clothes = new DatabaseDonateClothes();
            $insert = $clothes->check2();

            ?>
       <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="name">Surname</label>
      <input type="text" id="name" name="surname" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="number">Phone Number</label>
      <input type="number" id="number" name="number" required>

      <label for="adress">Address</label>
      <input type="text" id="adress" name="adress" required>

      <label for="clothes">Clothes</label>
      <input type="text" id="clothes" name="clothes" required><br><br>

      <input type="file" name="image" id="image"><br><br>
      
           
    

      <button type="submit" name="submit">Add Donation</button>
    </form>
    
  </div>
</body>
</html>
