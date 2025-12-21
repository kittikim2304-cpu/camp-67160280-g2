@extends('template.default')

@section('title','my view')
@section('content')
<h1>My view</h1>
<?php
    echo "My view content";
    echo "<br>";
    echo "line 2";
?>
<br>
<?php
$myval =  "Hello PHP";
?>
<br>
<?php
$myval =  1;
    echo $myval;

    # การสร้าง Array ใน PHP
$myarry = [1,2,3,4];
$myarry2 = ["1","2","3","4"];
$myarry3[] = 1;
$myarry3[] = 2;
$myarry3[2] = 3;
$myarry3[] = 4;

echo $myarry[0];
echo "<br>";
print_r($myarry2);
echo "<br>";
var_dump($myarry3);
?>

<?php
$myarry4 = [
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    0,
    1
];
print_r($myarry4);
foreach ($myarry4 as $key => $value) {
    echo "<br>Key:" . $key . ", Value=" . $value;
}
foreach ($myarry4 as $value) {
    echo "<br>Value: " . $value;
}
$myval = "A";
$myVal = "F";
for ($i = 0; $i < 10; $i++) {
    echo $myval++;
    echo "<br>";
}

function myFunction(){
    return "My Function called";
}

echo MYfuncTION();

$a =10;

if ($a < 10) {
    echo "a < 10";
}
else if ($a == 10) {
    echo "a == 10";
}
else {
    echo "a > 10";
}
?>

@endsection
