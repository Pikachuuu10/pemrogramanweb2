<?php

class Nilai {

    // property
    private $tugas;
    private $uts;
    private $uas;

    // setter
    public function setTugas($tugas) {
        if ($tugas >= 0 && $tugas <= 100) {
            $this->tugas = $tugas;
        } else {
            throw new Exception("Nilai tugas harus antara 0 dan 100.");
        }
    }

    public function setUTS($uts) {
        if ($uts >= 0 && $uts <= 100) {
            $this->uts = $uts;
        } else {
            throw new Exception("Nilai UTS harus antara 0 dan 100.");
        }
    }

    public function setUAS($uas) {
        if ($uas >= 0 && $uas <= 100) {
            $this->uas = $uas;
        } else {
            throw new Exception("Nilai UAS harus antara 0 dan 100.");
        }
    }

    // getter
    public function getTugas() {
        return $this->tugas;
    }

    public function getUTS() {
        return $this->uts;
    }

    public function getUAS() {
        return $this->uas;
    }

    public function getTotalNilai() {
        $totalNilai = 0.3 * $this->tugas + 0.35 * $this->uts + 0.35 * $this->uas;
        return $totalNilai;
    }
}
