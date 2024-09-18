`# Tugas1
#JOBSHEET 1
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

JOBSHEET 2
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




