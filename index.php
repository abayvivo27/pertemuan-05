<?php

declare(strict_types=1);

require_once __DIR__ . '/Guru.php';
require_once __DIR__ . '/Staf.php';
require_once __DIR__ . '/Honorer.php';
require_once __DIR__ . '/Sekolah.php';

$guru = new Guru('M. Fitriannur Akbar', 4000000, 24);
$staf = new Staf('Rina Kartika', 3500000, 500000);
$honorer = new Honorer('Budi Santoso', 25000, 80);

$sekolah = new Sekolah('SDN 2 Ketapang');
$sekolah->tambahPegawai($guru);
$sekolah->tambahPegawai($staf);
$sekolah->tambahPegawai($honorer);

echo "=== {$sekolah->namaSekolah} ===\n";
echo $guru->info() . "\n";
echo $staf->info() . "\n";
echo $honorer->info() . "\n";
echo "Total Gaji Seluruh Pegawai: " . number_format($sekolah->totalGaji(), 0, ',', '.') . "\n";

/*
 * Percobaan override method final info():
 * Jika class anak mendeklarasikan ulang method info(), PHP mengeluarkan:
 * Fatal error: Cannot override final method Pegawai::info()
 */
