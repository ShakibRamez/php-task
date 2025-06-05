<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    if ($number <= 3) {
        return true;
    }

    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }


    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }

    return true;
}

$testNumber = 29;
if (isPrime($testNumber)) {
    echo "$testNumber is a prime number.";
} else {
    echo "$testNumber is not a prime number.";
}
?>
