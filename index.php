<?php
echo "hello world";
print(' i am a boy');


//block comment

/*multi line
comment*/

#comment

$boy = 5;
echo $boy;

$name = "gozie";
echo $name;//string

$arrays = array('hp', 'dell', 'mac', 'lenovo');
echo $arrays['1'];//array

$doubles = 4.333333;
echo $doubles; //doubles or decimals

//Arithmetic//
$a = 4;
$b = 6;
echo $a + $b;
echo "<br>";

$w = 9;
$r = 4;
echo $w - $r;
echo "<br>";

$t = 6;
$y = 3;
echo $t * $y;
echo "<br>";

$i = 10;
$q = 5;
echo $i / $q;
echo "<br>";

$t = 2;
$m = 4;
echo $t % $m;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/* strings */
// lenght

$namee = "john cena";

// strien - length of the string
echo strlen($namee);
echo "<br>";

// word count
echo str_word_count($namee);
echo "<br>";

// search for a specific text in a string
echo strpos($namee, "cena");
echo "<br>";

// reverse string
echo strrev($namee);
echo "<br>";

// word replace
echo str_replace("cena","wick",$namee);


// constant (case sensitive)
define("LANGUAGE", "PHP 7");
echo LANGUAGE;
echo "<br>";

// constant (case insensitive)
define("LANGUAGE", "PHP 7",true);
echo language;
echo "<br>";

// conditionals

$color = "green";
// if and else statement
if($color == "blue"){
    echo "good morning";
}else{
    echo "good evening";
}

#if and else statement ends--------

#if, else if and else
if($color == "blue"){
    print("good morning");
}elseif($color == "green"){
    print("good afternoon");
}elseif($color == "yellow"){
    print("good evening");
}else{
    print("am lost");
}

// strin concatenation
if($color!="green"){
    print "wrong color";
}else{
    echo ($color." color");
}

// switch statements
$laptop = "hp";

switch($laptop){
    case "lenovo":
        print "good laptop";
    break;
    case "dell":
        print "nice processor";
    break;
    case "hp":
        print "nice graphics";
    break;
    default:
        print "what laptop is this";            
}
echo "<br>"

// date("y/m/d")
// echo Date("y/m/d");


$date = "tuesday";

switch($date){
    case "monday":
        print "y/m/d";
    break;
    case "tuesday":
        print Date "y/m/d";
    break;
    case "wednesday":
        print "y/m/d";
    break;
    case "thurday":
        print "y/m/d";
    break;
    case "friday":
        print "y/m/d";
    break;
    case "saturday":
        print "y/m/d";
    break;
    case "sunday":
        print "y/m/d";
    break;
    default:
    print "what laptop is the date";            

    
    
    
    
    
    
}

?>


