<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test 10.12.</title>
</head>
<body>

<?php
// TODO: napsat funkci
echo arrayProduct([['cislo' => 5] , ['cislo' => 4]]); // 20
echo '<br>';
echo arrayProduct([['cislo' => 1] , ['cislo' => 2], ['cislo' => 3]]); // 6
// TODO: napsat funkci
echo '<br>';
echo arrayLengthToString([1,2,3]); // délka pole: 3
echo '<br>';
echo arrayLengthToString([], 'délka prázdného pole je'); // délka prázdného pole je: 0
?>

</body>
</html>