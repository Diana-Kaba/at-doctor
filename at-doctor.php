<?php
$temp = rand(350, 420)/10;

$start = <<<EOD
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>У лікаря</title>
</head>
<body>
<h2>3.2 У лікаря</h2>
EOD;
echo $start;

if ($temp < 37.7) {
    echo "\n <p style=\"color: lightgreen;\">$temp °C - здоров!</p> \n";
} elseif ($temp === 37.7) {
    echo "\n <p style=\"color: gold;\">$temp °C - щось нездужає…</p> \n";
} elseif ($temp > 0) {
    echo "\n <p style=\"color: red;\">$temp °C - хворий!</p> \n";
} else {
    echo "\n <p>$temp °C</p> \n";
}



$end = <<<EOD
</body>
</html>
EOD;
echo $end;
