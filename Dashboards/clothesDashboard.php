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
    
     <a href="clothesAdd.php">  <button type="submit" name="submit" id="userAdd">Add Donation</button><br> <br> </a> 
    
    <table>
      <thead>
        <tr>
           <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Clothes</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
 
        include '../configDonateClothes.php';
        $clothes = new DatabaseDonateClothes();
        $rows = $clothes->fetch();
        if(!empty($rows)){
        foreach($rows as $row){ 
       ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phoneNumber']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['clothes']; ?></td>
                <td><img src="../Fotot/<?php echo $row['images']; ?>" width="300px" height="200px"></td>
                <td>
                  <a href="clothesDelete.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  
                  
                </td>
              </tr>
              <?php
                }
                
              }
              
              else{
                echo "There is no data!";
              }
            ?>
      </tbody>
    </table>
  </div>
</body>
</html>
