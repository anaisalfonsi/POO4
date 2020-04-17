<?php

class Team
{
    private $name;
    private $attack = 20;
    private $life = 100;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function kick($target)
    {
        $target->life = $target->life - $this->attack;
    }
}




