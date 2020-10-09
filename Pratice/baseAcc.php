<?php

class BaseAcc
{
    private $access;// tidak bisa di ubah di turunan
    public $accesspub;
    protected $accesspro;

    function __construct($pri,$pro)
    {
        $this->private = $pri;
        $this->protected= $pro;
    }
    function Priv(){
        echo "{$this->private}\n";
    }
    function Prot(){
        echo "{$this->protected}\n";
    }
    
 }
 $acces= new baseAcc("grant private","grant protect");
 $acces->Priv();
 $acces->Prot();
 $acces->accesspub="grant public";
 echo $acces->accesspub;
 
 