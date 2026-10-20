<?php

class Mahasiswa {

    public string $nama;
    public string $nim;
    public string $prodi;

    public function __construct($nama, $nim, $prodi) {

        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;

        echo
        'Nama: '. $this->nama .'| '.
        'NIM: '.$this->nim. '| '.
        'prodi: '. $this->prodi ."<br>";
    }

    public function intro(){

        return 'Hello Everyone!!';
    }

}

$zulvan = new Mahasiswa('Zulvan','25426255201061', 'Teknik Informatika');

$andi = new Mahasiswa('Andi','25416255201223', 'Sistem Informasi');

echo $zulvan->intro(). "<br>";
echo $andi->intro();