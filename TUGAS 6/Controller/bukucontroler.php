<?php 

require_once "model/daftarbuku.php";

class bukucontroler{
    
    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";
      
    }
}