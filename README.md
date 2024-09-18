`# Tugas1
<h1><b>JOBSHEET 1</b></h1>
Menggunakan Konsep Kelas dan Objek dalam PHP

#Latihan

a.	Membuat class
Kelas merupakan struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek.
Untuk membuat kelas baru, digunakanlah sintaks sebagai berikut:

class Mahasiswa {}

class Mahasiswa digunakan untuk menyimpan data dan fungsi-fungsi terkait dengan objek mahasiswa.
b.	Membuat public properties
Atribut atau properties adalah variabel yang menyimpan data untuk untuk objek.
Public properties merupakan properties yang dapat diakses dari mana saja.
Untuk membuat public properties, digunakanlah sintaks sebagai berikut:
public $nama; = menyimpan nama mahasiswa
public $nim; = menyimpan nim mahasiswa
public $jurusan;  = menyimpan jurusan mahasiswa
c.	Membuat metode
Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.
$this merupakan referensi khusus yang digunakan untuk menunjuk objek pada saat ini, bisa juga diga digunakan untuk mengakses properti dan metode dari objek yang sedang aktif atau instance dari kelas tersebut. Serta digunakan untuk mengatur nilai dari properti objek

a)	Membuat public function (metode) tampilkanData()
Metode ini digunakan untuk menampilkan data.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

    public function tampilkanData() {
       return "Nama: $this->nama NIM: $this->nim Jurusan: $this->jurusan."; 
    }

Metode ini digunakan untuk mengembalikan nilai yang berisi informasi mahasiswa dengan format “Nama:[nama] NIM:[nim] Jurusan:[jurusan]”
b)	Membuat public function (metode) __construct() atau disebut juga dengan konstruktor
Konstruktor digunakan untuk mengatur nilai awal dari objek saat pertama kali dibuat.
Konstruktor juga bisa digunakan untuk menginisialisasi properti dengan nilai yang diberikan saat instansiasi.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

c)	Membuat public function (metode) updateJurusan()
Metode updateJurusan() digunakan untuk mengubah nilai properti dari $jurusan menjadi nilai beru yang diberikan.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

d)	Membuat public function (metode) ubahNim()
Metode ubahNim() digunakan untuk mengubah nilai properti $nim menjadi nilai baru yang diberikan.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

    public function ubahNim($nimBaru){
        $this->nim = $nimBaru;
    }


d.	Melakukan instansiasi dan penggunaan objek
Objek adalah instansiasi dari kelas.
Objek memiliki akses ke atribut dan metode yang didefinisikan dalam kelas
1)	Membuat objek baru
Membuat objek $nama1 dari kelas Mahasiswa dengan nama ”Hafidziyah Arrohmah”, NIM “230302082”, dan jurusan “TI”.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

$nama1 = new Mahasiswa("Hafidziyah Arrohmah", "230302082", "TI");

2)	Memanggil metod
Menampilkan data mahasiswa awal menggunakan metode tampilkanData().
Sintaks yang digunakan dalam memanggil data ini sebagai berikut:

echo $nama1->tampilkanData();

Memperbarui jurusan menjadi “TE” dengan memanggil metode updateJurusan().
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

$nama1->updateJurusan("TE");

Memperbarui NIM menjadi “240302082” dengan memanggil metode ubahNim().
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

$nama1->ubahNim("240302082");

3)	Menampilkan data
Menampilkan data yang diperbarui dengan memanggil metode tampilkanData().
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

echo $nama1->tampilkanData();

#Tugas


a)	Membuat class
Kelas merupakan struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek.
Untuk membuat kelas baru, digunakanlah sintaks sebagai berikut:

class Dosen {}

class Dosen digunakan untuk menyimpan data dan fungsi-fungsi terkait dengan objek dosen
b)	Membuat public properties
Atribut atau properties adalah variabel yang menyimpan data untuk untuk objek.
Public properties merupakan properties yang dapat diakses dari mana saja.
Untuk membuat public properties, digunakanlah sintaks sebagai berikut:
public $nama; = menyimpan nama dosen
public $nip; = menyimpan nip doen
public $matakuliah;  = menyimpan mata kuliah yang diampu dosen
c)	Membuat metode
Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.
$this merupakan referensi khusus yang digunakan untuk menunjuk objek pada saat ini, bisa juga diga digunakan untuk mengakses properti dan metode dari objek yang sedang aktif atau instance dari kelas tersebut. Serta digunakan untuk mengatur nilai dari properti objek
a.	Membuat public function (metode) __construct() atau disebut juga dengan konstruktor
Konstruktor digunakan untuk mengatur nilai awal dari objek saat pertama kali dibuat.
Konstruktor juga bisa digunakan untuk menginisialisasi properti dengan nilai yang diberikan saat instansiasi.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

b.	Membuat public function (metode) tampilkanDosen()
Metode ini digunakan untuk menampilkan data.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

    public function tampilkanDosen() {
        return "Dosen $this->nama dengan nip $this->nip mengajar mata kuliah $this->mataKuliah.";
    }

Metode ini digunakan untuk mengembalikan nilai yang berisi informasi mahasiswa dengan format “Dosen [nama] dengan NIP [nip] mengajar mata kuliah [matakuliah]”

d)	Melakukan instansiasi dan penggunaan objek
Objek adalah instansiasi dari kelas.
Objek memiliki akses ke atribut dan metode yang didefinisikan dalam kelas
1.	Membuat objek baru
Membuat objek $dosen1 dari kelas Dosen dengan nama ”Annisa”, NIP “2308”, dan mata kuliah “Bahasa Indonesia”.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

$dosen1 = new Dosen("Annisa", "2308", "Bahasa Indonesia");

2.	Menampilkan data
Menampilkan data yang diperbarui dengan memanggil metode tampilkanDosen().
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

echo $dosen1->tampilkanDosen();

<h1><b>JOBSHEET 2</b></h1>
Implementasi Prinsip OOP dalam PHP
1.	Membuat Class dan Object
•	Membuat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
Kelas merupakan struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek.

Sintaks yang digunakan untuk membuat class Mahasiswa sebagai berikut:

Class Mahasiswa {}

Sintaks yang digunakan untuk membuat atribut nama, nim dan jurusan sebagai berikut:

public $nama; = menyimpan nama mahasiswa
public $nim; = menyimpan nim mahasiswa
public $jurusan;  = menyimpan jurusan mahasiswa

Public atribut digunakan agar atribut tersebut dapat diakses dari kelas mana saja.
•	Buat metode tampilknData() dalam class Mahasiswa
Metode ini digunakan untuk menampilkan data.
Sintaks yang digunakan dalam penulisan metode ini sebagai berikut:

    public function tampilkanData() {
        return "Nama = $this->nama NIM = $this->nim Jurusan = $this->jurusan.";
    }

$this-> nama digunakan untuk mengatur nilai dari properti objek.

•	Instansiasi objek dari Class mahasiswa dan tampilkan data mahasiswa tersebut
a)	Membuat objek baru

Membuat objek $nama1 dari kelas Mahasiswa dengan nama ”Hafidziyah Arrohmah”, NIM “230302082”, dan jurusan “Teknik Informatika”.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

$nama1 = new Mahasiswa();
$mahasiswa1->nama = "Hafidziyah Arrohmah";
$mahasiswa1->nim = "230302082";
$mahasiswa1->jurusan = "TI";

$mahasiswa1->nama digunakan untuk memberikan nilai dari properti objek. 
b)	Menampilkan data
Menampilkan data mahasiswa dengan menggunakan metode tampilkanData().
Sintaks yang digunakan dalam memanggil data ini sebegai berikut:


echo $mahasiswa1->tampilkanData(); 
•	Output
Output yang dihasilkan sebagai berikut:

Nama = Hafidziyah Arrohmah NIM = 230302082 Jurusan = TI.

2.	Encapsulation
•	Mengubah atribut dalam class Mahasiswa menjadi private
Privat atribut artinya atribut hanya bisa diakses dari dalam kelas Mahasiswa.
Sintaks untuk membuat private atribut sebagai berikut:

private $nama;
private $nim;
private $jurusan;

•	Membuat metode getter dan setter untuk atribut nama, nim, dan jurusan
a)	Metode setNama() , setNim() , setJurusan() merupakan metode setter yang berfungsi untuk mengatur atau mengganti nilai dari atribut privat.
Sintaks yang digunakan adalah sebagai berikut:

public function setNama($nama) { $this->nama = $nama; }
public function setNim($nim) { $this->nim = $nim; }
public function setJurusan($jurusan) { $this->jurusan = $jurusan; }

$this->nama digunakan untuk mengatur nilai dari properti objek.
b)	Metode getNama() , getNim() , getJurusan() merupakan metode getter yang berfungsi untuk mengembalikan nilai dari atribut privat. 
Sintaks yang digunakan adalah sebagai berikut:

public function getNama() { return $this->nama; }
public function getNim() { return $this->nim; }
public function getJurusan() { return $this->jurusan; }

$this->nama digunakan untuk mengatur nilai yang akan dikembalikan dari properti objek.
•	Demonstrasi akses ke atribut menggunakan metode getter dan setter
a)	Menentukan nilai awal dari objek menggunakan bantuan konstruktor
Konstruktor akan dipanggil secara otomatis saat objek mahasiswa dibuat.
Konstruktor menerima 3 parameter yaitu $nama,$nim, dan $jurusan kemudian akan menginisialisasi atribut kelas dengan nilai-nilai tersebut.
Sintaks yang digunakan untuk membuat konstruktor sebagai berikut:

public function __construct($nama, $nim, $jurusan) { $this->nama = $nama; $this->nim = $nim; $this->jurusan = $jurusan; }

$this-> nama digunakan untuk mengatur nilai dari properti objek.
b)	Membuat objek baru
Membuat objek $nama1 dari kelas Mahasiswa dengan nama ”Hafidziyah Arrohmah”, NIM “230302082”, dan jurusan “Teknik Informatika”.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

$mahasiswa1 = new Mahasiswa ("Hafidziyah Arrohmah", "230302082", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();

c)	Demonstrasi metode getter dan setter
Sintaks yang digunakan untuk demostrasi metode setter dan getter sebagai berikut:
$mahasiswa1->setNama("Arrohmah");
$mahasiswa1->setNim("230402082");
$mahasiswa1->setJurusan("Teknik Listrik");

echo $mahasiswa1->tampilkanData();

echo $mahasiswa1->getNama();
echo $mahasiswa1->getNim();
echo $mahasiswa1->getJurusan();

$mahasiswa1->setNama(“Arrohmah”) = untuk mengatur nilai objek
echo $mahasiswa1->tampilkanData() = untuk memanggil metode yang akan dilakukan
•	Output
Output yang dihasilkan sebagai berikut:

Nama = Hafidziyah Arrohmah NIM = 230302082 Jurusan = Teknik Informatika.
Nama = Arrohmah NIM = 230402082 Jurusan = Teknik Listrik.
Arrohmah
230402082
Teknik Listrik

3.	Inheritance
•	Membuat class Pengguna dengan atribut nama dan metode getNama()
a)	Membuat kelas Pengguna
Kelas merupakan struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek.
Sintaks yang digunakan untuk membuat kelas sebagai berikut:

class Pengguna{}

b)	Membuat protected atribut
Atribut yang dibuat bersifat protected yang artinya atribut ini hanya dapat diakses dalam kelas Pengguna dan kelas turunan dari pengguna.
Sintaks yang digunakan sebagai berikut:

protected $nama;

c)	Membuat metode getNama()
Metode ini digunakan untuk mengembalikan nilai dari atribut $nama.
Sintaks yang digunakan sebagai berikut:

public function getNama() { return $this->nama; }

$this->nama berfungsi untuk mengatur nilai yang akan dikembalikan dari atribut $nama

•	Membuat class Dosen yang mewarisi class Pengguna dan menambahkan atribut mataKuliah
a)	Membuat kelas Dosen yang mewarisi kelas Pengguna
Sintaks yang digunakan sebagai berikut:

Class Dosen extends Pengguna {}

extends Pengguna menandakan bahwa kelas Dosen adalah cabang atau subclass dari kelas Pengguna, sehingga kelas Dosen mewarisi semua atribut dan metode dari kelas Pengguna.

b)	Membuat atribut mataKuliah
Sintaks yang digunakan sebagai berikut:

private $mataKuliah;

atribut mataKuliah bersifat private yang artinya atribut tersebut hanya dapat diakses oleh kelas Dosen.

•	Instansiasi objek dari class dosen dan tampilkan data dosen
a)	Membuat konstruktor pada kelas Pengguna
Sintaks yang digunakan sebagai berikut:

public function __construct($nama) { $this->nama = $nama; }

Konstruktor akan dipanggil saat objek Pengguna dibuat.
Konstruktor akan menerima atribut $nama untuk menginisialisasi atribut tersebut.
b)	Membuat konstruktor pada kelas Dosen
Sintaks yang digunakan sebagai berikut:

public function __construct($nama, $mataKuliah) { parent::__construct($nama); $this->mataKuliah = $mataKuliah; }

Konstruktor kelas Dosen menerima 2 parameter atribut yaitu $nama dan $mataKuliah.
Konstruktor ini memanggil konstruktor dari kelas induk menggunakan sintaks parent::__construct dan menginisialisasi atribut mataKuliah
c)	Membuat objek baru
Membuat objek $dosen1 dari kelas Dosen dengan nama ”Annisa”, dan mata kuliah “Bahasa Indonesia”.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

$dosen1 = new Dosen("Annisa",  "Bahasa Indonesia");

d)	Menampilkan data
Menampilkan data yang diperbarui dengan memanggil metode tampilkanDosen().
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

echo $dosen1->tampilkanDosen();

e)	Menggunakan metode getNama
Sintaks yang digunakan sebagai berikut:

echo $dosen1->getNama();

$dosen1->getNama() digunakan untuk memanggil metode
f)	Output
Nama Dosen: Annisa Nama Mata Kuliah: Bahasa Indonesia
Annisa

4.	Polimorphism
•	Membuat kelas Pengguna dengan metode aksesFitur()
a)	Membuat kelas Pengguna
Kelas merupakan struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek.
Sintaks yang digunakan untuk membuat kelas sebagai berikut:

class Pengguna {}

b)	Membuat protected atribut
Atribut yang dibuat bersifat protected yang artinya atribut ini hanya dapat diakses dalam kelas Pengguna dan kelas turunan dari pengguna.
Sintaks yang digunakan sebagai berikut:

protected $nama;

c)	Membuat metode aksesFitur()
Metode ini berfungsi untuk mengembalikan nilai yang menyatakan bahwa pengguna dengan nama tertentu bisa mengakses system.
Sintaks yang digunakan sebagai berikut:

public function aksesFitur() { return "Pengguna $this->nama bisa mengakses sistem"; }
d)	Membuat konstruktor
Konstruktor digunakan untuk menginisialisasi objek dengan nama yang diberikan pada saat objek dibuat.
Sintaks yang digunakan sebagai berikut:

public function __construct($nama) { $this->nama = $nama; }

•	Menerapkan aksesFitur dengan cara berbeda di kelas Dosen dan Mahasiswa
a)	Membuat kelas Dosen yang merupakan turunan dari kelas Pengguna
Kelas Dosen merupakan kelas turunan dari Pengguna sehingga kelas Dosen mewarisi semua properti dan metode dari Pengguna.
Sintaks yang digunakan sebagai berikut:

class Dosen extends Pengguna {}

b)	Override metode aksesFitur()
Metode aksesFitur() yang ada pada kelas dosen di override untuk memberikan penerapan yang berbeda. Dalam kelas Dosen metode ini berfungsi untuk mengembalikan nilai (dosen bisa memasukkan nilai).
Sintaks yang digunakan sebagai berikut:

public function aksesFitur() { return "Dosen $this->nama bisa memasukkan nilai"; }

c)	Membuat kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
Kelas Mahasiswa merupakan kelas turunan dari Pengguna sehingga kelas Mahasiswa mewarisi semua properti dan metode dari Pengguna.
Sintaks yang digunakan sebagai berikut:

class Mahasiswa extends Pengguna {}

d)	Override metode aksesFitur() 
Metode aksesFitur() yang ada pada kelas Mahasiswa di override untuk memberikan penerapan yang berbeda. Dalam kelas Mahasiswa metode ini berfungsi untuk mengembalikan nilai (mahasiswa bisa melihat nilai).
Sintaks yang digunakan sebagai berikut:

public function aksesFitur() { return "Mahasiswa $this->nama bisa memasukkan nilai"; }

•	Melakukan instansiasi objek dari kelas Dosen dan Mahasiswa lalu panggil metode aksesFitur()
a)	Instansiasi objek Dosen
Membuat objek Dosen baru dengan nama Arifin
Sintaks yang digunakan sebagai berikut:

$dosen1 = new Dosen("Arifin");

b)	Instansiasi objek Mahasiswa
Membuat objek Mahasiswa baru dengan nama Putri
Sintaks yang digunakan sebagai berikut:

$mahasiswa1 = new Mahasiswa("Putri");

c)	Instansiasi objek Pengguna
Membuat objek Pengguna baru dengan nama Sandy
Sintaks yang digunakan sebagai berikut:

$pengguna1 = new Pengguna("Sandy");

d)	Memanggil metode aksesFitur()
1)	Untuk objek dosen1 metode aksesFitur() yang dipanggil adalah metode yang ada di kelas  Dosen

echo $dosen1->aksesFitur();

2)	Untuk objek mahasiswa1 metode aksesFitur() yang dipanggil adalah metode yang ada di kelas  Mahasiswa

echo $mahasiswa1->aksesFitur();

3)	Untuk objek pengguna1 metode aksesFitur() yang dipanggil adalah metode yang ada di kelas  Pengguna

echo $pengguna1->aksesFitur();

e)	Output
Output yang dihasilkan adalah sebagai berikut:

Dosen Arifin bisa memasukkan nilai
Mahasiswa Putri bisa melihat nilai
Pengguna Sandy bisa mengakses sistem

5.	Abstraction
•	Membuat class abstrak Pengguna dengan metode abstrak aksesFitur()
a)	Membuat kelas abstrak Pengguna
Pengguna menjadi kelas abstrak (kelas ini bisa diinstansiasi secara langsung).
Kelas abstrak dijadikan dasar bagi kelas-kelas turunan.
Sintaks yang digunakan sebagai berikut:

abstract class Pengguna {}

b)	Membuat protected atribut 
Atribut yang dibuat pada kelas ini dapat diakses oleh kelas Pengguan dan kelas turunannya.
Sintaks yang digunakan sebagai berikut:

protected $nama;

c)	Membuat metode abstrak aksesFitur()
Metode aksesFitur() dideklarasikan sebagai metode abstrak, yang artinya setiap kelas turunan dari kelas Pengguna harus menerapkan metode ini.
Sintaks yang digunakan sebagai berikut:
abstract public function aksesFitur(); }

d)	Membuat konstruktor 
Konstruktor digunakan untuk untuk menginisialisasi nama pengguna pada saat objek dibuat.
Sintaks yang digunakan sebagai berikut:

public function __construct($nama) { $this->nama = $nama; }

•	Menerapkan class Mahasiswa dan Dosen yang menggunakan metode abstrak tersebut
a)	Membuat kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
Kelas Mahasiswa mewarisi kelas Pengguna, sehingga kelas ini dapat menggunakan atribut dan metode dari kelas Pengguna.
Sintaks yang digunakan sebagai berikut:

class Mahasiswa extends Pengguna {}

b)	Menambahkan metode aksesFitur ke dalam kelas Mahasiswa
Kelas ini menggunakan metode aksesFitur(), yang memberikan deskripsi khusus untuk pengguna yang berperan sebagai dosen.
Sintaks yang digunakan sebagai berikut:

public function aksesFitur() { return "Mahasiswa $this->nama bisa melihat nilai"; }

c)	Membuat kelas Dosen yang merupakan turunan dari kelas Pengguna
Kelas Mahasiswa mewarisi kelas Pengguna, sehingga kelas ini dapat menggunakan atribut dan metode dari kelas Pengguna.
Sintaks yang digunakan sebagai berikut:

class Dosen extends Pengguna{}

d)	Menambahkan metode aksesFitur ke dalam kelas Dosen
Kelas ini menggunakan metode aksesFitur(), yang memberikan deskripsi khusus untuk pengguna yang berperan sebagai mahasiswa.
Sintaks yang digunakan sebagai berikut:

public function aksesFitur(){ return "Dosen $this->nama bisa memasukkan nilai mahasiswa"; }

•	Demonstrasikan dengan memanggil metode aksesFitur dari objek yang diinstansiasi
a)	Melakukan instansiasi objek mahasiswa
Membuat objek mahasiswa baru dengan nama (“Anita”)
Sintaks yang digunakan sebagai berikut:

$mahasiswa1 = new Mahasiswa("Anita");

b)	Melakukan instansiasi objek dosen
Membuat objek dosen baru dengan nama (“Dinda”)
Sintaks yang digunakan sebagai berikut:

$dosen1 = new Dosen("Dinda");

c)	Memanggil metode aksesFitur()
Metode aksesFitur() dipanggil untuk mencetak hasil dari masing-masing objek.
Sintaks yang digunakan sebagai berikut:

echo $mahasiswa1->aksesFitur();
echo $dosen1->aksesFitur();

d)	Output
Output yang dihasilkan sebagai berikut:

Mahasiswa Anita bisa melihat nilai
Dosen Dinda bisa memasukkan nilai mahasiswa

<h1><b>JOBSHEET 3</b></h1>
Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP

A.	Latihan
1.	Inheritance
•	Membuat kelas person dengan atribut nama dan metode getName()
a.	Membuat kelas person
Kelas merupakan struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek.
Untuk membuat kelas baru, digunakanlah sintaks sebagai berikut:

class Person{}
 
b.	Membuat protected properties
Atribut atau properties adalah variabel yang menyimpan data untuk untuk objek.
Protected properties merupakan properties yang hanya dapat di akses di kelas itu sendiri dan kelas turunannya.
Untuk membuat protected properties, digunakanlah sintaks sebagai berikut:

protected $nama;

c.	Membuat konstruktor
Konstruktor digunakan untuk mengatur nilai awal dari objek saat pertama kali dibuat.
Konstruktor juga bisa digunakan untuk menginisialisasi properti dengan nilai yang diberikan saat instansiasi.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

public function __construct($nama) { $this->nama = $nama; }

d.	Membuat metod getName()
Metod ini mengembalikan nilai dari atribut nama.
Sintaks yang digunakan sebagai berikut:

public function getName() { return $this->nama; }

•	Membuat kelas Student yang mewarisi dari Person dan menambahkan atribut studentID serta metode getStudentID()
a.	Membuat kelas Student yang merupakan kelas turunan dari kelas Person
Kelas Student mewarisi kelas person sehinggan akan memiliki semua atribut dan metod yang ada di kelas Person.
Sintaks yang digunakan sebagai berikut:

class Student extends Person {}

b.	Membuat konstruktor
Konstruktor di kelas Student memanggil konstruktor di kelas person untuk menginisialisasi atribut/properties nama, kemudian menginisialisasi studentID.
Sintaks yang diguanakan sebagai berikut:

public function __construct($nama, $studentID) { parent::__construct($nama); $this->studentID = $studentID; }

c.	Membuat metod getStudentID()
Metod getStudentID() berfungsi untuk mengembalikan nilai dari atribut studentID
Sintaks yang digunakan sebagai berikut:

public function getStudentID() { return $this->studentID; }
•	Instansiasi dan penggunaan
a.	Membuat objek student
Objek student dibuat dengan nama (“Alifia”) dan ID Mahasiswa “2309”
Sintaks yang digunakan sebagai berikut:

$student1 = new Student("Alifia", "2309");

b.	Memanggil metode
Memanggil metod getName() untuk menampilkan nama mahasiswa
Sintaks yang digunakan sebagai berikut:

echo $student1->getName();

Memanggil metod getStudentID() untuk menampilkan ID mahasiswa
Sintaks yang digunakan sebagai berikut:

echo $student1->getStudentID();

c.	Output 
Output yang dihasilkan sebagai berikut:

Alifia
2309
2.	Polymorphism
•	Membuat kelas Teacher yang juga mewarisi dari Person dan menambahkan atribut teacherID
a.	Membuat kelas Person
Kelas merupakan struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek.
Untuk membuat kelas baru, digunakanlah sintaks sebagai berikut:

class Person {}

b.	Membuat protected properties

Atribut atau properties adalah variabel yang menyimpan data untuk untuk objek.
Protected properties merupakan properties yang hanya dapat di akses di kelas itu sendiri dan kelas turunannya.
Untuk membuat protected properties, digunakanlah sintaks sebagai berikut:

protected $nama;

c.	Membuat konstruktor
Konstruktor digunakan untuk mengatur nilai awal dari objek saat pertama kali dibuat.
Konstruktor juga bisa digunakan untuk menginisialisasi properti dengan nilai yang diberikan saat instansiasi.
Sintaks yang digunakan dalam penulisan metode ini sebegai berikut:

public function __construct($nama) { $this->nama = $nama; }

d.	Membuat metod getName()
Metod ini mengembalikan nilai dari atribut nama.
Sintaks yang digunakan sebagai berikut:

public function getName() { return $this->nama; }

e.	Membuat kelas Student yang merupakan turunan dari kelas Person
Kelas Students mewarisi kelas Person sehingga dapat menggunakan atribut dan metode dari kelas Person.
Sintaks yang digunakan sebagai berikut:

class Student extends Person {}

f.	Membuat public properties
Atribut atau properties adalah variabel yang menyimpan data untuk untuk objek.
Public properties merupakan properties yang dapat di akses oleh semua kelas.
Untuk membuat protected properties, digunakanlah sintaks sebagai berikut:

public $studentID;

g.	Membuat konstruktor
Konstruktor digunakan untuk mengatur nilai awal dari objek saat pertama kali dibuat.
Konstruktor juga bisa digunakan untuk menginisialisasi properti dengan nilai yang diberikan saat instansiasi.
Sintaks yang digunakan dalam penulisan metode ini sebagai berikut:

public function __construct($nama, $studentID) { parent::__construct($nama); $this->studentID = $studentID; }

h.	Membuat metod getStudentID()
Metod ini digunakan untuk mengembalikan nilai studentID
Sintaks yang digunakan sebagai berikut:

public function getStudentID() { return "Student ID: $this->studentID"; }
i.	Membuat kelas Teacher yang merupakan turunan dari kelas Person
Kelas Teacher mewarisi kelas Person sehingga dapat menggunakan atribut dan metod dari kelas Person.
Sintaks yang digunakan sebagai berikut:

class Teacher extends Person {}

j.	Membuat private properties
Atribut atau properties adalah variabel yang menyimpan data untuk untuk objek.
Private properties merupakan properties yang hanya dapat digunakan oleh kelas itu sendiri
Untuk membuat protected properties, digunakanlah sintaks sebagai berikut:

private $teacherID;

k.	Membuat konstruktor
Konstruktor digunakan untuk mengatur nilai awal dari objek saat pertama kali dibuat.
Konstruktor juga bisa digunakan untuk menginisialisasi properti dengan nilai yang diberikan saat instansiasi.
Sintaks yang digunakan dalam penulisan metode ini sebagai berikut:

public function __construct($nama, $teacherID) { parent::__construct($nama); $this->teacherID = $teacherID; }

l.	Membuat metod getTeacherID()
Metod ini digunakan untuk mengembalikan nilai teacherID
Sintaks yang digunakan sebagai berikut:

public function getTeacherID() { return "Teacher ID is: $this->teacherID"; }

•	Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda
a.	Membuat metod getName() pada kelas Teacher
Metod ini digunakan untuk mengembalikan nilai nama di kelas Teacher.
Sintaks yang digunakan sebagai berikut:

public function getName() { return "Teacher name is: $this->nama"; }

b.	Membuat metod getName() pada kelas Student
Metod ini digunakan untuk mengembalikan nilai nama di kelas Student.
Sintaks yang digunakan sebagai berikut:

public function getName() { return "Student: $this->nama"; }
•	Instansiasi objek dan penggunaan metod
Sintaks yang digunakan sebagai berikut:

$student1 = new Student("Alifia", "2309"); echo $student1->getName(); echo "<br>"; echo $student1->getStudentID(); echo "<br>"; $teacher1 = new Teacher("Manda", "2890"); echo $teacher1->getName(); echo "<br>"; echo $teacher1->getTeacherID(); echo "<br>";
•	Output 
Output yang dihasilkan sebagai berikut

Student: Alifia
Student ID: 2309
Teacher name is: Manda
Teacher ID is: 2890

3.	Encapsulation
•	Mengubah atribut nama dan studentID dalam kelas Student menjadi privat
Atribut atau properties adalah variabel yang menyimpan data untuk untuk objek.
Private properties merupakan properties yang hanya dapat digunakan oleh kelas itu sendiri
Untuk membuat protected properties, digunakanlah sintaks sebagai berikut:

private $studentID;

•	Menambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut nama dan studentID
a.	Metod setter
Metod ini digunakan untuk mengubah nilai.
Sintaks yang digunakan sebagai berikut:

public function setStudentID($studentID) { $this->studentID = $studentID; } 
public function setName($nama) { $this->nama = $nama; } 

b.	Metod getter
Metod ini digunakan untuk mengembalikan nilai.
Sintaks yang digunakan sebagai berikut:

public function getStudentID() { return "Student ID: $this->studentID"; }
public function getName() { return "Student: $this->nama"; }

•	Instansiasi dan pemanggilan metod
Sintaks yang digunakan sebagai berikut:

$student1 = new Student("Alifia", "2309"); 
echo $student1->getName(); echo "<br>"; 
echo $student1->getStudentID(); 
echo "<br>"; 
echo $student1->setName("Ayu"); 
echo $student1->getName(); 
echo "<br>"; 
echo $student1->setStudentID("1309"); 
echo $student1->getStudentID(); 
echo "<br>";

•	Output
Output yang dihasilkan sebagai berikut:

Student: Alifia
Student ID: 2309
Student: Ayu
Student ID: 1309

4.	Abstraction
•	Membuat kelas abstrak Course dengan metode abstrak getCourseDetails()
a.	Membuat kelas abstrak Course
Kelas abstrak Course adalah kelas yang tidak dapat diinstansiasi secara langsung.
Kelas ini berfungsi sebagai template untuk kelas-kelas turunannya.
Sintaks yang digunakan sebagai berikut:

abstract class Course{}

b.	Membuat metode abstrak getCourseDetails
Metod ini bisa diimplementasikan oleh semua kelas turunan.
Sintaks yang digunakan sebagai berikut:

abstract public function getCourseDetails();

•	Membuat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda
a.	Membuat kelas OnlineCourse
Kelas ini mewarisi kelas corse sehinggan ia harus mengimplementasikan semua metod abstrak yang didefinisikan oleh kelas induknya.
Sintaks yang digunakan sebagai berikut:

class OnlineCourse extends Course {}

b.	Implementasi metod getCourseDetails
Metod ini berfungsi untuk mengembalikan nilai mengenai detail kursus.
Sintaks yang digunakan sebagai berikut:

public function getCourseDetails() { return "Kursus Online: $this->namaOnline dilakukan pada hari $this->waktuOnline"; }

c.	Membuat kelas OfflineCourse
Kelas ini mewarisi kelas corse sehinggan ia harus mengimplementasikan semua metod abstrak yang didefinisikan oleh kelas induknya.
Sintaks yang digunakan sebagai berikut:
class OfflineCourse extends Course {}

d.	Implementasi metod getCourseDetails
Metod ini berfungsi untuk mengembalikan nilai mengenai detail kursus.
Sintaks yang digunakan sebagai berikut:

public function getCourseDetails() { return "Kursus Offline: $this->namaOffline dilakukan di tempat $this->tempatOffline"; }

•	Instansiasi dan penggunaan metod
getCourseDetails() pada objek online1 mengembalikan detail tentang kursus online, yang kemudian ditampilkan.

getCourseDetails() pada objek offline1 mengembalikan detail tentang kursus offline, yang juga ditampilkan.
Sintaks yang digunakan sebagai berikut:

$online1 = new OnlineCourse("Privat Al-Faiz", "Minggu"); echo $online1->getCourseDetails(); echo "<br>"; $offline1 = new OfflineCourse("Brain Academy", "Cilacap"); echo $offline1->getCourseDetails(); echo "<br>";

•	Output
Output yang dihasilkan sebagai berikut:

Kursus Online: Privat Al-Faiz dilakukan pada hari Minggu
Kursus Offline: Brain Academy dilakukan di tempat Cilacap

B.	Tugas
1.	Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
•	Membuat kelas Person
•	Membuat kelas Dosen yang merupakan kelas turunan dari kelas Person
•	Membuat kelas Mahasiswa yang merupakan kelas turunan dari kelas Person
2.	Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
•	Membuat metod getInfo() pada kelas Dosen
•	Membuat metod getInfo() pada kelas Mahasiswa
3.	Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
•	Membuat metod getRole() pada kelas Person
•	Membuat metod getRole() pada kelas Dosen
•	Membuat metod getRole() pada kelas Mahasiswa
4.	Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
•	Membuat metod getter dan setter
5.	Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal
•	Membuat kelas Jurnal
•	Membuat kelas JurnalDosen 
•	Membuat metod pengajuanJurnal pada kelas JurnalDosen
•	Membuat kelas jurnalMahasiswa
•	Membuat metod pengajuanJurnal pada kelas JurnalMahasiswa
•	Output 
Output yang dihasilkan sebagai berikut:

Info mahasiswa -> Nama = Hafidziyah NIM = 230302082 Jurusan = TI
Hafidziyah sebagai mahasiswa
Anin
240302082
Info mahasiswa -> Nama = Anin NIM = 240302082 Jurusan = TI
Info dosen -> Nama = Bagas NIP = 24089 Mata Kuliah = Pancasila
Bagas sebagai dosen
Salsa
240765
Info dosen -> Nama = Salsa NIP = 240765 Mata Kuliah = Pancasila

Jurnal dengan judul Jurnal Pendidikan yang ditulis oleh Budi telah diajukan pada tanggal 25 Maret 2023
Jurnal dengan judul Jurnal Ilmiah yang ditulis oleh Arif telah diajukan pada tanggal 27 September 2023

#A.	Penjelasan konsep OOP

1.	Inheritance (pewarisan)
Inheritance adalah mekanisme di mana sebuah kelas (kelas turunan) dapat mewarisi atribut dan metode dari kelas lain (kelas induk).
2.	Polymorphism (polimorfisme)
Polimorfisme memungkinkan objek yang berbeda untuk diperlakukan sebagai objek dari kelas yang sama, biasanya melalui metode yang sama. Dalam OOP, ini sering diimplementasikan melalui method overriding (metode dengan nama yang sama tetapi perilaku berbeda dalam kelas turunan) atau method overloading (metode dengan nama yang sama tetapi parameter berbeda).
3.	Encapsulation (enkapsulasi)
Enkapsulasi adalah prinsip untuk menyembunyikan data dan hanya memperbolehkan akses melalui metode yang ditentukan. Biasanya menggunakan modifier akses seperti privat, protected, dan public.
4.	Abstraction (abstraksi)
Abstraksi adalah proses menyederhanakan kompleksitas dengan hanya menampilkan fitur penting dari objek dan menyembunyikan detail yang tidak perlu.




