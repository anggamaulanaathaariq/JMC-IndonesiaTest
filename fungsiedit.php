<?php
$koneksi = mysqli_connect("localhost", "root", "", "sdhpjl");
if (isset($_REQUEST['id'])){
      $id=$_REQUEST['id'];
      $username = $_POST['username'];
      $pass =$_POST['pass'];
      
      $update = " UPDATE user SET username = '$username', pass = '$pass' WHERE user.username = '$id' ";

      if ($koneksi->query($update) === TRUE) {
            echo "Record updated successfully";
      } else {
            echo "Error updating record: " . $koneksi->error;
      }

      // $result = mysqli_query($koneksi, $update) or die ( mysqli_error());
      // header("location:./mainpage.php");
      $koneksi->close();
}
?>