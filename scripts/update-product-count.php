<?php

include("connection.php");

  // form verilerini al
  $id = $_POST['id'];
  $yeni_adet = $_POST['quantity'];



  // veritabanında güncelleme işlemini gerçekleştir
  $query = "UPDATE cart SET quantity = '$yeni_adet' WHERE id = '$id'";
  mysqli_query($conn, $query);

  // Adeti 0 olan ürünleri silecek sorguyu çalıştırın
  $sql = "DELETE FROM cart WHERE quantity <= 0";
  mysqli_query($conn, $sql);



header("Location: /cart.php");

?>