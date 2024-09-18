<?php
//membuat kelas abstrak
abstract class Pengguna {
    //membuat protected properties
    protected $nama;

    //membuat konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //membuat abstrak metod aksesFitur()
    abstract public function aksesFitur();
}
//membuat kelas dosen yang merupakan kelas turunan dari pengguna
class Dosen extends Pengguna {
    //membuat metod aksesFitur() untuk menjelaskan akses fitur pengguna
    public function aksesFitur(){
        return "Dosen $this->nama bisa memasukkan nilai mahasiswa";
    }
}
//membuat kelas mahasiswa yang merupakan kelas turunan dari pemngguna
class Mahasiswa extends Pengguna {
    //membuat metod aksesFitur() untuk menjelaskan akses fitur mahasiswa
    public function aksesFitur() {
        return "Mahasiswa $this->nama bisa melihat nilai";
    }
}
//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$mahasiswa1 = new Mahasiswa ("Anita");
echo $mahasiswa1->aksesFitur();
echo "<br>";

$dosen1 = new Dosen ("Dinda");
echo $dosen1->aksesFitur();
?>