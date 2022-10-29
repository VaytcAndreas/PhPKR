<?php
namespace College\VaytcWork;
use \DateTime;

class Gruppa {
        
        public function __construct(
        private string $specialnost,
        private DateTime $godFormirovania,
        private string $kurator,
    ) {}

    public function getGodFormirovania() : DateTime
    {
        return $this->godFormirovania;
    }

    public function getSpecialnost() : string
    {
        return $this->specialnost;
    }

    public function getKurator() : string
    {
        return $this->kurator;
    }
    
    public function changeKurator(string $newKurator) : void
    {
        $this->kurator = $newKurator;
    }

    

    
    








}