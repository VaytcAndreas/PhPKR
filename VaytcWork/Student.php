<?php
namespace College\VaytcWork;
require_once "C:\openserver\domains\PhPKR\college\VaytcWork\Gruppa.php";
use \DateTime;



class Student {
    private ?string $middleName = null;

    public function __construct(
        private Gruppa $gruppa,
        private DateTime $godPostuplenia,
        private string $firstName,
        private string $lastName,
        private DateTime $birthDate,
        private string $gender
    ) {}


    public function getGruppa() : Gruppa
    {
        return $this->gruppa;
    }

    public function getFirstName() : string
    {
        return ucfirst(strtolower($this->firstName));
    }

    public function getMiddleName() : ?string
    {
        return ucfirst(strtolower($this->middleName));
    }

    public function getLastName() : string
    {
        return ucfirst(strtolower($this->lastName));
    }

    public function getBirthDate() : DateTime
    {
        return $this->birthDate;
    }

    public function getGender() : string
    {
        return $this->gender;
    }

    public function changeFirstName(string $newFirstName) : void
    {
        $this->firstName = $newFirstName;
    }

    public function changeLastName(string $newLastName) : void
    {
        $this->lastName = $newLastName;
    }

    public function setMiddleName(string $middleName) : void
    {
        $this->middleName = $middleName;
    }

    public function getGodPostuplenia() : DateTime
    {
        return $this->godPostuplenia;
    }

    public function getFullName() : string
    {
        return implode(' ',
            [
                $this->getLastName(),
                $this->getFirstName(),
                $this->getMiddleName(),
            ]
        );
    }

    public function getInitials() : string
    {
        return $this->getLastName() .' ' .
            mb_substr($this->getFirstName(), 0, 1) . '.' .
            $this->getLastName() === null
                ? null
                : ' ' . mb_substr($this->getLastName(), 0, 1) . '.';
    }

















}
