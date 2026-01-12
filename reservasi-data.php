<?php
include "koneksi.php";

if (isset($_POST['submit_reservasi'])) {
    $nama    = mysqli_real_escape_string($conn, $_POST['nama_pelanggan']);
    $telp    = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $tanggal = $_POST['tanggal_reservasi'];
    $jam_mulai = $_POST['jam_reservasi']; 
    $meja    = $_POST['nomor_meja'];
    $pesan   = mysqli_real_escape_string($conn, $_POST['pesan']);

    // Konversi jam input ke format MySQL (24 jam)
    $jam_mulai_format = date('H:i:s', strtotime($jam_mulai));
    $jam_selesai = date('H:i:s', strtotime($jam_mulai_format . ' +4 hours'));

    // Cek tabrakan waktu
    $cek = mysqli_query($conn, "SELECT * FROM reservasi 
           WHERE nomor_meja = '$meja' 
           AND tanggal_reservasi = '$tanggal' 
           AND (
               ('$jam_mulai_format' >= jam_reservasi AND '$jam_mulai_format' < jam_selesai) OR 
               ('$jam_selesai' > jam_reservasi AND '$jam_selesai' <= jam_selesai)
           )");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>
                alert('Maaf, Meja $meja sudah terpesan. Durasi setiap meja adalah 4 jam.');
                window.history.back();
              </script>";
    } else {
        $query = "INSERT INTO reservasi (nama_pelanggan, no_hp, tanggal_reservasi, jam_reservasi, jam_selesai, nomor_meja) 
                  VALUES ('$nama', '$telp', '$tanggal', '$jam_mulai_format', '$jam_selesai', '$meja')";
        
        if (mysqli_query($conn, $query)) {
            echo "<script>
                    alert('Berhasil! Meja $meja telah dipesan untuk Anda.');
                    window.location.href='kontak-lokasi.php';
                  </script>";
        }
    }
}
?>