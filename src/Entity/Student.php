<?php
namespace Alura\Doctrine\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\Collection;

#[Entity]
class Student
{
    #[Id, Column, GeneratedValue]
    public  int $id;
    #[OneToMany (mappedBy: "student", targetEntity: Phones::class)]
    public  Collection $phones;
    public function __construct(
        #[Column]
        public readonly string $name
    ){
        $this->phones = new ArrayCollection();
    }
    public function addPhone(Phones $phone): void
    {
        $this->phones->add($phone);
        $phone->setStudent($this);
    } /**
      * @return iterable<Phones>
      */
    public function phones(): iterable
    {
        return $this->phones();
    }
}
