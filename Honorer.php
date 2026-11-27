<?php

declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class Honorer extends Pegawai
{
    public function __construct(
        string $nama,
        float $gajiPerJam,
        public int $jamKerja,
    ) {
        parent::__construct($nama, $gajiPerJam);
    }

    public function hitungGaji(): float
    {
        return $this->gajiPokok * $this->jamKerja;
    }
}
