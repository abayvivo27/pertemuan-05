          +--------------------------+
          |         Pegawai          |
          |--------------------------|
          | + nama : string          |
          | + gajiPokok : float      |
          |--------------------------|
          | + hitungGaji() : float   |
          | + final info() : string  |
          +------------+-------------+
                       ^
        +--------------+--------------+
        |              |              |
+-------+-----+ +------+------+ +-----+--------+
|    Guru     | |    Staf     | |   Honorer    |
|-------------| |-------------| |--------------|
| + jamMengajar| | + tunjangan | | + jamKerja   |
|-------------| |-------------| |--------------|
| + hitungGaji()| | + hitungGaji()| | + hitungGaji()|
+-------------+ +-------------+ +--------------+

Komposisi:
[ Sekolah ] <>----(memiliki banyak)---- [ Pegawai ]
(tambahPegawai(), totalGaji())
