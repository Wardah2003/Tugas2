<?php
// Daftar nama barang & harga dipisah
$namaBarang = ["Milo", "Energen", "Kopi", "Gula", "Susu"];
$hargaBarang = [4000, 3000, 6000, 15000, 7000];

echo "<h1>--POLGAN MART--</h1>";

// Array untuk simpan hasil belanja
$beli = [];
$total = [];
$jumlah = [];
$grandtotal = 0;

// Pilih barang secara random (tanpa duplikat)
$jumlah_pembelian = rand(2, count($namaBarang));
$indexBarang = range(0, count($namaBarang) - 1); // daftar index 0 - 4
shuffle($indexBarang); // acak urutan index

for ($i = 0; $i < $jumlah_pembelian; $i++) {
    $idx = $indexBarang[$i]; // ambil index ke-i dari hasil shuffle

    $nama = $namaBarang[$idx];
    $harga = $hargaBarang[$idx];
    $kuantitas = rand(1, 3);
    $total = $harga * $kuantitas;
    $grandtotal += $total;

    $beli[] = [
        "nama" => $nama,
        "harga" => $harga,
        "jumlah" => $kuantitas,
        "total" => $total
    ];
}

