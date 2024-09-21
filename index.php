<?php
error_reporting(-1);

//define("ficl","back");
//
//$bddas = match (ficl){
//  "side" => "result0",
//  "back" => "result1",
//  12334 => "w33t",
//  default => "no result",
//};

function createStr($arg1, $arg2, $arg3)
{
    $qwerty = (string)$arg1 . (string)$arg2 . (string)$arg3;

    return $qwerty;
}

//var_dump(aerrf(12,55,1));

function splitString($str)
{
    $toArr = explode(" ", $str);
    $result = implode(" ", $toArr);
    $counter = 0;
    for ($i = 0; $i < strlen($result); $i++) {
        $counter += $result[$i];
    }
    return $counter;
}

//var_dump(splitString(12340));

//$stringa = " i have no space";
//function deleteSpaces($str)
//{
//    trim($str);
//    $arr = [];
//    $binar = explode(" ", $str);
//
//    for ($i = 0; $i < count($binar); $i++) {
//        $qwerty = implode("", $binar);
//        array_push($arr, $qwerty);
//    }
//
//    return $arr;
//
//}
//
//print_r(deleteSpaces($stringa));

function lex($first, $last)
{
    $resultArray = [];
    $result1 = ord($first);
    $result2 = ord($last);

    for ($i = $result1; $i < $result2; $i++) {
        $bmx = chr($i);
        array_push($resultArray, $bmx);
    }
    array_push($resultArray, $last);
    $finResult = implode("", $resultArray);
    return $finResult;
}

//print_r(lex("A", "Z"));

/*Это связано с другими моими Катами о кошках и собаках. Ката Задача У меня есть кошка и собака, которых я приобрела котенком/щенком.

Я забыл, когда это было, но знаю их нынешний возраст как кошачьи и собачьи. Определите, как долго я владею каждым из своих домашних животных,

и получите результат в виде списка [ownedCat, ownDog] ПРИМЕЧАНИЯ: Результаты представляют собой усеченные целые числа «человеческих» лет.

Кошачьи годы 15 кошачьих лет за первый год +9 кошачьих лет за второй год +4 кошачьих года за каждый последующий год Собачьи годы 15 собачьих лет

за первый год +9 собачьих лет за второй год +5 собачьих лет за каждый последующий год */

function ageCalculator($cat, $dog)
{
    $catCount = 0;
    $dogCount = 0;
    $resultArr = [$cat, $dog];
    foreach ($resultArr as $key => &$value) {
        for ($i = 0; $i < $value; $i++) {
            if ($key == 0) {
                if ($i === 0) {
                    $catCount += 9;
                } else {
                    $catCount += 4;
                }
            } else {
                if ($i === 0) {
                    $dogCount += 9;

                } else {
                    $dogCount += 5;
                }
            }
        }
    }

    return "cat have " . $catCount . " dog have " . $dogCount . " years old";
}

;
//print_r(ageCalculator(15, 15));

function numb($num)
{
    $resultArr = [
    ];
    for ($i = 1; $i <= $num; $i++) {
        for ($n = 0; $n < $num; $n++) {
            $z = $i - $n;
            if ($z < 0) {
                $z = 0;
            }
            array_push($resultArr, $z);
        }
    }
    return $resultArr;
}

//print_r(numb(4));

//$sresult = ["az", "toto", "picaro", "zone", "kiwi"];
//
//function creatorArrays($array)
//{
//    $qwertys = [];
//    $arrCounter = [];
//    $bigResult = ",";
//
//    for ($i = 0; $i < count($array); $i++) {
//        $xyz = implode(array_slice($array, $i, 1));
//        $resultx = implode(" ", $array);
//        $resultStr = strpos($resultx, $xyz);
//        array_push($qwertys, $resultStr);
//    }
//    for ($z =0; $z < count($array); $z++) {
//
//    }
//
//
//    return ;
//}
//
//print_r(creatorArrays($sresult));

$arrayResult = ["q", 1, "dff", "qwf", 2];
function filtrenOfNumbers($arr)
{
    function rtxPos($item)
    {
        if (gettype($item) === "integer") return true;
    }

    ;

    return $qxt = array_filter($arr, "rtxPos");
}

