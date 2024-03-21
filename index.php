<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Övningar PHP</title>
</head>
<body>
    Uppgift 1-5
1.
<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[3] carpet, the $color[2] lawn, the $color[1] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . "\n";
?>

2.
<?php
$colors = array( 'white', 'green', 'red' );
sort( $colors );
foreach ( $colors as $color ) {
echo "<li>{$color}</li> \n";
}
?>

3.
<?php
$ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

asort($cue);
foreach($ceu as $country => $capital)
{
echo "The capital $country is the $capital
";
}
?>

4.
<?php 
$arr = array(1,2,3,4,5);
print_r($arr);

array_splice($arr,2,1);
print_r($arr);
?>

5.
<?php 
$color = array(4 => 'white', 6 => 'green', 11=> 'red');

echo "$color[4]";
?>

Uppgift 5-10

5.
<?php 
$target_days = mktime(0,0,0,4,9,2023); 
?>

6.
<?php
echo date("Y/m/d")."\n";
echo date("y.m.d")."\n";
echo date("d-m-y")."\n";
?>

7.
<?php
var_dump(checkdate(2, 30, 2008));
var_dump(checkdate(2, 29, 2008));
?>

8.
<?php
$dt = "2008-02-23"; 
echo 'First day : '. date("Y-m-01", strtotime($dt)).' - Last day : '. date("Y-m-t", strtotime($dt));  
?>

9.
<?php
echo date('l \t\h\e jS');
?>

10.
<?php
$timestamp = strtotime('12-05-2014');
echo $timestamp."\n";
?>

Uppgift 1-5

1.
<?php
$filename = "i:/test.txt";
try {
    $fileContents = file_get_contents($filename);
    echo "File Contents:\n";
    echo $fileContents;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>

2.
<?php
function checkFileExists($filePath) {
    if (file_exists($filePath)) {
        echo "File exists at path: " . $filePath;
    } else {
        echo "File does not exist at path: " . $filePath;
    }
}  
  $filePath = "test.txt";
checkFileExists($filePath);
?>

3.
<?php
$filename = "i:/test.txt";

try {
    $lineCount = 0;
    $fileHandle = fopen($filename, 'r');
    if ($fileHandle === false) {
        throw new Exception("Error opening the file.");
    }

    while (!feof($fileHandle)) {
        $line = fgets($fileHandle);
        if ($line !== false) {
            $lineCount++;
        }
    }
    fclose($fileHandle);

    echo "Number of lines in the file: " . $lineCount;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>

4.
<?php
function writeToFile($filename, $content) {
    try {
        $fileHandle = fopen($filename, 'w');
        if ($fileHandle === false) {
            throw new Exception("Error opening the file for writing.");
        }

        fwrite($fileHandle, $content);

        fclose($fileHandle);

        echo "Content written to the file successfully.";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}

$filename = "i:/example.txt";
$content = "PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.";
writeToFile($filename, $content);
?>

5.
<?php
$filename = "i:/stock_data.csv";

try {
    $fileHandle = fopen($filename, 'r');
    if ($fileHandle === false) {
        throw new Exception("Error opening the file.");
    }

    echo "";
    while (($data = fgetcsv($fileHandle)) !== false) {
        echo "";
        foreach ($data as $cell) {
            echo "";
        }
        echo "";
    }
    echo "" . htmlspecialchars($cell) . "";

    fclose($fileHandle);
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>


</body>
</html>