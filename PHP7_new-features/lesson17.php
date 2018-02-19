<?php

$subject = "aaa aa bbb cc";
$numOfMatches;

echo "Subject to analyse:<br/>" . $subject . "<br/>";

preg_replace_callback_array(
        [
    '~[a]+~i' => function ($match) {
        echo $match[0] . ' match found for [a]<br/>';
    },
    '~[b]+~i' => function ($match) {
        echo $match[0] . ' match found for [b]<br/>';
    },
    '~[c]+~i' => function ($match) {
        echo $match[0] . ' match found for [c]<br/>';
    }
        ], $subject, 1, $numOfMatches
);

echo $numOfMatches;
