<?php

// ****************************************
// 1. Getting Unique Names from two lists
// ****************************************

$list1 = ['David', 'Sarah', 'John', 'Luc', 'Angela'];
$list2 = ['John', 'Luc', 'Martijn', 'Hillary', 'Angela'];

// merge -> filter w/ unique function
$list3 = array_unique(array_merge($list1, $list2));
print_r($list3);

// merge list -> eliminate duplicates

// **************************************
// 2. Looping a multi-dimentional array
// **************************************
$people = [
    [
        'first_name' => 'Quentin',
        'last_name'  => 'Tarrantino'
    ], 
    [
        'first_name' => 'Patty',
        'last_name'  => 'Jenkins'
    ],
    [ 
        'first_name' => 'Kathryn',
        'last_name'  => 'Bigelow'
    ],
    [
        'first_name' => 'Luc',
        'last_name'  => 'Besson'
    ]
];
$listNames = [];
foreach($people as $person) {
    array_push($listNames, $person['first_name']);
}
print_r($listNames);

// *******************************************
// 3. Use this class to add text to a string
// *******************************************

class TextInput {

    public $currentValue = '';
    
    public function add($text) {
        $this->currentValue .= $text;
    }

    public function getValue() {
        return $this->currentValue;
    }

}

$hello = str_split('Hello');
// create object
$sepHello = new TextInput;
// add charachters of Hello to object
foreach($hello as $char) {
    $sepHello->add($char);
}
//print 'Hello
echo $sepHello->getValue();
echo "\n";

// *************************************************
// Use foreach to loop from 0 to 100 in steps of 5, 
// showing each new number step on a new line
// *************************************************

// loop via recursion
function stepsOfFive() {
    echo 0;
    function inner_func($sum, $countTo) {
        if($sum === $countTo) {
            echo $countTo;
        } else {
            echo ' '.$sum;
            $sum = $sum + 5;
            inner_func($sum, $countTo);
        }
    };
    inner_func(5, 100);
}
stepsOfFive();
echo "\n";
?>