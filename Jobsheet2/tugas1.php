<?php
//Definisi (membuat) Class
class Mahasiswa {
    //Atribut atau Properties
    //Membuat atribut menggunakan mode public, mode public bisa diakses oleh semua kelas
    public $nama;
    public $nim;
    public $jurusan;

    //Membuat metode tampilkanData() untuk melakukan fungsi tampil data
    public function tampilkanData() {
        return "Nama = $this->nama NIM = $this->nim Jurusan = $this->jurusan.";
    }
}

//Instansiasi Objek (manambahkan objek)
// new Mahasiswa (membuat sebuah instansi baru dari kelas mahasiswa)

$mahasiswa1 = new Mahasiswa ();
//memberikan nilai dari properti objek
$mahasiswa1->nama = "Hafidziyah Arrohmah";
$mahasiswa1->nim = "230302082";
$mahasiswa1->jurusan = "TI";

//Menampilkan objek
// -> digunakan untuk memanggil metode objek
echo $mahasiswa1->tampilkanData(); 
?>
