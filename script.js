function hitungModulus(){
    // inisialisasi nilai
    var nilaiA = parseInt(document.kirim.angka1.value);
    var nilaiB = parseInt(document.kirim.angka2.value);

    var proses = nilaiA/nilaiB;
    //deklarasi variabel hasil
    var hasil;
    //jika nilai modulus tidak sama dengan 0
    if (nilaiA % nilaiB != 0) {
        proses = nilaiA % nilaiB; //maka akan menghitung nilai modulusnya
        hasil = "Hasil = "+proses.toString()+" merupakan hasil modulus. Klik OK untuk menampilkan hasil";
    }else{//jika tidak
        //maka akan menghitung ahsil pembagiannya
        hasil = "Hasil = "+proses.toString()+" Ini adalah hasil pembagian. Klik OK untuk menampilkan hasil";
    }

    window.alert(hasil); //menampilkan hasilnya di window
}

