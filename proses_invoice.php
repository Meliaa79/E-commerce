<?php
// Mendapatkan data yang dikirim dari form
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga']; // Ini berupa string, harus dikonversi ke angka
$jumlah = $_POST['jumlah'];
$total_harga = $_POST['total_harga'];

// Mengubah harga dan total harga menjadi angka
$harga = floatval(str_replace(',', '', $harga)); // Menghilangkan koma jika ada dan mengubah ke float
$total_harga = floatval(str_replace(',', '', $total_harga)); // Sama halnya untuk total harga

// Menampilkan data pesanan
echo "<h1>Detail Pesanan Anda</h1>";
echo "<p><strong>Nama Pelanggan:</strong> " . htmlspecialchars($nama) . "</p>";
echo "<p><strong>Jenis Produk:</strong> " . htmlspecialchars($jenis) . "</p>";
echo "<p><strong>Harga Satuan:</strong> Rp " . number_format($harga, 0, ',', '.') . "</p>";
echo "<p><strong>Jumlah Barang:</strong> " . htmlspecialchars($jumlah) . " pcs</p>";
echo "<p><strong>Total Harga:</strong> Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
?>
