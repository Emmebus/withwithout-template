<?php

Class food{
    public $name;
    public $vegan;
    private $drink;
    public $price;

    function __construct($aName, $aVegan, $aDrink, $aPrice){
        $this->name = $aName;
        $this->vegan = $aVegan;
        $this->drink = $aDrink;
        $this->price = $aPrice;
    }

    function DiscountCheck(){
        if($this->price >= 50){
            return "true";
        }
        return "false";
    }
//true and false written as string for clarity when testing code. Can be  used as boolean.



}


$food1 = new food("meatballs", false, "cola", 50);

$food2 = new food("salad", true, [], 15);

$food3 = new food("hamburger", false, "cola", 60);

echo $food1->DiscountCheck() . "<br>";
echo $food2->DiscountCheck() . "<br>";
echo $food3->DiscountCheck() . "<br>";

echo var_dump($food1) . "<br>";
echo var_dump($food2) . "<br>";
echo var_dump($food3) . "<br>";

?>
