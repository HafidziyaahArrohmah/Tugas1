<?php
//membuat kelas abstrak Course
abstract class Course {
    // Membuat metode abstrak untuk diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}
//membuat kelas OnlineCourse yang merupakan turunan dari kelas Course
class OnlineCourse extends Course {
    //membuat private properties
    private $namaOnline;
    private $waktuOnline;

    //membuat konstruktor
    public function __construct($namaOnline, $waktuOnline) {
        $this->namaOnline = $namaOnline;
        $this->waktuOnline = $waktuOnline;
    }

    //membuat metod getCourseDetails() untuk menampilkan informasi
    public function getCourseDetails() {
        return "Kursus Online: $this->namaOnline dilakukan pada hari $this->waktuOnline";
    }
}
//membuat kelas OfflineCourse yang merupakan kelas turunan dari kelas Course
class OfflineCourse extends Course {
    //membuat private properties
    private $namaOffline;
    private $tempatOffline;

    //membuat konstruktor
    public function __construct($namaOffline, $tempatOffline) {
        $this->namaOffline = $namaOffline;
        $this->tempatOffline = $tempatOffline;
    }

    //membuat metod getCourseDetails() untuk menampilkan informasi
    public function getCourseDetails() {
        return "Kursus Offline: $this->namaOffline dilakukan di tempat $this->tempatOffline";
    }
}

//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$online1 = new OnlineCourse("Privat Al-Faiz", "Minggu");
echo $online1->getCourseDetails();
echo "<br>";

$offline1 = new OfflineCourse("Brain Academy", "Cilacap");
echo $offline1->getCourseDetails();
echo "<br>";
?>
