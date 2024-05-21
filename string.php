<?php

function processStrings($strings) {
    foreach ($strings as $string) {
        $vowelCount = preg_match_all('/[aeiou]/i', $string);
        $reversedString = strrev($string);
        printf("Original String: $string ,Vowel Count: $vowelCount,Reversed String: $reversedString\n");
    }
}

// Input array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Process and print the strings
processStrings($strings);
