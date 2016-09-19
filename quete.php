<?php
    $student = ['Emmanuel' => 42, 'Thierry' => 51, 'Pascal' => 45, 'Eric' => 48, 'Nicolas' => 19];

foreach ($student as $key => $value) {
    echo "$key => $value.\n";
}

echo "Moyenne d'âge:". $average = array_sum($student) / count($student);
