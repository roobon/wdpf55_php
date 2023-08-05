<?php

function getGradeMessage($grade) {
    switch (strtoupper($grade)) {
        case 'A':
            return 'Excellent';
        case 'B':
            return 'Good';
        case 'C':
            return 'Fair';
        case 'D':
            return 'Poor';
        case 'F':
            return 'Failure';
        default:
            return 'Invalid grade';
    }
}


echo "Enter your grade (A, B, C, D, or F): ";
$grade = trim(fgets(STDIN));


$message = getGradeMessage($grade);
echo "You have achieved: $message\n";
?>

