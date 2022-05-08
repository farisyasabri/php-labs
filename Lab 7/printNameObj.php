<?php

class Person{
    //properties
    public $firstName;
    public $lastName;

    //constructor
    function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function get_firstName(){
        return $this->firstName;
    }

    function get_lastName(){
        return $this->lastName;
    }

}    
    printName(10);
    function printName($num)
        {
            for($i=0;$i<$num;$i++){
                $person1 = new Person("John","Smith");
                echo $person1->get_firstName();
                echo $person1->get_lastName();
                echo "<br>";
            }
        }

?>