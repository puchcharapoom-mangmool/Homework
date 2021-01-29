<?php

$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$name4 = $_POST['name4'];
$name5 = $_POST['name5'];
$unit1 = $_POST['unit1'];
$unit2 = $_POST['unit2'];
$unit3 = $_POST['unit3'];
$unit4 = $_POST['unit4'];
$unit5 = $_POST['unit5'];
$grade1 = $_POST['grade1'];
$grade2 = $_POST['grade2'];
$grade3 = $_POST['grade3'];
$grade4 = $_POST['grade4'];
$grade5 = $_POST['grade5'];
$result = 0;

echo "Name subject1 : $name1 <br>";
echo "Unit : $unit1 <br>";
echo "Grade : $grade1 <br><hr>";

echo "Name subject2 : $name2 <br>";
echo "Unit : $unit2 <br>";
echo "Grade : $grade2 <br><hr>";

echo "Name subject3 : $name3 <br>";
echo "Unit : $unit3 <br>";
echo "Grade : $grade3 <br><hr>";

echo "Name subject4 : $name4 <br>";
echo "Unit : $unit4 <br>";
echo "Grade : $grade4 <br><hr>";

echo "Name subject5 : $name5 <br>";
echo "Unit : $unit5 <br>";
echo "Grade : $grade5 <br><hr>";
$mild = ($unit1*$grade1)+($unit2*$grade2)+($unit3*$grade3)+($unit4*$grade4)+($unit5*$grade5);
$jeab = ($unit1+$unit2+$unit3+$unit4+$unit5);
$result = $mild/$jeab;
echo "GPA : ".round($result,2) ."<hr>";