<?php
use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;
require_once __DIR__ . "/../vendor/autoload.php";
$entityManager = \Alura\Doctrine\Helper\EntityManagerCreator::createEntityManager();

$studentRepository = $entityManager->getRepository(Student::class);
$studentList = $studentRepository->findAll();

foreach ($studentList as $student){
    echo "ID: $student->id\nNome: $student->name\n\n";
}
