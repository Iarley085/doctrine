<?php
namespace Alura\Doctrine\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\OneToMany;
use mysql_xdevapi\Collection;

#[Entity]
class Student
{
    #[Id, Column, GeneratedValue]
    public  int $id;
    #[OneToMany (targetEntity: Phones::class, mappedBy: "student")]
    public  Collection $phones;
    public function __construct(
        #[Column]
        public readonly string $name
    ){
        $this->phones = new ArrayCollection();
    }
    public function addPhone(Phones $phone)
    {
        $this->phones->add($phone);
        $phone->setStudent($this);
    }
    public function phones(): iterable
    {
        return $this->phones();
    }
}
