<?php
include "koneksi.php";

if (isset($_POST['submit_testimoni'])) {
  $nama = mysqli_real_escape_string($conn, $_POST['nama']);
  $rating = $_POST['rating'];
  $komentar = mysqli_real_escape_string($conn, $_POST['komentar']);

  $query = "INSERT INTO testimoni (nama_pelanggan, rating, komentar) VALUES ('$nama', '$rating', '$komentar')";

  if (mysqli_query($conn, $query)) {
      echo "<script>
              alert('Terima kasih! Ulasan Anda akan kami tinjau terlebih dahulu.');
              window.location.href='index.php';
            </script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>