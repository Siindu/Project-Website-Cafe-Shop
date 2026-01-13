<?php
include "koneksi.php";

// Pastikan data POST ada
if (isset($_POST['nomor_meja']) && isset($_POST['tanggal_reservasi'])) {
  $meja = mysqli_real_escape_string($conn, $_POST['nomor_meja']);
  $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal_reservasi']);

  $query = mysqli_query($conn, "SELECT jam_reservasi, jam_selesai FROM reservasi 
    WHERE nomor_meja = '$meja' AND tanggal_reservasi = '$tanggal'");

  $jam_terlarang = [];
  while ($row = mysqli_fetch_assoc($query)) {
    $mulai = strtotime($row['jam_reservasi']);
    $selesai = strtotime($row['jam_selesai']);
    for ($i = $mulai; $i < $selesai; $i += 3600) {
      $jam_terlarang[] = date('H:i', $i);
    }
  }

  $list_jam = [
    "08:00" => "08:00 am", "09:00" => "09:00 am", "10:00" => "10:00 am", 
    "11:00" => "11:00 am", "12:00" => "12:00 pm", "13:00" => "01:00 pm", 
    "14:00" => "02:00 pm", "15:00" => "03:00 pm", "16:00" => "04:00 pm", 
    "17:00" => "05:00 pm", "18:00" => "06:00 pm", "19:00" => "07:00 pm", 
    "20:00" => "08:00 pm", "21:00" => "09:00 pm", "22:00" => "10:00 pm"
  ];

  echo '<option value="" disabled selected>Jam</option>';
  foreach ($list_jam as $key_24 => $display_12) {
    if (in_array($key_24, $jam_terlarang)) {
      echo "<option value='$display_12' class='filled' disabled>$display_12 (Terisi)</option>";
    } else {
      echo "<option value='$display_12'>$display_12</option>";
    }
  }
} else {
  echo '<option value="">Error: Data tidak diterima</option>';
}
?>