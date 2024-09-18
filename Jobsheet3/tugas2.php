<?php
//membuat kelas absrak Jurnal
abstract class Jurnal{
    //membuat protected properties
    protected $nama;

    //membuat konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }
}
//membuat kelas JurnalDosen yang merupakan kelas turunan dari kelas Jurnal
class JurnalDosen extends Jurnal {
    //membuat private properties
    private $judulDosen;
    private $tanggal;

    //membuat konstruktor
    public function __construct($nama, $judulDosen, $tanggal) {
        parent::__construct($nama);
        $this->judulDosen = $judulDosen;
        $this->tanggal = $tanggal;
    }

    //membuat metod pengajuanJurnal() untuk menampilkan info pengajuan jurnal dosen
    public function pengajuanJurnal(){
        return "Jurnal dengan judul $this->judulDosen yang ditulis oleh $this->nama telah diajukan pada tanggal $this->tanggal";
    }
}
//membuat kelas JurnalMahasiswa yang merupakan kelas turunan dari kelas Jurnal
class JurnalMahasiswa extends Jurnal {
    //membuat private properties
    private $judulMahasiswa;
    private $tgl;

    //membuat konstruktor
    public function __construct($nama, $judulMahasiswa, $tgl) {
        parent::__construct($nama);
        $this->judulMahasiswa = $judulMahasiswa;
        $this->tgl = $tgl;
    }

        //membuat metod pengajuanJurnal() untuk menampilkan info pengajuan jurnal mahasiswa
    public function pengajuanJurnal(){
        return "Jurnal dengan judul $this->judulMahasiswa yang ditulis oleh $this->nama telah diajukan pada tanggal $this->tgl";
    }
}
//membuat metod getCourseDetails() untuk menampilkan informasi
$dosen1 = new JurnalDosen ("Budi", "Jurnal Pendidikan", "25 Maret 2023");
echo $dosen1->pengajuanJurnal();
echo "<br>";

$mahasiswa1 = new JurnalMahasiswa ("Arif", "Jurnal Ilmiah", "27 September 2023");
echo $mahasiswa1->pengajuanJurnal();
echo "<br>";
