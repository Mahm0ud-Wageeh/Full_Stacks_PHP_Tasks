<?php
echo "1 - Question<br>";

$age = 20;

if ($age >= 18) {
    echo "Login Accepted<br>";
} else {
    echo "Login Rejected<br>";
}


////////////////////////////////////////////////////////////////////////////////////


echo "<br>2 - Question<br>";

function calculate($num1, $num2)
{
    echo "Multiplication = " . ($num1 * $num2) . "<br>";
    echo "Difference = " . ($num1 - $num2) . "<br>";
    echo "Division = " . ($num1 / $num2) . "<br>";
}

calculate(40, 16);


////////////////////////////////////////////////////////////////////////////////////

echo "<br>3 - Question<br>";

function sumArray($numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total = $total + $number;
    }

    return $total;
}

$numbers = array(50, 30, 40, 30);

echo sumArray($numbers) ."<br>";

////////////////////////////////////////////////////////////////////////////////////

echo "<br>4 - Question<br>";

$films = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "avatar";

$found = false;

foreach ($films as $film) {

    if ($film == $keyword) {
        $found = true;
        break;
    }

}

if ($found == true) {
    echo "yes" . "<br>";
}

else {
    echo "no" . "<br>";
}
    
////////////////////////////////////////////////////////////////////////////////////

echo "<br>5 - Question<br>";
function RouteBubble ($numbers)
{

    $length = count($numbers);

    for ($i = 0; $i < $length - 1; $i++) {
        for($j = 0; $j < $length -$i -1; $j++) {
            if ($numbers[$j] > $numbers[$j+1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $temp;
            }
        }
    }
    return $numbers;

}

$numbers = array (5,2,8,1,3);
$numbers = RouteBubble ($numbers);

foreach($numbers as $number)
{
    echo $number . "<br>";
}

////////////////////////////////////////////////////////////////////////////////////

echo "<br>6 - Question<br>";

$tests=array(5,4,9,3,1,7,5,8,6); 

$max = $tests[0];
foreach($tests as $number) {
    
    if($number > $max)
    {
        $max = $number;
    }

}

echo $max ."<br>";

////////////////////////////////////////////////////////////////////////////////////

echo "<br>7 - Question<br>";

$films=array("avatar","Prestige","avatar","Prestige"); $keyword="avatar"; 

$count = 0;
foreach($films as $film) {
    
    if($film == $keyword)
    {
        $count++;
    }

}

echo $count ."<br>";

///////////////////////////////////////////////////////////////////////////////

echo "<br>8 - Question<br>";

function RouteRandomPass($length){

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $pass = "";
    $len = strlen($chars);

    for($i = 0; $i < $length; $i++) {
        $pass .= $chars[rand(0, $len - 1)];
    }

    return $pass;

}
echo RouteRandomPass(25)."<br>";

////////////////////////////////////////////////////////////////////////////

echo "<br>9 - Question<br>";

$tests = array(1, "tariq", 1.5, true, 7, 's', false);

echo "For:<br>";

for ($i = 0; $i < count($tests); $i++) {

    if (is_bool($tests[$i])) {

        if ($tests[$i] == true) {
            echo "Yes<br>";
        } else {
            echo "NO<br>";
        }

    } else {
        echo $tests[$i] . "<br>";
    }
}

//////////////////////////////////////////////////////////////////////////////

echo "<br>10 - Question<br>";

$tests = array(6, 4, 9, 3, 12, 8, 7);

sort($tests);

foreach ($tests as $number) {
    echo $number ;
}

////////////////////////////////////////////////////////////////////////////////
echo "<br><br> 11 - Question<br>";

$arr1 = array('a', 'b', 'c', 'd');
$arr2 = array('c', 'd', 'e', 'f');

foreach ($arr1 as $value1) {

    foreach ($arr2 as $value2) {

        if ($value1 == $value2) {
            echo $value1 . " - ";
        }

    }

}
//////////////////////////////////////////////////////////////////////

echo " <br> <br> 12 - Question<br>";

if (isset($_POST['submit'])) {

    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    if (!is_numeric($price) || !is_numeric($quantity)) {

        echo "You must enter numbers";

    } elseif ($price < 0 || $quantity < 0) {

        echo "Negative numbers are not allowed";

    } else {

        $total = $price * $quantity;

        if ($total < 1000) {

            $discount = $total * 10 / 100;

        } else {

            $discount = $total * 15 / 100;

        }

        $afterDiscount = $total - $discount;

        echo "Total Before Discount = " . $total . " EGP<br>";
        echo "Discount = " . $discount . " EGP<br>";
        echo "Total After Discount = " . $afterDiscount . " EGP";
    }
}

?>

<br><br>

<form method="POST">

    <label>Product Price:</label>
    <input type="text" name="price">

    <br><br>

    <label>Quantity:</label>
    <input type="text" name="quantity">

    <br><br>

    <input type="submit" name="submit" value="Calculate">

</form>