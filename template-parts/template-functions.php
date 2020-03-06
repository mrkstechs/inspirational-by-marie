<?php
/*
*
* @package Inspirational_By_Marie
*
* front-page.php Fucntions
*/

function marie_excerpt_count($words){
    if (str_word_count($words) <= 14) {
        echo '<p>'. $words . '</p>';
    } else {
        echo '<p>' . substr( $words, 0, 101) . '....</p>';
    }
}