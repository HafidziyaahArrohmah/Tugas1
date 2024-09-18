<?php
//Definisi (membuat) kelas
class Pengguna {
    //membuat protected properties
    protected $nama;

    //membuat konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //membuat metod aksesFitur() untuk menjelaskan akses fitur pengguna
    public function aksesFitur() {
        return "Pengguna $this->nama bisa mengakses sistem";
    }
}

class Dosen extends Pengguna {
    //membuat metod aksesFitur() untuk menjelaskan akses fitur dosen
    public function aksesFitur() {
        return "Dosen $this->nama bisa memasukkan nilai";
    }
}

class Mahasiswa extends Pengguna {
    //membuat metod aksesFitur() untuk menjelaskan akses fitur mahasiswa
    public function aksesFitur() {
        return "Mahasiswa $this->nama bisa melihat nilai";
    }
}
//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$dosen1 = new Dosen("Arifin");
echo $dosen1->aksesFitur();
echo "<br>";

$mahasiswa1 = new Mahasiswa("Putri");
echo $mahasiswa1->aksesFitur();
echo "<br>";

$pengguna1 = new Pengguna("Sandy");
echo $pengguna1->aksesFitur();
echo "<br>";
?>