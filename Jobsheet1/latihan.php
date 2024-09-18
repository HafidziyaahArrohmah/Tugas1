<?php
//Membuat Class
class Mahasiswa {
    //membuat properties
    public $nama;
    public $nim;
    public $jurusan;

    //membuat metode tampilkanData()
    public function tampilkanData() {
       return "Nama: $this->nama NIM: $this->nim Jurusan: $this->jurusan."; 
    }

    //membuat konstruktor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat metode untuk update jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
    //membuat metode untuk mengubah nim
    public function ubahNim($nimBaru){
        $this->nim = $nimBaru;
    }
}

//Instansiasi objek dan pemanggilan metode untuk menampilkan hasil
$nama1 = new Mahasiswa("Hafidziyah Arrohmah", "230302082", "TI");
echo $nama1->tampilkanData();
echo "<br>";

$nama1->updateJurusan("TE");
echo $nama1->tampilkanData();
echo "<br>";

$nama1->ubahNim("240302082");
echo $nama1->tampilkanData();
?>
