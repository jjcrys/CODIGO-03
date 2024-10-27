<?php
function fibonacci($n)
{
    $r = null;
    if ($n == 0) {
        $r = 0;
    } else if ($n == 1) {
        $r = 1;
    } else {
        $r = fibonacci($n - 1) + fibonacci($n - 2);
    }

    return $r;
}

echo fibonacci(4);
?>
