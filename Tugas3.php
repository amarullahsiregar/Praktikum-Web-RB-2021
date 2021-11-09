<?php
function prime()
{
    echo "<b>BILANGAN PRIMA 1 - 50</b><br>";
    for ($i = 1; $i  < 51; $i++) {
        $isprime = false;
        $habis = 0;
        for ($j = 1; $j < $i + 1; $j++) {
            if ($i % $j == 0) {
                $habis++;
                // echo $i . " bagi : " . $habis . "<br>";
            }
        }
        if ($habis > 2) {
            $isprime = false;
        } else {
            $isprime = true;
        }
        if ($isprime == true) {
            echo $i . "<br>";
        }
    }
}

prime();
