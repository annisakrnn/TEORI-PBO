<?php
// Kelas EntitasTerbang
abstract class EntitasTerbang {
    protected $nama;
    protected $jumlahSayap;

    public function __construct($nama, $jumlahSayap) {
        $this->nama = $nama;
        $this->jumlahSayap = $jumlahSayap;
    }

    abstract public function terbang();
    abstract public function mendarat();
}

// Kelas Burung
abstract class Burung extends EntitasTerbang {
    protected $panjangParuh;

    public function __construct($nama, $jumlahSayap, $panjangParuh) {
        parent::__construct($nama, $jumlahSayap);
        $this->panjangParuh = $panjangParuh;
    }

    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara khas burung.<br>";
    }
}

// Kelas KakakTua
class KakakTua extends Burung {
    public function __construct($nama, $jumlahSayap, $panjangParuh) {
        parent::__construct($nama, $jumlahSayap, $panjangParuh);
    }

    public function meniruSuaraManusia() {
        echo "{$this->nama} dapat meniru suara manusia!<br>";
    }

    public function terbang() {
        echo "{$this->nama} terbang dengan anggun.<br>";
    }

    public function mendarat() {
        echo "{$this->nama} mendarat dengan mulus.<br>";
    }
}

// Kelas AyamJantan
class AyamJantan extends Burung {
    public function __construct($nama, $jumlahSayap, $panjangParuh) {
        parent::__construct($nama, $jumlahSayap, $panjangParuh);
    }

    public function berkokok() {
        echo "{$this->nama} berkokok: Kukuruyuk!<br>";
    }

    public function terbang() {
        echo "{$this->nama} hanya bisa terbang rendah.<br>";
    }

    public function mendarat() {
        echo "{$this->nama} mendarat di tanah.<br>";
    }
}

// Kelas KendaraanUdara
abstract class KendaraanUdara extends EntitasTerbang {
    protected $jumlahMesin;
    protected $kapasitasPenumpang;

    public function __construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang) {
        parent::__construct($nama, $jumlahSayap);
        $this->jumlahMesin = $jumlahMesin;
        $this->kapasitasPenumpang = $kapasitasPenumpang;
    }

    public function lakukanPerawatanBerkala() {
        echo "{$this->nama} sedang menjalani perawatan berkala.<br>";
    }
}

// Kelas PesawatTerbang
class PesawatTerbang extends KendaraanUdara {
    public function __construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang) {
        parent::__construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang);
    }

    public function terbang() {
        echo "{$this->nama} lepas landas dari landasan pacu.<br>";
    }

    public function mendarat() {
        echo "{$this->nama} mendarat di bandara.<br>";
    }
}

// Kelas Helikopter
class Helikopter extends KendaraanUdara {
    public function __construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang) {
        parent::__construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang);
    }

    public function hover() {
        echo "{$this->nama} sedang melayang di udara.<br>";
    }

    public function terbang() {
        echo "{$this->nama} mulai terbang secara vertikal.<br>";
    }

    public function mendarat() {
        echo "{$this->nama} mendarat dengan baling-baling berhenti.<br>";
    }
}

// Contoh Implementasi
echo "<h1>Demonstrasi Entitas Terbang</h1>";

// Kakak Tua
$kakakTua = new KakakTua("Kakak Tua", 2, 10);
$kakakTua->bersuara();
$kakakTua->terbang();
$kakakTua->meniruSuaraManusia();
$kakakTua->mendarat();

echo "<hr>";

// Ayam Jantan
$ayamJantan = new AyamJantan("Ayam Jantan", 2, 8);
$ayamJantan->bersuara();
$ayamJantan->berkokok();
$ayamJantan->terbang();
$ayamJantan->mendarat();

echo "<hr>";

// Pesawat Terbang
$pesawat = new PesawatTerbang("Boeing 737", 2, 2, 180);
$pesawat->terbang();
$pesawat->lakukanPerawatanBerkala();
$pesawat->mendarat();

echo "<hr>";

// Helikopter
$helikopter = new Helikopter("Apache", 0, 1, 5);
$helikopter->terbang();
$helikopter->hover();
$helikopter->mendarat();
?>
