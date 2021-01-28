<?php

namespace App\Service;

class ClassB
{
    private $classA;

    public function __construct(ClassA $classA)
    {
        $this->classA = $classA;
    }

    public function useClassA(): string
    {
        return $this->classA->getValue();
    }
}
