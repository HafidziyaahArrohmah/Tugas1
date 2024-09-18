<?php
//Definisi (membuat) class
class Pengguna {
    //membuat protected properties
    protected $nama;

    //membuat konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //membuat metod getNama() untuk mengambil nilai nama
    public function getNama() {
        return $this->nama;
    }
}
//membuat class dosen yang merupakan turunan dari class pengguna
class Dosen extends Pengguna {
    //membuat private properties
    private $mataKuliah;

    //membuat konstruktor
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    //membuat metod tampilDosen() untuk menampilkan data datail dosen
    public function tampilDosen() {
        return "Nama Dosen: $this->nama Nama Mata Kuliah: $this->mataKuliah";
    }
}
//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$dosen1 = new Dosen ("Annisa", "Bahasa Indonesia");
echo $dosen1->tampilDosen();
echo "<br>"; 
echo $dosen1->getNama();
?>