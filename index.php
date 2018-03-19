
<html>
<body>

<h1>Puslapis</h1>

<?php
echo "php";
?>

</body>
</html>
<h1>helo</h1>
<body>

<p>An ordered list:</p>
<ol>
    <li><?php echo "Coffee"; ?></li>
    <li>Tea</li>
    <li>Milk</li>
</ol>

<p>An unordered list:</p>
<ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>

</body>
<body>

<select>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
</select>

</body>
<br>
<body>
<ul>
    <li>
<img src="https://reneerushing.files.wordpress.com/2012/09/img_7756.jpg" alt="nature" idth="300" height="300">
    </li>
    <li>
        <img src="http://images.all-free-download.com/images/wallpapers_large/small_island_wallpaper_beaches_nature_wallpaper_1388.jpg" alt="nature" idth="300" height="300">
    </li>
</ul>
</body>
</br>
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>1 X 1 = 1</th>
        <th>1 X 2 = 2</th>
        <th>1 X 3 = 3</th>
        <th>1 X 4 = 4</th>
        <th>1 X 5 = 5</th>
        <th>1 X 6 = 6</th>
        <th>1 X 7 = 7</th>
        <th>1 X 8 = 8</th>
        <th>1 X 9 = 9</th>
        <th>1 X 10 = 10</th>
    </tr>
    <tr>
        <td>2 X 1 = 2</td>
        <td>2 X 2 = 4</td>
        <td>2 X 3 = 6</td>
        <td>2 X 4 = 8</td>
        <td>2 X 5 = 10</td>
        <td>2 X 6 = 12</td>
        <td>2 X 7 = 14</td>
        <td>2 X 8 = 16</td>
        <td>2 X 9 = 18</td>
        <td>2 X 10 = 20</td>
    </tr>
    <tr>
        <td>3 X 1 = 3</td>
        <td>3 X 2 = 6</td>
        <td>3 X 3 = 9</td>
        <td>3 X 4 = 12</td>
        <td>3 X 5 = 15</td>
        <td>3 X 6 = 18</td>
        <td>3 X 7 = 21</td>
        <td>3 X 8 = 24</td>
        <td>3 X 9 = 27</td>
        <td>3 X 10 = 30</td>

    </tr>
    <tr>
        <td>4 X 1 = 4</td>
        <td>4 X 2 = 8</td>
        <td>4 X 3 = 12</td>
        <td>4 X 4 = 16</td>
        <td>4 X 5 = 20</td>
        <td>4 X 6 = 24</td>
        <td>4 X 7 = 28</td>
        <td>4 X 8 = 32</td>
        <td>4 X 9 = 36</td>
        <td>4 X 10 = 40</td>
    </tr>
</table>

</body>
</html>
<body>

<?php
include ('fukncijos.php')
?>
<?php

echo suma(1, 20);

echo dalyba (1, 20);

echo daugyba (1, 20);

echo $vardas;
$amzius=21;
if ($amzius>=21) {
    echo $amzius;
}
else {
    echo "nepilnametis";
}

echo reverse ('labaggggs');

echo Palindrome ("labas")."<br>";

picture(7);

echo getChineseZodiac(5)

?>

<?php
$marius="marius";
$length=strlen($marius);

for ($string=$length; $string>=0; $string--);
{
    echo substr("marius", $length="0");
}
?>

<?php

$flags = ["Lenkija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/pl.svg',
"Baltarusija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/by.svg',
"Moldova" => "https://lipis.github.io/flag-icon-css/flags/4x3/mo.svg",
"Latvija" => "https://lipis.github.io/flag-icon-css/flags/4x3/lv.svg",
"Slovakija" => "https://lipis.github.io/flag-icon-css/flags/4x3/sl.svg",
"Lietuva" => "https://lipis.github.io/flag-icon-css/flags/4x3/lt.svg",
    ];

echo "<br>";
function getflag($flags) {
    foreach ($flags as $country => $flag) {
    $flags[$country] = sprintf('<img src="%s" height="100px">', $flag);
    }
    return $flags;
    }
    $getflags = getflag($flags);
print_r($getflags);
?>
<?php
$vacations = ["101"=> 4,"102" => 5,"103" => 2];
$reserved = ["101"=> 2,"102" => 3, "103" => 0];

foreach($vacations as $vacation => $rooms)
{
    $available = $rooms - $reserved[$vacation];
    echo "Rooms " . $vacation . " available : " . $available . "all : " . $rooms . "<br>";
}

?>
<?php
function rombas($number)
{
    for ($break = 1; $break <= $number; $break++) {
        for ($dot = $break; $dot <= $number; $dot++)
            echo "&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp;");
        echo "<br>";
    };
    for ($break = $number; $break >= 0; $break--) {
        for ($dot = $number - $break; $dot >= 0; $dot--)
            echo "&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp;");
        echo "<br>";
    }
}

rombas( 10);


$user1= ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 19];
$user2= ['vardas' => 'juozas', 'pavarde' => 'juozaitis', 'amzius' => 21];
$user3= ['vardas' => 'jonas', 'pavarde' => 'jonaitis', 'amzius' => 30];
$users=[$user1, $user2, $user3];
echo '<table>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['vardas'] . '</td>';
    echo '<td>' . $user['pavarde'] . '</td>';
    echo '<td>' . $user['amzius'] . '</td>';
    echo "<tr>";
    echo "<table>";
}

?>
</body>
</html>

