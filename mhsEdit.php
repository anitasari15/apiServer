<?php
   require_once('config.php');
if($_SERVER['REQUEST_METHOD']=='POST') {
   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
     $sql = "UPDATE tb_mhs SET nim = '$nim', nama='$nama' WHERE id = '$id'";
     if(mysqli_query($con,$sql)) {
       $response["success"] = 1;
       $response["message"] = "Berhasil";
       echo json_encode($response);
     } else {
       $response["success"] = 0;
       $response["message"] = "Gagal";
       echo json_encode($response);
     }
   mysqli_close($con);
  } else {
    $response["success"] = 0;
    $response["message"] = "Error";
    echo json_encode($response);
  }
?>