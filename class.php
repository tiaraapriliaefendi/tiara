<?php
class Nama {
    // Atribut untuk menyimpan nama depan dan nama belakang
    private $namaDepan;
    private $namaBelakang;

    // Constructor untuk menginisialisasi atribut
    public function __construct($namaDepan, $namaBelakang) {
        $this->namaDepan = $namaDepan;
        $this->namaBelakang = $namaBelakang;
    }

    // Method untuk mendapatkan nama lengkap
    public function getNamaLengkap() {
        return $this->namaDepan . " " . $this->namaBelakang;
    }

    // Method untuk mengubah nama depan
    public function ubahNamaDepan($namaDepanBaru) {
        $this->namaDepan = $namaDepanBaru;
    }

    // Method untuk mengubah nama belakang
    public function ubahNamaBelakang($namaBelakangBaru) {
        $this->namaBelakang = $namaBelakangBaru;
    }
}

// Membuat objek dari kelas Nama
$nama1 = new Nama("tiara", "lia");
$nama2 = new Nama("aprilia ", "efendi");

// Menampilkan nama lengkap
echo "Nama Lengkap 1: " . $nama1->getNamaLengkap() . "<br>";
echo "Nama Lengkap 2: " . $nama2->getNamaLengkap() . "<br>";

// Mengubah nama depan dan nama belakang
$nama1->ubahNamaDepan("tiara");
$nama2->ubahNamaBelakang("aprilia efendi");

// Menampilkan nama lengkap setelah diubah
echo "Setelah diubah:<br>";
echo "Nama Lengkap 1: " . $nama1->getNamaLengkap() . "<br>";
echo "Nama Lengkap 2: " . $nama2->getNamaLengkap() . "<br>";

?>