<?php

declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class Sekolah
{
    /** @var Pegawai[] */
    private array $daftarPegawai = [];

    public function __construct(
        public string $namaSekolah,
    ) {
    }

    public function tambahPegawai(Pegawai $p): void
    {
        $this->daftarPegawai[] = $p;
    }

    public function totalGaji(): float
    {
        $total = 0.0;
        foreach ($this->daftarPegawai as $pegawai) {
            $total += $pegawai->hitungGaji();
        }

        return $total;
    }
}
