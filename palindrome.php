<?php

    $num = $_POST["number"];
    $reverse = strrev($num);

    if ($num == $reverse) {
        echo "<p>$num is a Palindrome Number.</p>";
    } else {
        echo "<p>$num is NOT a Palindrome Number.</p>";
    }

?>