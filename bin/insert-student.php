<?php
use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;
require_once __DIR__ . "/../vendor/autoload.php";
$entityManager = EntityManagerCreator::createEntityManager();

$phone1 = new \Alura\Doctrine\Entity\Phones('(85)991530528');
$phone2 = new \Alura\Doctrine\Entity\Phones('(85)987440824');
$entityManager->persist($phone1);
$entityManager->persist($phone2);
$student = new Student(name: "Dede");
$student->addPhone($phone2);
$student->addPhone($phone1);

$entityManager->persist($student);
$entityManager->flush();
