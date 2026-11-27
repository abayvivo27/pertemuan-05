<?php

declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class Guru extends Pegawai
{
    public function __construct(
        string $nama,
        float $gajiPokok,
        public int $jamMengajar,
    ) {
        parent::__construct($nama, $gajiPokok);
    }

    public function hitungGaji(): float
    {
        return parent::hitungGaji() + ($this->jamMengajar * 50000);
    }
}
