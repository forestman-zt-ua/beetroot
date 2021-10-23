<?php

class Users
{
    protected $name;

    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Workers extends Users
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

class Students extends Users
{
    private $grant;

    private $course;

    public function setGrant($amount)
    {
        $this->scholarship = $amount;
    }

    public function getScholarship()
    {
        return $this->grant;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}

class Drivers extends Workers
{
    private $expirience;

    private $categories = [];

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }
}

$vany = new Worker();

$vany->setAge(25);
$vany->setSalary(1000);


$vasy = new Worker();

$vasy->setAge(26);
$vasy->setSalary(2000);

$salarySum = $vany->getSalary() + $vasy->getSalary();