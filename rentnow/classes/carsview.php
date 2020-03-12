
<?php

class CarsView extends CarsM
{
    public function showCar()
    {
       return $result=$this->getCar();

      
    }
    public function showSingleCar($id)
    {
       return $result=$this->getSingleCar($id);

      
    }

}
?>
