<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM portofolio";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>M YOGA DWI NURCHOLIS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <nav>
    <ul class="menu">
      <li><a href="#beranda">Beranda</a></li>
      <li><a href="#tentang">Tentang Saya</a></li>
      <li><a href="#portofolio">Portofolio</a></li>
      <li><a href="#opini">Opini</a></li> 
      <li><a href="#kontak">Hubungi Saya</a></li>
      <li class="dropdown">
        <a href="#">Lainnya</a>
        <div class="dropdown-content">
          <a href="https://www.instagram.com/ygabyn_27" target="_blank">Instagram</a>
          <a href="https://www.tiktok.com/@yann7714" target="_blank">Tiktok</a>
        </div>
      </li>
    </ul>
  </nav>
</header>

<section class="intro" id="beranda">
  <img src="foto1.jpg" alt="Foto saya" width="290">
  <div class="deskripsi">
    <h1>MUHAMMAD YOGA DWI NURCHOLIS</h1>
    <p>Cyber Scurity</p>
  </div>
</section>

<hr>
<section class="tentang-saya" id="tentang">
  <h1 style="text-align: left;">Tentang Saya</h1>
  <div class="tentang-container">
    <div style="flex: 1;" class="tentang-text">
      <br>Saya Muhammad Yoga Dwi Nurcholis, lahir di Bojonegoro pada 14 September 2004,saat ini berusia 20 tahun. Saya tinggal di Desa Genjor, Kecamatan Sugihwaras, Kabupaten Bojonegoro. </br>
      <br>Saya mahasiswa aktif di universitas nahdlatul ulama sunan giri,ketertarikan dan minat saya di dunia Teknologi sudah sejak di bangku smk, pengalaman saya pernah mengikuti Lomba Kompetensi Siswa (LKS) Jatim bidlom Mobile Robotics dan ROBOKids Robot Olympiad (RRO),saya bercita - cita ingin menjadi seorang cyber security profesional.</br>
      <p><i></i></p>
    </div>
    <div class="foto2">
      <img src="foto2.jpg" alt="Tentang Saya" width="250">
    </div>
  </div>
</section>

<h2>Data Mahasiswa</h2>

        <!-- Form Tambah Data -->
    <h3>Tambah Data Mahasiswa</h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>ID:</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>NAMA KEGIATAN:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>WAKTU KEGIATAN:</label>
            <textarea name="waktu_kegiatan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>NAMA KEGIATAN</th>
            <th>WAKTU KEGIATAN</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <!-- <td><?php echo $no++; ?></td> -->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" 
                   class="btn btn-primary" 
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

<section class="opini" id="opini">
  <h2>Opini :</h2>
  <div class="grid-opini">
    <div class="item-opini">
      <img src="opini1.png" alt="Opini 1">
      <a href=https://id.wikipedia.org/wiki/Emha_Ainun_Nadjib><p>Tokoh Intelektual dan Budayawan</p></a>
    </div>
    <div class="item-opini">
      <img src="opini2.png" alt="Opini 2">
      <a href=https://www.berjutapena.or.id/sejarah-ipnu-ippnu><p >IPNU IPPNU</p></a>
    </div>
    <div class="item-opini">
      <img src="opini3.png" alt="Opini 3">
      <a href="https://unugiri.ac.id/"><p>Universitas Nahdlatul Ulama Sunan Giri</p></a>
    </div>
    <div class="item-opini">
      <img src="opini4.png" alt="Opini 4">
      <a href=https://www.uph.edu/teknik-informatika-keunggulan-jurusan-dan-prospek-karir><p>Informatic Engineering</p></a>
    </div>
    <div class="item-opini">
      <img src="opini5.png" alt="Opini 5">
      <a href=https://www.antaranews.com/berita/3996171/perkembangan-teknologi-robotika-dan-manfaat-robot><p>Perkembangan Teknologi Robotika</p></a>
    </div>
    <div class="item-opini">
      <img src="opini6.png" alt="Opini 6">
    <a href=https://www.dicoding.com/blog/cyber-security-pengertian-jenis-dan-ancamannya/> <p>Cyber Security</p></a>
    </div>
  </div>
</section>

<hr>

<section class="kontak" id="kontak">
  <h2>Hubungi Saya :</h2>
  <div class="kontak-container">
    <form class="form-kontak">
      <input type="email" placeholder="Email">
      <input type="text" placeholder="Nama">
      <input type="text" placeholder="Subjek">
      <textarea placeholder="Pesan"></textarea>
      <button type="submit">Kirim</button>
    </form>
    <div class="maps-kontak">
        <p class="maps">Maps:</p>
        <p> </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d15831.263706614798!2d111.94503486156465!3d-7.261778869786595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1746387624077!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
    </div>
  </div>
</section>

<footer>
  <p>© By: Yogabayan_27</p>
</footer>

</body>
</html>

    <style>
        body { font-family: Arial, sans-serif;  }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
</head>
</html>