<?php
//Membuat Class
class Dosen {
    //Atribut atau Properties
    //Membuat atribut menggunakan mode public, mode public bisa diakses oleh semua kelas
    public $nama;
    public $nip;
    public $mataKuliah;

    //Membuat konstruktor untuk mengatur nilai awal dari objek saat pertama kali dibuat
    //Menginisialisasi atribut yang diberikan
    public function __construct($nama, $nip, $mataKuliah) {
        //$this->nama = $nama adalah sintaks yang digunakan untuk mengatur nilai dari properti objek
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //Membuat metod tampilkanDosen() untuk melakukan fungsi tampil data
    public function tampilkanDosen() {
        //Hasil pengembalian nilai yang akan ditampilkan saat pemanggilan metod tampilkanDosen()
        return "Dosen $this->nama dengan nip $this->nip mengajar mata kuliah $this->mataKuliah.";
    }
}

//Instansiasi Objek (manambahkan objek)
// new Dosen (membuat sebuah instansi baru dari kelas Dosen)
//("Annisa", "2308", "Bahasa Indonesia") argumen yang diberikan ke konstruktor kelas Mahasiswa
$dosen1 = new Dosen("Annisa", "2308", "Bahasa Indonesia");

//Menampilkan objek
// -> digunakan untuk memanggil metod objek
echo $dosen1->tampilkanDosen();
?>