;
//print_r(filtrenOfNumbers($arrayResult))

$strx = "Uif usjdl up uijt lbub jt tjnqmf kvtu sfqmbdf fwfsz mfuufs xjui uif mfuufs uibu dpnft cfgpsf ju";
$qweetysss = " ";
function returnsStr($str)
{
    $resultArr = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $xtf = ord($str[$i]) - 1;
        if ($xtf === 31) {
            $xtf = 32;
        }
        array_push($resultArr, chr($xtf));
    };
    $resx = implode("", $resultArr);
    return $resx;
}

;
//print_r(returnsStr($strx));

$strf = "ananas";
function getDuble($str)
{
    $resultArr = [];

    for ($i = 0; $i < strlen($str); $i++) {
        array_push($resultArr, $str[$i]);
    }
    return array_count_values($resultArr);
}

//print_r(getDuble($strf));

$strx = "4of Fo1r pe6ople g3ood th5e the2";

function sortOfValue($str)
{
    $strToSplit = str_split($str);
    $resultArr = [];
    for ($i = 0; $i < count($strToSplit); $i++) {
        if (is_numeric($strToSplit[$i])) {
            array_push($resultArr, $strToSplit[$i]);
        }
        asort($resultArr);
    }
    $strToArr = explode(" ", $str);
    $arrValue = [];

    foreach ($resultArr as $keyOne => $valueOne) {

        foreach ($strToArr as $keyResult => &$valueResult) {
            if ($keyResult == $keyOne) {
                array_push($arrValue, $valueResult);
            }
        }
    }
    return implode(" ", $arrValue);

}

;
//print_r(sortOfValue($strx));

$strn = "abcdefx";

function splitStrings($str)
{
    $arrSplit = str_split($str);
    $result = [];
    $i = 0;
    do {
        $resultSplicer = array_splice($arrSplit, 0, 2);

        if (count($resultSplicer) <= 1) {
            array_push($resultSplicer, "_");

        }
        array_push($result, $resultSplicer);
    } while ($i < count($arrSplit));
    return $result;
}

//print_r(splitStrings($strn));

// асоциативний масив
$groceries = [
    'Orange_Juice' => [
        "price" => 1.5,
        "discount" => 10,
        "bogof" => false,
    ],
    'Chocolate' => [
        "price" => 2,
        "discount" => 0,
        "bogof" => true
    ],
    'pears' => [
        "price" => 4,
        "discount" => 2,
        "bogof" => false
    ],
];
$shoppingListCost = [['pears', 5], ['Chocolate', 6]];


function sumOfPrice($groceries, $shoppingListCost)
{
    $result = [];

    for ($j = 0; $j < count($shoppingListCost); $j++) {
        $currentProduct = $shoppingListCost[$j];
        $productName = $currentProduct[0];

        if ($groceries[$productName]["bogof"] === false) {
            $result = [$productName => "this product is out"];
            continue;
        }
        $priceWithoutDiscount = $groceries[$productName]['price'] * $currentProduct[1];
        $priceWithDiscount = $priceWithoutDiscount - $priceWithoutDiscount / 100 * $groceries[$productName]['discount'];
        $result[$productName] = $priceWithDiscount;
    }

    return $result;
}

//print_r(sumOfPrice($groceries, $shoppingListCost));


$cars_in_magazine = [
    ["brand" => "Toyota", "price" => 1000, "condition" => "used", "tittle" => "clean", "driving" => true, "year" => 1997,],
    ["brand" => "Subaru", "price" => 8500, "condition" => "used", "tittle" => "salvedge", "driving" => true, "year" => 2009,],
    ["brand" => "Nissan", "price" => 300, "condition" => "used", "tittle" => "clean", "driving" => true, "year" => 2017,],
    ["brand" => "Mazda", "price" => 47293, "condition" => "new", "tittle" => "clean", "driving" => true, "year" => 2023,],
    ["brand" => "Bmw", "price" => 3999, "condition" => "used", "tittle" => "salvedge", "driving" => false, "year" => 2007,],
];
$cars_for_search_in_customer = [
    ["price" => 1200, "tittle" => "clean", "driving" => true,],
    ["price" => 5000, "tittle" => "salvedge", "driving" => false],
    ["price" => 50000, "condition" => "new",],];

