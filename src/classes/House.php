<?php
class House {
    public $windows = 4;
    public $doors = 1;
    public $address = "";

    public function __construct($address = "Kaut kur Rīgā"){
        echo "Starting a new class constructor! <br>";
        $this->address = $address;
       // echo "Our address is " . $myhouse->getAddress();
    }
    private function isValidAddress($newaddress){

    }
    public function setAddress($newaddress){
        echo "Old address was $this->address";
        $this->address = $newaddress;
        echo "<br> New address is $this->address";
    }
    public function openWindows()
    {
echo "<br>Opening All $this->windows Windows";
    }
}