<?php
    // Membuat Class
    class Manusia {
        public $nama;
        public $umur;

        public function setNama($name) {
            $this->nama = $name;
        }
        public function setUmur($umur) {
            $this->umur = $umur;
        }
        public function getInfo() {
            return "Nama: $this->nama <br>Umur: $this->umur<br>";
        }
    }

    //Membuat Objek 
    $miftah = new Manusia();
    $miftah->setNama("Miftah Adz Dzaudan Islam");
    $miftah->setUmur(18);
    echo $miftah->getInfo();

    echo "<br>";

    $kaffah = new Manusia();
    $kaffah->setNama("Kaffah Rizal");
    $kaffah->setUmur(19);
    echo $kaffah->getInfo();
?>