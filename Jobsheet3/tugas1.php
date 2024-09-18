<?php
//Definisi (membuat) kelas Person
class Person {
    //membuat protected properties
    protected $nama;

    //membuat konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //membuat metod grtRole() untuk digunakan oleh kelas turunan
    public function getRole() {
        
    }
}
//membuat kelas dosen yang merupakan kelas turunan dari kelas Person
class Dosen extends Person {
    //membuat private properties
    private $nip;
    private $matakuliah;

    //membuat konstruktor
    public function __construct($nama, $nip, $matakuliah) {
        parent::__construct($nama);
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    //membuat metod getInfo() untuk menampilkan info terkait dosen
    public function getInfo() {
        return "Info dosen -> Nama = $this->nama NIP = $this->nip Mata Kuliah = $this->matakuliah";
    }

    //membuat metod getRole() untuk menampilkan status dosen
    public function getRole() {
        return "$this->nama sebagai dosen";
    }

    //membuat metod setNama() untuk mengganti nilai nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    //membuat metod getNama() untuk mengembalikan nilai nama
    public function getNama() {
        return $this->nama; 
    }

    //membuat metod setNip() untuk mengganti nilai nip
    public function setNip($nip) {
        $this->nip = $nip;
    }

    //membuat metod getNip() untuk mengembalikan nilai nip
    public function getNip() {
        return $this->nip;
    }
}
//membuat kelas Mahasiswa yang merupakan kelas turunan dari kelas Person
class Mahasiswa extends Person {
    //membuat private properties
    private $nim;
    private $jurusan;

    //membuat konstruktor
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat metod getInfo() untuk menampilkan info terkait mahasiswa
    public function getInfo() {
        return "Info mahasiswa -> Nama = $this->nama NIM = $this->nim Jurusan = $this->jurusan";
    }

    //membuat metod getRole() untuk menampilkan status mahasiswa
    public function getRole() {
        return "$this->nama sebagai mahasiswa";
    }

    //membuat metod setNama() untuk mengganti nilai nama 
    public function setNama($nama) {
        $this->nama = $nama;
    }

    //membuat metod getNama() untuk mengambil nilai nama
    public function getNama() {
        return $this->nama; 
    }

    //membuat metod setNim() untuk mengganti nilai nim
    public function setNim($nim) {
        $this->nim = $nim; 
    }

    //membuat metod getNim() untuk mengambil nilai nim
    public function getNim() {
        return $this->nim;
    }
}
//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$mahasiswa1 = new Mahasiswa("Hafidziyah", "230302082", "TI");
echo $mahasiswa1->getInfo() . "<br>";
echo $mahasiswa1->getRole() . "<br>";

$mahasiswa1->setNama("Anin");
$mahasiswa1->setNim("240302082");
echo $mahasiswa1->getNama() . "<br>";
echo $mahasiswa1->getNim() . "<br>";
echo $mahasiswa1->getInfo() . "<br>";

$dosen1 = new Dosen("Bagas", "24089", "Pancasila");
echo $dosen1->getInfo() . "<br>";
echo $dosen1->getRole() . "<br>";

$dosen1->setNama("Salsa");
$dosen1->setNip("240765");
echo $dosen1->getNama() . "<br>";
echo $dosen1->getNip() . "<br>";
echo $dosen1->getInfo() . "<br>";
?>
