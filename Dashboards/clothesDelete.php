<?php 
    include '../configDonateClothes.php';
    $clothes = new DatabaseDonateClothes();
    $id = $_REQUEST['id'];
    $delete = $clothes->delete($id);
 
    if ($delete) {
        echo "<script>alert('Donation has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'clothesDashboard.php';</script>";
    }
 ?>