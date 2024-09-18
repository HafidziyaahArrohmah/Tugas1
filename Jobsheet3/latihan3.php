<?php
//Definisi (membuat) kelas Person
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
    //membuat private properties
    private $studentID;

    //membuat konstruktor
    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    //membuat metod setStudentID() untuk mengganti nilai studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    //membuat metod getStudentID() untuk mengambil nilai studentID
    public function getStudentID() {
        return "Student ID: $this->studentID";
    }

    //membuat metod setName() untuk mengganti nilai nama
    public function setName($nama) {
        $this->nama = $nama;
    }

    //membuat metod getName() untuk mengambil nilai nama
    public function getName() {
        return "Student: $this->nama";
    }
}
//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$student1 = new Student ("Alifia", "2309");
echo $student1->getName();
echo "<br>";
echo $student1->getStudentID();
echo "<br>";

echo $student1->setName("Ayu");
echo $student1->getName();
echo "<br>";

echo $student1->setStudentID("1309");
echo $student1->getStudentID();
echo "<br>";

?>