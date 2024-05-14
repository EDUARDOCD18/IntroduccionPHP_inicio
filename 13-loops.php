<?php include 'includes/header.php';

/* While loop */
/* $i = 0;

while ($i < 10) {
    echo $i . "<br>";
    $i++;
}
echo "<br>"; */

/* do while */
/* $i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);
echo "<br>"; */

/* for loop */
/* for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
echo "<br>"; */

/* Algoritmo fizz buzz */
for ($i = 1; $i <= 60; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "- FizzBuzz" . "<br>";
    } elseif ($i % 3 === 0) {
        echo $i . "- Fizz" . "<br>";
    } elseif ($i % 5 === 0) {
        echo $i . "- Buzz" . "<br>";
    } else {
        echo $i . "<br>";
    }
}
include 'includes/footer.php';
