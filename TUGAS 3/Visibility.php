<?php

// Visibility.php

class Visibility{

    public $public = 'public';
    private $private = 'private';
    protected $protected= 'protected';

    function tampilkanData(){
        echo "Akses di ddalam kelas <br>";
        echo "Public: " . $this->public . "<br>";
        echo "Private: " . $this->private . "<br>";
        echo "Protected: " . $this->protected . "<br>";
    }

}