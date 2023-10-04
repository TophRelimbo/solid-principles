<?php

interface VehichleInterface{
    public function drive();
    public function fly();
}

class FutureCar implements VehicleInterface{
    
    public function drive(){
        echo 'Driving a future car!';
    }

    public function fly(){
         echo 'Flying a future car!';
    }
}

class Car implements VechicleInterface{

    public function drive() {
        echo'Driving a car!';
    }

    public function fly() {
        throw new Exception ('Not implemented method');
    }
}

class Airplane implements VehicleInterface{

    public function drive(){
        throw new Excemption ('Not Implemented method');
    }

    public function fly (){
        echo'Flying an Airplane';
    }
}
?>
