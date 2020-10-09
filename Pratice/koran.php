<?php

class koran{
   public $penulis; 
  private $kertas;
  private $tinta;
  private $jumlah;
  public function __construct($jumlah,$kertas,$tinta)
  {
    $this->kertas = $kertas;
    $this->jumlah = $jumlah;
    $this->tinta = $tinta;
  }
    public function isi_koran(){
        echo "untuk membuat {$this->jumlah} koran ini terdiri dari {$this->kertas} kertas dan membutuhkan {$this->tinta} kaleng tinta";
    }
}