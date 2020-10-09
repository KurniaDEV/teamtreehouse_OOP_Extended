<?php
include "koran.php";
class koran_extendes extends Koran{
public function IsiKoranBulanan(){


}
}
$KoranBandung = new Koran_extendes(92,260,10);
$KoranBandung->isi_koran();
// $KoranBandung->IsiKoranBulanan();
$KoranBandung->penulis="\nakbar kurnia";
echo $KoranBandung->penulis;