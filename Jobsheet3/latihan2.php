<?php
//definisi (membuat) kelas Person
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
//membuat kelas student yang merupakan kelas turunan dari kelas Person
class Student extends Person {
    //membuat public properties
    public $studentID;

    //membuat konstruktor
    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    //membuat metod getStudentID() untuk mengambil nilai studentID
    public function getStudentID() {
        return "Student ID: $this->studentID";
    }

    //membuat metod getName() untuk mengambil nilai nama
    public function getName() {
        return "Student: $this->nama";
    }
}
//membuat kelas Teacher yang merupakan kelas turunan dari kelas Person
class Teacher extends Person {
    //membuat private properties
    private $teacherID;

    //membuat konstruktor
    public function __construct($nama, $teacherID) {
        parent::__construct($nama);
        $this->teacherID = $teacherID;
    }

    //membuat metod getName() untuk mengambil nilai nama
    public function getName() {
        return "Teacher name is: $this->nama";
    }

    //membuat metod getTeacherID() untuk mengambil nilai teacherID
    public function getTeacherID() {
        return "Teacher ID is: $this->teacherID";
    }
}
//instansiasi obejek baru dan pemanggilan metod untuk menampilkan hasil yang diinginkan
$student1 = new Student ("Alifia", "2309");
echo $student1->getName();
echo "<br>";
echo $student1->getStudentID();
echo "<br>";

$teacher1 = new Teacher ("Manda", "2890");
echo $teacher1->getName();
echo "<br>";
echo $teacher1->getTeacherID();
echo "<br>";
?>