<?php
    function hitungModulus(){
        // inisialisasi nilai
        $nilaiA = $_POST['angka1'];
        $nilaiB = $_POST['angka2'];

        //operasi pembagian
        $proses = $nilaiA/$nilaiB;

        $hasil = 0; //inisialisasi nilai awal 0
        //jika nilai modulus tidak sama dengan 0
        if ($nilaiA % $nilaiB != 0) {
            //maka akan menghitung nilai modulusnya
            $hasil = " Modulus : ".$nilaiA % $nilaiB;
        } else { //jika tidak
            //maka akan menghitung ahsil pembagiannya
            $hasil = " Akhir : ".$proses;
        }
        return $hasil; //mengembalikan nilai $hasil
    }
?>