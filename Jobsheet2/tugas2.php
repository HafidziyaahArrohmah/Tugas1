<?php
//Definisi (membuat) Class
class Mahasiswa {
    //Atribut atau Properties
    //Membuat atribut menggunakan mode private, mode private  hanya bisa diakses oleh kelas itu sendiri
    private $nama;
    private $nim;
    private $jurusan;

    //Membuat konstruktor untuk mengatur nilai awal dari objek saat pertama kali dibuat
    //Menginisialisasi atribut yang diberikan
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Membuat metod
    //get : untuk mengambil nilai
    //set : untuk memasukkan/mengganti nilai
    public function getNama() {
        return $this->nama;
    }

    //membuat metod setNama() untuk mengubah nilai nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    //membuat metod getNim() untuk mengambil nilai nim
    public function getNim() {
        return $this->nim;
    }

    //membuat metod setNim() untuk mengubah nilai nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    //membuat metod getJurusan() untuk mengambil nilai jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    //membuat metod setJurusan() untuk mengubah nilai jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

        //Membuat metode tampilkanData() untuk melakukan fungsi tampil data
    public function tampilkanData() {
        return "Nama = $this->nama NIM = $this->nim Jurusan = $this->jurusan.";
    }
}

//Instansiasi objek dan pemanggilan metod untuk menampilkan hasil dan melakukan aksi
$mahasiswa1 = new Mahasiswa ("Hafidziyah Arrohmah", "230302082", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
echo "<br>";  

$mahasiswa1->setNama("Arrohmah");
$mahasiswa1->setNim("230402082");
$mahasiswa1->setJurusan("Teknik Listrik");

echo $mahasiswa1->tampilkanData();
echo "<br>"; 

echo $mahasiswa1->getNama();
echo "<br>"; 
echo $mahasiswa1->getNim();
echo "<br>"; 
echo $mahasiswa1->getJurusan();
echo "<br>"; 

?>