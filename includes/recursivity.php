<?php
function adjustRecursivity()
{
    global $pageLevel;
    $recursivityLevel = 1;
    $output = '';
    while ($recursivityLevel < $pageLevel) {
        $output .= '../';
        $recursivityLevel++;
    }
    return $output;
}
?>
