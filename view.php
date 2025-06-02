<?php
// Panggil file koneksi
include 'koneksi.php';

$sql = "SELECT 
          mahasiswa.nim,
          mahasiswa.nama AS nama_mahasiswa,
          matakuliah.nama_mk,
          nilai.nilai
        FROM nilai
        JOIN mahasiswa ON nilai.nim = mahasiswa.nim
        JOIN matakuliah ON nilai.kode_mk = matakuliah.kode_mk";

$result = mysqli_query($koneksi, $sql);


// Query untuk mengambil data dari tb_mahasiswa
// $query = "SELECT * FROM nilai";
// $result = mysqli_query($koneksi, $query);

// Cek apakah data ditemukan
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>No</th><th>NIM</th><th>Nama</th><th>Prodi</th></tr>";
    
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
          <td>{$row['nim']}</td>
          <td>{$row['nama_mahasiswa']}</td>
          <td>{$row['nama_mk']}</td>
          <td>{$row['nilai']}</td>
        </tr>";
      }
      

    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}
?>
