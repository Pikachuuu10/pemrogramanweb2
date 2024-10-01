<?php

require_once "orang.php";
require_once "Nilai.php";

class Mahasiswa extends Orang {
    protected $nim;
    protected Nilai $nilai;

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setNilai(Nilai $nilai) {
        $this->nilai = $nilai;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function tampilkanData() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUTS() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUAS() . "<br>";
        echo "Total Nilai : " . $this->nilai->getTotalNilai() . "<br>";
    }
}
