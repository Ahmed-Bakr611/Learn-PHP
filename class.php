<?php
class Person
{

  public function __construct(public string $name, public int $age) {}
  public function introduce()
  {
    return "Hi, I`m {$this->name} and I`m {$this->age} years old.";
  }
  public function __toString()
  {
    return "$this->name is $this->age years old.";
  }
}

$person = new Person("Ahmed", 25);
echo $person->introduce();


class Employee extends Person
{

  public function __construct(public string $name, public int $age, public string $position)
  {
    parent::__construct($name, $age);
  }
  public function introduce(): string
  {
    return parent::introduce() . " with position : {$this->position}";
  }
}
echo "\n-----------Inheritance-----------------\n";
$emp = new Employee(name: "Ali", age: 38, position: "Senior");
echo $emp->introduce();
