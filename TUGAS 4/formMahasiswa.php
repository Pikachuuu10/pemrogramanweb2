<?php

class form {
    protected $fields;

    public function __construct()
    {
        $this->fields = [];
    }

    public function setTextField($nama, $text)
    {
        $label = "<div class='wrapper'><label for='" . $nama . "'>" . $nama . "</label>";
        // Perbaikan pada penulisan elemen input dan penutupan div yang benar
        $textfield = "<input class='form-input' type='text' name='" . $nama . "' value='" . $text . "'></div>";
        array_push($this->fields, $label . $textfield);
    }

    public function tampilkanForm()
    {
        echo "<form>";
        foreach ($this->fields as $field) {
            echo $field;
        }
        // Tambahkan tombol submit
        echo "<input type='submit' value='Simpan'>";
        echo "</form>";
    }
}

class formMahasiswa {

}
