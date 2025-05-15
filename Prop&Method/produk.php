<?php

// Jualan Produk
// Komik
// game

class Produk{
    public $judul = "judul";
           $penulis = "penulis";
           $penerbit = "penerbit";
           $harga = 0;
    
    public function sayHello(){
        return "Hello World";
    }       

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk = new Produk();
// $produk1->judul = "Naruto";
// $produk1->penulis

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony computer";
$produk4->harga = 250000;

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();
echo "<br>";
echo "Komik : " . $produk3->getlabel();

echo "<hr>";
echo "Game : " . $produk4->getLabel();
?>