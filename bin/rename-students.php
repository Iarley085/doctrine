<?php
use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;
require_once __DIR__ . "/../vendor/autoload.php";
$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);
$student = $studentRepository->find($argv[1]);
$student->name =$argv[2];
$entityManager->flush();