<?php

declare(strict_types=1);

class Pegawai
{
    public function __construct(
        public string $nama,
        public float $gajiPokok,
    ) {
    }

    public function hitungGaji(): float
    {
        return $this->gajiPokok;
    }

    final public function info(): string
    {
        return "Pegawai: {$this->nama} | Gaji: " . number_format($this->hitungGaji(), 0, ',', '.');
    }
}
