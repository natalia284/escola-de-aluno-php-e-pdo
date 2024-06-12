<?php

use Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Natália Guimarães',
    new \DateTimeImmutable('2000-09-05')
);

echo $student->age();
