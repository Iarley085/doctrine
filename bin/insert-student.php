<?php
use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;
require_once __DIR__ . "/../vendor/autoload.php";
$entityManager = \Alura\Doctrine\Helper\EntityManagerCreator::createEntityManager();
$student = new Student($argv[1]);
$entityManager->persist($student);
$entityManager->flush();