function car_value_search($magazine, $customer)
{
    $result_array = [];

    foreach ($customer as $key => $value) {
        $customer_price = $customer[$key]['price'];
        if ($customer[$key]["condition"] == null) {
            $customer[$key]["condition"] = ["used"] || ["new"];
        }
        if ($customer[$key]["tittle"] == null) {
            $customer[$key] ["tittle"] = ["salvedge"] || ["clean"];
        }
        if ($customer[$key]["driving"] === null) {
            $customer[$key]["driving"] = true || false;
        }

        foreach ($magazine as $key1 => $value1) {
            $magazine_price = $magazine[$key1]['price'];

            if ($customer_price >= $magazine_price) {
                $costumer_value_price = $value + array($value1);

                if ($customer[$key]["tittle"] == $magazine[$key1]["tittle"]) {

                    if ($customer[$key]["condition"] == $magazine[$key1]["condition"]) {

                        if ($customer[$key]["driving"] == $magazine[$key1]["driving"]) {
                            array_push($result_array, $costumer_value_price);
                        }
                    }
                }
            }
        }
    }
    return $result_array;
}

//print_r(car_value_search($cars_in_magazine, $cars_for_search_in_customer));


//function car_value_search1($magazine, $customer)
//{$result_array = [];
//
//    foreach ($customer as $key => $value) {
//        $customer_price = $customer[$key]['price'];
//
//        foreach ($magazine as $key1 => $value1) {
//
//            foreach ($value as $key2 => $value2) {
//          foreach($value1 as $key3 => $value3) {
//
//          }
//
//            }
//            }
//    }
//    return $key3;
//}
//print_r(car_value_search1($cars_in_magazine,$cars_for_search_in_customer));

$str_count = "qwertyqxnn";
function counter($str)
{
    $array_repeat_counter = [];
    $array_value_str = str_split($str);

    for ($i = 0; $i < strlen($str); $i++) {
        array_push($array_repeat_counter, substr_count($str, $str[$i]));
    }
    $result_arr = array_combine($array_value_str, $array_repeat_counter);

    foreach ($result_arr as $key => $value) {
        if ($value == 1) {
            unset($result_arr[$key]);
        }

    }

    return $result_arr;
}

;
//print_r(counter($str_count));

$tv_chanels_array = ["BBC1", "Abc", "BBC2", "MTV"];

function tv_chanels($chanels_array)
{
    $result_array = [];
    $result_array1 = [];
    natcasesort($chanels_array);

    foreach ($chanels_array as $key => $value) {
        array_push($result_array, $value);
    }
    $sort_doubles= array_unique($result_array);

    foreach ($sort_doubles as $key => $value) {
        array_push($result_array1, $key . " chanel", $value);

    }
    return $result_array1;
}

//print_r(tv_chanels($tv_chanels_array));


class Bnttx
{
    public $gggt = true;
    public $qwdf = "qwerrtys";
    public $bfft = null;
   public function __construct($qwdf,$bfft,$gggt)
   { $this->$bfft = $bfft;
       $this->$qwdf = $qwdf;
       $this->$gggt = $gggt;
   }
};
$xtrm = new Bnttx("fgw",false,12345);

require_once "Interf.php";
class Car implements Interf
{
    public $year ;
    public $model ;

    public $condition ;
    public static $qbase =0;
    function __construct($year,$model,$condition){
        $this->year = $year;
        $this->model = $model;
        $this->condition = $condition;
self::$qbase ++;
    }
     static public function qwertyss()
     {
         return self::$qbase;
     }
     public function xbtt($gvg)
     {
         // TODO: Implement xbtt() method.
         return 1;
     }
     public function qwertys($gfg)
     {
        return $gfg++;
     }


}
$car_price = new Car(1984,"tesla","used");
$car_big_price = new Car(2011,"mazda","used");
var_dump($car_price::$qbase);
var_dump(Car::qwertyss());
