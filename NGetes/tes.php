<?php
class Cycle {
  private $color;
  private $speed;
  protected $vavv;// tidak bisa di akses oleh turunan  
  
  public function __construct($color, $speed) {
    $this->color = $color;
    $this->speed = $speed;
    
  }
  public function canRide(){

    echo "The bycicle with color {$this->color} and the speed is {$this->speed}.";
  }
}
// ElectricCycle is inherited from Cycle
class ElectricCycle extends Cycle {

    public function Power()
    {
        echo "ElectricCycle have resurce new barres for power";
    }
}
$ElectricCycle = new ElectricCycle("RED","55km/h");
$ElectricCycle->canRide();
$ElectricCycle->Power();

?>

