<?php
//Definisi (membuat) kelas
class Person {
    //membuat protected properties
    protected $nama;

    //membuat konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //membuat metod getName() untuk mengambil nilai nama
    public function getName() {
        return $this->nama;
    }
}
//membuat kelas Student yang merupakan kelas turunan dari kelas Person
class Student extends Person {
    //membuat public properties
    public $studentID;

    //membuat konstruktor
    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    //membuat metod getDtudentID() untuk mengambil nilai student ID
    public function getStudentID() {
        return $this->studentID;
    }
}
//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$student1 = new Student ("Alifia", "2309");
echo $student1->getName();
echo "<br>";
echo $student1->getStudentID();

?>
