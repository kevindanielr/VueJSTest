<?php

    //Class Car
    class Car{
        //Atributos
        public $color;
        public $power;
        public $brand;

        //Metodos

        //GETS
        public function getColor(){
            return $this->color;
        }
        
        public function getPower(){
            return $this->power;
        }

        public function getBrand(){
            return $this->brand;
        }

        //funcion que compara si el carro elegido es mas rapido que el de la clase
        public function whoIsMoreFast($selectCar){
            return $selectCar->power >$this->power;
        }

    }//End class Car

    //funcion para imprimir caracteristicas
    function printCharacteristics($car){
        echo 'Color: '.$car->getColor();
        echo "</br>";
        echo 'Power: '.$car->getPower();
        echo "</br>";
        echo 'Brand: '.$car->getBrand();
    }


    
    //Definiendo caracteristicas al objeto
    $myCar = new Car();
    $myCar->color = 'Red';
    $myCar->power = 128;
    $myCar->brand = 'Audi';

    $myCar1 = new Car();
    $myCar1->color = 'Blue';
    $myCar1->power = 150;
    $myCar1->brand = 'BMW';

    //Mostrar caracteristicas del objeto myCar
    //echo('Car color: '.$myCar->getColor());

    //Print con funcion
    printCharacteristics($myCar);
    echo "</br></br>";
    printCharacteristics($myCar1);
    echo "</br></br>";
    echo "</br></br>";

    //usando funcion de clase whoIsMoreFast
    if ($myCar->whoIsMoreFast($myCar1)) {
        echo $myCar1->brand.' its more faster than '.$myCar->brand;
    } else {
        echo $myCar->brand.' its more faster than '.$myCar1->brand;
    }
    


?>